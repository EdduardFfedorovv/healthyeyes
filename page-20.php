<?php get_header(); ?>

<section class="resource">
    <div class="resource__top">
        <h1 class="resource__top-title">
            <?php the_field('resource-title'); ?>
        </h1>
    </div>
    <div class="container">
        <div class="resource__textbox">
            <h2 class="resource__textbox-title">
            <?php the_field('resource-blog1-title'); ?>
            </h2>
            <p class="resource__textbox-text">
            <?php the_field('resource-blog1-text'); ?>
            <a href="<?php the_field('resource-blog1-link'); ?>" class="resource__textbox-link"><?php the_field('resource-blog1-link-text'); ?></a>
            </p>
        </div>
        <div class="resource__textbox">
            <h2 class="resource__textbox-title">
            <?php the_field('resourse-blog2-title'); ?>
            </h2>
            <p class="resource__textbox-text">
            <?php the_field('resourse-blog2-text1'); ?>
        </p>
            <p class="resource__textbox-text">
            <?php the_field('resourse-blog2-text2'); ?>
            <a href="<?php the_field('resource-blog2-link2'); ?>" class="resource__textbox-link"> <?php the_field('resource-blog2-link2-text'); ?></a>
            </p>
        </div>
    </div>
</section>


    <?php get_footer(); ?>