<?php


function hook_up_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    // wp_enqueue_style('style', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap&subset=latin-ext');

    wp_enqueue_script('script', get_template_directory_uri() . '/js/app.js');
}
add_action('wp_enqueue_scripts', 'hook_up_scripts');

function register_my_menu()
{
    register_nav_menu('main-menu', __('Main Menu'));
    register_nav_menu('socials-menu', __('Socials Menu'));
}
add_action('init', 'register_my_menu');

add_theme_support('custom-background');

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}