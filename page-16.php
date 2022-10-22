

<?php get_header(); ?>



<section class="services">
    <div class="services__top">
        <h1 class="services__top-title">
            Ophthalmology Services
        </h1>
    </div>
<div class="container">

    <?php 
        global $post;


        $myposts = get_posts([
            'numberposts' => -1
            
        ]);
        if($myposts) {
            foreach ($myposts as $post) {
                setup_postdata($post);
                ?>
<div class="services__textbox">
        <h2 class="services__textbox-title">
            <?php the_title(); ?>
        </h2>
        <p class="services__textbox-text">
            <?php the_content(); ?>
    </p>
    </div>


                <?php
            }
        } 
        wp_reset_postdata();
    ?>
</div>
</section>



   <?php get_footer(); ?>