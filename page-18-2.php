<?php get_header(); ?>

<section class="about">
    <div class="about__top">
        <h1 class="about__top-title">
            <?php the_field('about-title'); ?>
        </h1>
    </div>
    <div class="container">
        <div class="about__textbox">
            <h2 class="about__textbox-title">
            <?php the_field('about-blog1-title'); ?>
            </h2>
            <p class="about__textbox-subtitle">
            <?php the_field('about-blog1-subtitle'); ?>
        </p>
            <p class="about__textbox-text">
            <?php the_field('about-blog1-text'); ?>
        </p>
        </div>
        <div class="about__textbox">
            <h2 class="about__textbox-title">
            <?php the_field('about-blog2-title'); ?>
            </h2>
            <p class="about__textbox-text">
            <?php the_field('about-blog2-text'); ?>
        </p>
        </div>
        <div class="about__education">
            <h3 class="about__education-title">
            <?php the_field('about-education-title'); ?>
            </h3>

            <p class="about__education-name">
            <?php the_field('about-education-name'); ?>
            </p>
            <p class="about__education-role">
            <?php the_field('about-education-role'); ?>
            </p>
            <p class="about__education-name">
            <?php the_field('about-education-name2'); ?>
            </p>
            <p class="about__education-role">
            <?php the_field('about-education-role2'); ?>
            </p>
            <p class="about__education-name">
            <?php the_field('about-education-name3'); ?>
            </p>
            <p class="about__education-role">
            <?php the_field('about-education-role3'); ?>
            </p>
            <p class="about__education-name">
            <?php the_field('about-education-name4'); ?>
            </p>
            <p class="about__education-role">
            <?php the_field('about-education-role4'); ?>
            </p>
        </div>
        <div class="about__certificate">
            <h3 class="about__certificate-title">
            <?php the_field('certificate-title'); ?>
            </h3>
            <p class="about__certificate-name">
            <?php the_field('certificate-name1'); ?>
            </p>
            <p class="about__certificate-num">
            <?php the_field('certificate-num1'); ?>
            </p>
            <p class="about__certificate-name">
            <?php the_field('certificate-name2'); ?>
            </p>
            <p class="about__certificate-num">
            <?php the_field('certificate-num2'); ?>
            </p>
        </div>
        <div class="about__awards">
            <h3 class="about__awards-title">
            <?php the_field('awards-title'); ?>
            </h3>
            <p class="about__awards-name">
            <?php the_field('awards-name'); ?>
            </p>
            <p class="about__awards-num">
            <?php the_field('awards-num'); ?>
            </p>
        </div>
    </div>
</section>
<div class="paralax">
    <h1 class="paralax__title">
    <?php the_field('exam-title')?>
    </h1>
    <a href=<?php the_field('exam-link')?>  class="paralax__btn">
    <?php the_field('exam-link-text')?>
    </a>
</div>

<?php get_footer(); ?>