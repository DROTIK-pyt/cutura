<?php
/*
Template Name: About
Template Post Type: page
*/

get_header();
?>
<main class="main__about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="main__about-title">About us</h1>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="about__left">
                    <p class="about__left-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices consequat quis at aenean. Quis feugiat turpis quisque enim, malesuada bibendum dui mattis. Maecenas id tortor sed pellentesque. Et lobortis sagittis, condimentum lorem non. Odio dictum feugiat elementum sed. Nulla vulputate nunc et, sodales facilisi orci. Adipiscing pulvinar justo urna consequat maecenas tincidunt vitae tincidunt id. Ac nec vitae varius laoreet massa dignissim bibendum. In cras sit molestie id libero mi eu, pellentesque etiam.</p>
                    <p class="about__left-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices consequat quis at aenean. Quis feugiat turpis quisque enim, malesuada bibendum dui mattis.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="about__right">
                    <p class="about__right-title">We love what we do.</p>
                    <ul class="about__right-advantages">
                        <li>
                            <p class="about__right-advantages__number">50</p>
                            <p class="about__right-advantages__text">editors</p>
                        </li>
                        <li>
                            <p class="about__right-advantages__number">5+</p>
                            <p class="about__right-advantages__text">articles every day</p>
                        </li>
                    </ul>
                    <div class="about__right-img">
                        <img src="<?=get_template_directory_uri()?>/img/about_main.png" alt="">
                    </div>
                </div>
            </div>
    </div>
</main>

    <div class="tags__imgs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tag__img" style="background: url('<?=get_template_directory_uri()?>/img/tag_about1.png'); width: 570px; height: 450px;">
                        <div class="tag__center">
                            <p class="about__tag-text">1000 IDEAS</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="tag__img" style="background: url('<?=get_template_directory_uri()?>/img/tag_about2.png'); width: 530px; height: 450px; margin-left: 25px;">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="tags">
                        <div class="tag__img tag__img330" style="background: url('<?=get_template_directory_uri()?>/img/tag_about3.png');">
                        </div>
                        <div class="tag__img tag__img330" style="background: url('<?=get_template_directory_uri()?>/img/tag_about4.png');">
                            <div class="tag__center">
                                <p class="about__tag-text">5 AUTHORS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tag__img" style="background: url('<?=get_template_directory_uri()?>/img/tag_about5.png'); width: 751px; height: 576px;">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="tag__img" style="background: url('<?=get_template_directory_uri()?>/img/tag_about6.png'); width: 100%; height: 240px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="articles">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="block">
                    <div class="block__img-background" style="background: url('<?=get_template_directory_uri()?>/img/article1.png'); width: 570px; height: 300px;">
                        <div class="block__center block__center-cb">
                            <span>Jody MacDonald</span>
                            <img src="<?=get_template_directory_uri()?>/img/star-white.png" alt="">
                            <span>October, 2021</span>
                        </div>
                    </div>
                    <h3>Journey Through the Sahara</h3>
                    <p class="block__descr">For 700km, day and night, we slithered through the vast uninhabited Sahara desert, sleeping on top of Mauritania’s infamous iron ore train.</p>
                    <div class="link">
                        <a href="">Keep Reading</a>
                    </div>
                </div>
                <div class="block">
                    <div class="block__img-background" style="background: url('<?=get_template_directory_uri()?>/img/article3.png'); width: 570px; height: 300px;">
                        <div class="block__center block__center-lt">
                            <span>Anuar Patjane</span>
                            <img src="<?=get_template_directory_uri()?>/img/star-white.png" alt="">
                            <span>August, 2021</span>
                        </div>
                    </div>
                    <h3>In Search of Whales</h3>
                    <p class="block__descr">Far out in the Pacific Ocean, my dream to dive with magnificent humpback whales finally comes true. Yet while we are out there, a darker..</p>
                    <div class="link">
                        <a href="">Keep Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 col-md-offset-1">
                <div class="block">
                    <div class="block__img-background" style="background: url('<?=get_template_directory_uri()?>/img/article2_2.png'); width: 530px; height: 700px;">
                        <div class="block__center block__center-lt">
                            <span>Daniel Noll and Audrey Scott</span>
                            <img src="<?=get_template_directory_uri()?>/img/star-white.png" alt="">
                            <span>August, 2021</span>
                        </div>
                    </div>
                    <h3>Lessons in Planning and Travel During Covid</h3>
                    <p class="block__descr">How did you research and travel during the pandemic? Did you take any additional travel safety measures or change your behaviors? What's it like to travel now? In this article we address focusing on the stuff in our control while minding the health and safety of others. The lessons apply not only to travel...</p>
                    <div class="link">
                        <a href="">Keep Reading</a>
                    </div>
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