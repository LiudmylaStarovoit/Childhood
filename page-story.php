<?php
/*
Template Name: Our story
*/
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title">Our story</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story-subtitle1'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-story1'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story-img1'); ?>" alt="childhood world">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story-img2'); ?>" alt="childhood world">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story-subtitle2'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-story2'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story-subtitle3'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-story3'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story-img3'); ?>" alt="childhood world">
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>