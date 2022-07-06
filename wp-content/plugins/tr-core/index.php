<?php
/**
 * Plugin Name: tr-core
 * Description: Core theme Themerage
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Version:     1.0
 */

require_once( 'carbon-fields/vendor/autoload.php' );
\Carbon_Fields\Carbon_Fields::boot();

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options() {
    Container::make( 'user_meta', 'Others' )
        ->add_fields( array(
            Field::make( 'image', 'user_avatar', 'Avatar' )
        ) );
}

add_shortcode( 'show-cats-in-sidebar', 'show_cats_in_sidebar' );

function show_cats_in_sidebar() {
    $categories = get_categories( [
        'taxonomy'     => 'category',
        'type'         => 'post',
        'child_of'     => 0,
        'parent'       => '',
        'orderby'      => 'name',
        'order'        => 'ASC',
        'hide_empty'   => false,
        'hierarchical' => 1,
        'exclude'      => '',
        'include'      => '',
        'number'       => 0,
        'pad_counts'   => false,
    ] );

    if( $categories ) :
        ?>
        <ul class="homepage__left-items">
        <?php
        foreach( $categories as $cat ) :
            ?>
            <li>
                <span><?=$cat->name;?></span>
                <span><?=$cat->category_count ;?></span>
            </li>
            <?php
        endforeach;
        ?>
        </ul>
        <?php
    endif;
}

add_shortcode( 'articlecite', 'articlecite_function' );

function articlecite_function( $atts, $content, $tag ) {
    ?>
    <p class="article__writing-descr"><?=$content;?></p>
    <?php
}

add_shortcode( 'author-excerpt', 'author_excerpt_function' );

function author_excerpt_function( $atts, $content, $tag ) {
    ?>
        <div class="main__article-inner">
            <div class="main__article-top">
                <h1 class="main__article-title"><?php the_title(); ?></h1>
            </div>
            <div class="main__article-bottom">
                <p class="main__article-descr"><?=$content;?></p>
                <div class="block__data">
                    <span><?=$atts['author'];?></span>
                    <img src="<?=get_template_directory_uri();?>/img/star.png" alt="">
                    <span><?=$atts['date'];?></span>
                </div>
            </div>
        </div>
    <?php
}