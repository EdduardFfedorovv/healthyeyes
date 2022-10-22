<?php 

add_action('after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
    register_nav_menu('top', 'верхнее меню');
    register_nav_menu('bottom', 'нижнее меню');
}

add_action('wp_enqueue_scripts', function(){


    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Averia+Sans+Libre&family=Open+Sans:wght@400;500;700&family=Strait&display=swap');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');



    
    wp_deregister_script('jquery');
    
    wp_register_script('jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('jquery');


    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


?>