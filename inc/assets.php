<?php
function theme_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css?v=0.7', array());
    wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css', array());
    wp_enqueue_style('fullpage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css', array());

}

add_action('wp_enqueue_scripts', 'theme_styles');

function register_scripts()
{
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/libs/jquery.min.js', array(), true);
    wp_enqueue_script('fullPage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js', array(), true);
    wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js?v=0.14', array(), true);
}

add_action('wp_footer', 'register_scripts');