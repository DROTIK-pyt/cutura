<?php
/*
Template Name: Community
Template Post Type: page
*/

get_header();
?>

<div class="community__title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Our Authors</h1>
                </div>
            </div>
        </div>
    </div>
    
    <?php

        $users = get_users( [
            'count_total'  => false,
            'fields'       => 'all',
            'role__in'     => 'author',
            'has_published_posts' => null,
        ] );
        $cnt = 1;
    ?>
    <div class="b__community-items">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="community__items-inner">
                        <?php 
                            foreach( $users as $user ) :
                            $avatar_id = carbon_get_user_meta( $user->data->ID, 'user_avatar' );
                            $image_url = wp_get_attachment_url( $avatar_id ); ?>
                        <?php if ($cnt % 2 == 1) : ?>
                                <div class="community__item">
                                    <div class="community__item-img"><img src="<?=$image_url; ?>" alt=""></div>
                                    <div class="block">
                                        <div class="block__title block__title-big">
                                            <h3><?=$user->data->user_nicename; ?></h3>
                                            <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                            <span><?=count_user_posts( $user->data->ID, 'post', true ); ?> posts</span>
                                        </div>
                                        <p class="block__descr"><?= get_user_meta($user->data->ID, 'description', true); ?></p>
                                        <div class="link">
                                            <a href="<?= get_author_posts_url( $user->data->ID ); ?>">Read</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                        <?php else: ?>
                        <div class="community__item">
                            <div class="block">
                                <div class="block__title block__title-big">
                                    <h3><?=$user->data->user_nicename; ?></h3>
                                    <img src="<?=get_template_directory_uri()?>/img/star.png" alt="">
                                    <span><?=count_user_posts( $user->data->ID, 'post', true ); ?> posts</span>
                                </div>
                                <p class="block__descr"><?=get_user_meta($user->data->ID, 'description', true); ?></p>
                                <div class="link">
                                    <a href="<?= get_author_posts_url( $user->data->ID ); ?>">Read</a>
                                </div>
                            </div>
                            <div class="community__item-img"><img src="<?=$image_url; ?>" alt=""></div>
                        </div>
                        <hr>
                        <?php endif; ?>
                        <?php $cnt++; ?>
                        <?php endforeach; ?>
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