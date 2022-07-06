<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themerage
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <?php if (is_page_template( 'main-page-dark.php' )): ?>
        <style>
            body{
                background-color: #006D77;
                color: #EDF6F9;
            }
        </style>
    <?php endif; ?>

</head>
<body>

<header class="header menu__outside">
    <div id="overlay1" class="visible-xs-block hide"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="header__inner">
                    <div class="header__logo">
                        <p>Cutura</p>
                    </div>
                    <?php 
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => '',
                            'container'       => false,
                            'menu_class'      => 'header__items hidden-xs',
                            'echo'            => true,
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                        ] );
                    ?>
                    <!-- <ul class="header__items hidden-xs">
                        <li><a class="header__item-active" href="bottom-homepage.html">Home</a></li> 
                        <li><a class="header__item" href="bottom-about.html">about</a></li>
                        <li><a class="header__item" href="subscription.html">subscription</a></li>
                        <li><a class="header__item" href="bottom-community.html">Community</a></li>
                        <li><a class="header__item" href="bottom-shop.html">Shop</a></li>
                        <li><a class="header__item" href="bottom-cart.html">Cart</a></li>
                    </ul> -->
                    <div class="btn-mobile-menu-open">
                        <span></span>
                    </div>
                    <div class="header__wrapper mobile-menu visible-xs-block">
                        <?php 
                            wp_nav_menu( [
                                'theme_location'  => '',
                                'menu'            => '',
                                'container'       => false,
                                'menu_class'      => 'header__items',
                                'echo'            => true,
                                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                            ] );
                        ?>
                        <!-- <ul class="header__items">
                            <li><a class="header__item-active" href="bottom-homepage.html">Home</a></li> 
                            <li><a class="header__item" href="bottom-about.html">about</a></li>
                            <li><a class="header__item" href="subscription.html">subscription</a></li>
                            <li><a class="header__item" href="bottom-community.html">Community</a></li>
                            <li><a class="header__item" href="bottom-shop.html">Shop</a></li>
                            <li><a class="header__item" href="bottom-cart.html">Cart</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>