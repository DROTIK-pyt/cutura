<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themerage
 */

?>
<footer class="footer" style="background-color: #d9edee;">
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
                    <ul class="footer__links">
                        <li><a href=""><img src="<?=get_template_directory_uri()?>/img/Facebook.png" alt=""></a></li>
                        <li><a href=""><img src="<?=get_template_directory_uri()?>/img/Twitter.png" alt=""></a></li>
                        <li><a href=""><img src="<?=get_template_directory_uri()?>/img/instagram.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="footer__text">
                    <p>Cutura © 2021 — All Right Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>