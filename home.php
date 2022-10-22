<?php  

/*
Template Name: Home
*/
?>

<?php get_header(); ?>
    <section class="welcome">
        <div class="container welcome__container">
            <div class="welcome__wrapper">
                <h1 class="welcome__wrapper-title">
                    <?php the_field('welcome-title'); ?>
                </h1>
                <p class="welcome__wrapper-subtitle">
                <?php the_field('welcome-subtitle'); ?>
                </p>
                <p class="welcome__wrapper-text">
                Helping patients with Dry Eyes; Cataract & Glaucoma Prevention
                    Call <span><?php the_field('welcome-number')?></span> or 
                    <a href= <?php the_field('welcome-link')?> class="welcome__wrapper-link"><?php the_field('welcome-link-text')?></a> 
                    to Book an Appointment
                    
                </p>
            </div>
        </div>
    </section>
     <section class="promise">
        <div class="container">
            <h2 class="promise__title">
            <?php the_field('promise-title')?>
            </h2>
            <div class="promise__inner">
                <div class="promise__inner-card">
                    <h3 class="promise__card-title">
                    <?php the_field('card1-title')?>
                    </h3>
                    <p class="promise__card-text">
                    <?php the_field('card1-text')?>
                    </p>
                    <a href=<?php the_field('card1-link')?> class="promise__card-link">
                    <?php the_field('card1-link-text')?>
                    </a>
                </div>

                <div class="promise__inner-card">
                    <h3 class="promise__card-title">
                    <?php the_field('card2-title')?>
                    </h3>
                    <p class="promise__card-text">
                    <?php the_field('card2-text')?>
                    </p>
                    <a href=<?php the_field('card2-link')?> class="promise__card-link">
                    <?php the_field('card2-link-text')?>
                    </a>
                </div>

                <div class="promise__inner-card">
                    <h3 class="promise__card-title">
                    <?php the_field('card3-title')?>
                    </h3>
                    <p class="promise__card-text">
                    <?php the_field('card3-text')?>
                </p>
                    <a href=<?php the_field('card3-link')?> class="promise__card-link">
                    <?php the_field('card3-link-text')?>
                    </a>
                </div>
            </div>
            <h2 class="promise__bottom">
            <?php the_field('promise-bottom-title')?>
            </h2>
        </div>
    </section>
    <div class="paralax">
        <h1 class="paralax__title">
        <?php the_field('exam-title')?>
        </h1>
        <a href=<?php the_field('exam-link')?> class="paralax__btn">
        <?php the_field('exam-link-text')?>
        </a>
    </div>

<?php get_footer(); ?>