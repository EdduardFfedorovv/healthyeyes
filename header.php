<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donald A Burress MD PC - Ophthalmologist in Gresham, OR | About Us</title>
   

    <?php wp_head(); ?>
</head>
<body>

    <header class="header">
        <div class="header__phone-box">
            <img class="header__phone-img" src="<?php bloginfo('template_url');?>/assets/img/footer-tel.svg" alt="tel">
            <a href="tel:<?php the_field('telephone-link'); ?>" class="header__phone"><?php the_field('phone'); ?></a>
        </div>
        
        <div class="container header__container">
        <?php the_custom_logo(); ?>
                
                <nav id="nav-wrap">
                <?php wp_nav_menu(array(
                    'theme_location' => 'top',
                    'container' => 'nav',
                    'menu_class' =>  'nav',
                    'menu_id' => 'nav'
                )); ?>
                    <div class="menu__btn"></div>
                </nav>
        </div>
    </header>