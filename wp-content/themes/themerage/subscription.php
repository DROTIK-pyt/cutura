<?php
/*
Template Name: Subscription
Template Post Type: page
*/

get_header();
?>
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