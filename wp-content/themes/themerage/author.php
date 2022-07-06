<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themerage
 */

get_header();
$avatar_id = carbon_get_user_meta( get_the_author_meta( 'ID' ), 'user_avatar' );

$image_url = wp_get_attachment_url( $avatar_id );

?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="main__title"><?php the_author(); ?></h1>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="main__img">
                    <img src="<?=$image_url;?>" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="main__text">
                    <p class="main__descr"><?php the_author_meta( 'description' );?></p>
                    <div class="main__data">
                        <span><?php the_author(); ?></span>
                        <img src="<?=get_template_directory_uri();?>/img/star.png" alt="">
                        <span>Author</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="community__title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Other articles by the author</h2>
            </div>
        </div>
    </div>
</div>

<div class="author">
    <div class="container">
        <div class="row">
            <?php
            $query = new WP_Query( [ 'author' => get_the_author_meta( 'ID' ) ] );
            while( $query->have_posts() ):
                $query->the_post();
            ?>
            <div class="col-xs-6">
                <div class="block">
                    <div class="block__img-background" style="background: url('<?php the_post_thumbnail_url('full'); ?>'); width: 570px; height: 300px;">
                        <div class="block__center block__center-lt">
                            <span><?php the_author();?></span>
                            <img src="<?=get_template_directory_uri();?>/img/star-white.png" alt="">
                            <span><?php the_date( 'F, Y' ); ?></span>
                        </div>
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <p class="block__descr"><?php the_excerpt(); ?></p>
                    <div class="link">
                        <a href="<?php the_permalink(); ?>">Keep Reading</a>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<?php
get_footer();
