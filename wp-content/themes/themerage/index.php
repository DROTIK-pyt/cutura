<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themerage
 */

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

    <div class="homepage">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <div class="homepage__block">
                        <div class="homepage__block-img" style="background: url('<?=get_template_directory_uri()?>/img/b_homepage1.png') no-repeat center; width: 370px; height: 600px;"></div>
                        <div class="block">
                            <div class="block__data">
                                <span>Jody MacDonald</span>
                                <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                <span>October, 2021</span>
                            </div>
                            <h3>Journey Through the Sahara</h3>
                            <p class="block__descr">For 700km, day and night, we slithered through the vast uninhabited Sahara desert, sleeping on top of Mauritania’s infamous iron ore train.</p>
                            <div class="link">
                                <a href="bottom-article.html">Keep Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="homepage__block">
                        <div class="homepage__block-img" style="background: url('<?=get_template_directory_uri()?>/img/b_homepage2.png') no-repeat center; width: 370px; height: 600px;"></div>
                        <div class="block">
                            <div class="block__data">
                                <span>Anuar Patjane</span>
                                <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                <span>August, 2021</span>
                            </div>
                            <h3>In Search of Whales</h3>
                            <p class="block__descr">Far out in the Pacific Ocean, my dream to dive with magnificent humpback whales finally comes true. Yet while we are out there, a darker..</p>
                            <div class="link">
                                <a href="bottom-article.html">Keep Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="homepage__block">
                        <div class="homepage__block-img" style="background: url('<?=get_template_directory_uri()?>/img/b_homepage3.png') no-repeat center; width: 370px; height: 600px;"></div>
                        <div class="block">
                            <div class="block__data">
                                <span>Jody MacDonald</span>
                                <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                <span>October, 2021</span>
                            </div>
                            <h3>Journey Through the Sahara</h3>
                            <p class="block__descr">For 700km, day and night, we slithered through the vast uninhabited Sahara desert, sleeping on top of Mauritania’s infamous iron ore train.</p>
                            <div class="link">
                                <a href="bottom-article.html">Keep Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="homepage__block">
                        <div class="homepage__block-img" style="background: url('<?=get_template_directory_uri()?>/img/b_homepage4.png') no-repeat center; width: 370px; height: 600px;"></div>
                        <div class="block">
                            <div class="block__data">
                                <span>Daniel Noll and Audrey Scott</span>
                                <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                <span>August, 2021</span>
                            </div>
                            <h3>Lessons in Planning
                                and Travel During
                                Covid</h3>
                            <p class="block__descr">How did you research and travel during the pandemic? Did you take any additional travel safety measures or change your...</p>
                            <div class="link">
                                <a href="bottom-article.html">Keep Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="homepage__block">
                        <div class="homepage__block-img" style="background: url('<?=get_template_directory_uri()?>/img/b_homepage5.png') no-repeat center; width: 370px; height: 600px;"></div>
                        <div class="block">
                            <div class="block__data">
                                <span>Paul Nickles</span>
                                <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                <span>October, 2021</span>
                            </div>
                            <h3>The First Tide of Spring</h3>
                            <p class="block__descr">Every year, the tiny shell of a new moon brings the first spring tide lapping onto shore, announcing the arrival of the fish. The surface...</p>
                            <div class="link">
                                <a href="bottom-article.html">Keep Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="homepage__block">
                        <div class="homepage__block-img" style="background: url('<?=get_template_directory_uri()?>/img/b_homepage6.png') no-repeat center; width: 370px; height: 600px;"></div>
                        <div class="block">
                            <div class="block__data">
                                <span>Jody MacDonald</span>
                                <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                <span>August, 2021</span>
                            </div>
                            <h3>Life and Stress at the Ice Edge</h3>
                            <p class="block__descr">Emperor penguins can propel themselves out of Antartica’s icy waters in astonishing leaps that defy gravity. Following my own...</p>
                            <div class="link">
                                <a href="bottom-article.html">Keep Reading</a>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination__homepage">
                        <!-- <li><a href=""><img src="<?=get_template_directory_uri()?>/img/arrow_left-active.png" alt=""></a></li> -->
                        <li><a class="pagination-active" href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href=""><img src="<?=get_template_directory_uri()?>/img/arrow_right-active.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="homepage__left">
                        <?php get_sidebar(); ?>
                        <!-- <div class="homepage__left-left">
                            <h3 class="homepage__left-subtitle">about us</h3>
                            <div class="block">
                                <div class="block__img-background" style="background: url('<?=get_template_directory_uri()?>/img/b_homepage7.png'); width: 270px; height: 229px;"></div>
                                <p class="block__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices consequat quis at aenean...</p>
                                <div class="link">
                                    <a href="/about">Keep Reading</a>
                                </div>
                            </div>
                            <h3 class="homepage__left-subtitle">about us</h3>
                            <ul class="footer__links">
                                <li><a href=""><img src="<?=get_template_directory_uri()?>/img/Facebook.png" alt=""></a></li>
                                <li><a href=""><img src="<?=get_template_directory_uri()?>/img/Twitter.png" alt=""></a></li>
                                <li><a href=""><img src="<?=get_template_directory_uri()?>/img/instagram.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="homepage__left-right">
                            <h3 class="homepage__left-subtitle">topics</h3>
                            <ul class="homepage__left-items">
                                <li>
                                    <span>food</span>
                                    <span>5</span>
                                </li>
                                <li>
                                    <span>holiday</span>
                                    <span>2</span>
                                </li>
                                <li>
                                    <span>bussines</span>
                                    <span>8</span>
                                </li>
                                <li>
                                    <span>life style</span>
                                    <span>13</span>
                                </li>
                                <li>
                                    <span>travel</span>
                                    <span>34</span>
                                </li>
                            </ul>
                        </div> -->
                        
                        
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
