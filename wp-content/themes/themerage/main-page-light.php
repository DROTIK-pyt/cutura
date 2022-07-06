<?php
/*
Template Name: Main page light
Template Post Type: page
*/

/**
 * Generates array of pagination links.
 *
 * @author Kama (wp-kama.com)
 * @varsion 2.5
 *
 * @param array $args {
 *
 *     @type int    $total        Maximum allowable pagination page.
 *     @type int    $current      Current page number.
 *     @type string $url_base     URL pattern. Use `{pagenum}` placeholder.
 *     @type string $first_url    URL to first page. Default: '' - taken automaticcaly from $url_base.
 *     @type int    $mid_size     Number of links before/after current: 1 ... 1 2 [3] 4 5 ... 99. Default: 2.
 *     @type int    $end_size     Number of links at the edges: 1 2 ... 3 4 [5] 6 7 ... 98 99. Default: 1.
 *     @type bool   $show_all     true - Show all links. Default: false.
 *     @type string $a_text_patt  `%s` will be replaced with number of pagination page. Default: `'%s'`.
 *     @type bool   $is_prev_next Whether to show prev/next links. « Previou 1 2 [3] 4 ... 99 Next ». Default: false.
 *     @type string $prev_text    Default: `« Previous`.
 *     @type string $next_text    Default: `Next »`.
 * }
 *
 * @return array
 */
function kama_paginate_links_data( array $args ): array {
    global $wp_query;

    $args += [
        'total'        => 1,
        'current'      => 0,
        'url_base'     => '/{pagenum}',
        'first_url'    => '',
        'mid_size'     => 2,
        'end_size'     => 1,
        'show_all'     => false,
        'a_text_patt'  => '%s',
        'is_prev_next' => false,
        'prev_text'    => '« Previous',
        'next_text'    => 'Next »',
    ];

    $rg = (object) $args;

    $total_pages = max( 1, (int) ( $rg->total ?: $wp_query->max_num_pages ) );

    if( $total_pages === 1 ){
        return [];
    }

    // fix working parameters

    $rg->total = $total_pages;
    $rg->current = max( 1, abs( $rg->current ?: get_query_var( 'paged', 1 ) ) );

    $rg->url_base = $rg->url_base ?: str_replace( PHP_INT_MAX, '{pagenum}', get_pagenum_link( PHP_INT_MAX ) );
    $rg->url_base = wp_normalize_path( $rg->url_base );

    if( ! $rg->first_url ){
        // /foo/page(d)/2 >>> /foo/ /foo?page(d)=2 >>> /foo/
        $rg->first_url = preg_replace( '~/paged?/{pagenum}/?|[?]paged?={pagenum}|/{pagenum}/?~', '', $rg->url_base );
        $rg->first_url = user_trailingslashit( $rg->first_url );
    }

    // core array

    if( $rg->show_all ){
        $active_nums = range( 1, $rg->total );
    }
    else {

        if( $rg->end_size > 1 ){
            $start_nums = range( 1, $rg->end_size );
            $end_nums = range( $rg->total - ($rg->end_size - 1), $rg->total );
        }
        else {
            $start_nums = [ 1 ];
            $end_nums = [ $rg->total ];
        }

        $from = $rg->current - $rg->mid_size;
        $to = $rg->current + $rg->mid_size;

        if( $from < 1 ){
            $to = min( $rg->total, $to + absint( $from ) );
            $from = 1;

        }
        if( $to > $rg->total ){
            $from = max( 1, $from - ($to - $rg->total) );
            $to = $rg->total;
        }

        $active_nums = array_merge( $start_nums, range( $from, $to ), $end_nums );
        $active_nums = array_unique( $active_nums );
        $active_nums = array_values( $active_nums ); // reset keys
    }

    // fill by core array

    $pages = [];

    if( 1 === count( $active_nums ) ){
        return $pages;
    }

    $item_data = static function( $num ) use ( $rg ){

        $data = [
            'is_current'   => false,
            'page_num'     => null,
            'url'          => null,
            'link_text'    => null,
            'is_prev_next' => false,
            'is_dots'      => false,
        ];

        if( 'dots' === $num ){

            return (object) [
            'is_dots' => true,
            'link_text' => '…',
        ] + $data;
        }

        $is_prev = 'prev' === $num && ( $num = max( 1, $rg->current - 1 ) );
        $is_next = 'next' === $num && ( $num = min( $rg->total, $rg->current + 1 ) );

        $data = [
            'is_current'   => ! ( $is_prev || $is_next ) && $num === $rg->current,
            'page_num'     => $num,
            'url'          => 1 === $num ? $rg->first_url : str_replace( '{pagenum}', $num, $rg->url_base ),
            'is_prev_next' => $is_prev || $is_next,
        ] + $data;

        if( $is_prev ){
            $data['link_text'] = $rg->prev_text;
        }
        elseif( $is_next ) {
            $data['link_text'] = $rg->next_text;
        }
        else {
            $data['link_text'] = sprintf( $rg->a_text_patt, $num );
        }

        return (object) $data;
    };

    foreach( $active_nums as $indx => $num ){

        $pages[] = $item_data( $num );

        // set dots
        $next = $active_nums[ $indx + 1 ] ?? null;
        if( $next && ($num + 1) !== $next ){
            $pages[] = $item_data( 'dots' );
        }
    }

    if( $rg->is_prev_next ){
        $rg->current !== 1 && array_unshift( $pages, $item_data( 'prev' ) );
        $rg->current !== $rg->total && $pages[] = $item_data( 'next' );
    }

    return $pages;
}

get_header();
?>

<main class="main__homepage" style="background: url('<?=get_template_directory_uri()?>/img/b_homepage_main.png') center no-repeat; width: 1920; height: 643px;">
        <div class="container">
            <div class="col-xs-12">
                <div class="main__homepage-inner">
                    <h1 class="main__homepage-title">Life and Stress at the Ice Edge by paul nickles</h1>
                    <p class="main__homepage-descr">Emperor penguins can propel themselves out of Antartica’s icy waters in astonishing leaps that defy gravity.</p>
                </div>
            </div>
        </div>
    </main>

    <?php
        $paged = get_query_var('page') ? get_query_var('page') : 1;
        $query = new WP_Query( array(
            'post_type'   => 'post',
            'paged' => $paged,
        ) );
    ?>
    <div class="homepage">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <?php
                    while( $query->have_posts() ):
                        $query->the_post();
                    ?>
                    <div class="homepage__block">
                        <div class="homepage__block-img" style="background: url('<?php the_post_thumbnail_url('full'); ?>') no-repeat center; width: 370px; height: 600px;"></div>
                        <div class="block">
                            <div class="block__data">
                                <span><?php the_author();?></span>
                                <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                <span><?php the_date( 'F, Y' ); ?></span>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <p class="block__descr"><?php the_excerpt(); ?></p>
                            <div class="link">
                                <a href="<?php the_permalink(); ?>">Keep Reading</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); 
                        $url_base = get_site_url().'/page';
                        $links_data = kama_paginate_links_data( [
                            'total'    => $query->max_num_pages,
                            'current'  => $paged,
                            'url_base' => $url_base.'/{pagenum}',
                            'mid_size' => 1,
                        ] );
                    if( $links_data ) :
                    ?>
                    <ul class="pagination__homepage">
                        <?php if ($paged-1 > 0): $prev_paged = $paged-1; ?>
                            <li><a href="<?= $url_base.'/'.$prev_paged ?>"><img src="<?=get_template_directory_uri()?>/img/arrow_left-active.png" alt=""></a></li>
                        <?php endif; ?>
                        <?php foreach( $links_data as $link ) : ?>
                            <?php if ($link->is_dots) : ?>
                                <li>...</li>
                            <?php elseif ($link->is_current) : ?>
                                <li><a href="#!"><?= $link->link_text; ?></a></li>
                            <?php else : ?>
                                <li><a href="<?php esc_attr_e( $link->url ) ?>"><?= $link->link_text; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php if ($paged+1 < $query->max_num_pages ): $next_paged = $paged+1;  ?>
                            <li><a href="<?= $url_base.'/'.$next_paged ?>"><img src="<?=get_template_directory_uri()?>/img/arrow_right-active.png" alt=""></a></li>
                        <?php endif; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="homepage__left">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="subscription">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="subscription__title">subscription</h1>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="subscription__img">
                    <img src="<?=get_template_directory_uri()?>/img/b_subscription.png" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="subscription__text">
                    <p class="subscription__subtitle">SubscribE to Cutura</p>
                    <p class="subscription__descr">Get all the latest posts delivered straight to your inbox.</p>
                    <form action="" class="subscription__form">
                        <input type="text" placeholder="Your name" class="subscription__input">
                        <input type="text" placeholder="Your email adress" class="subscription__input">
                        <input type="submit" class="form__submit" value="subscribe">
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    </div>

<?php
get_footer();
