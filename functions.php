<?php


function hook_up_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	
	wp_enqueue_script('script', get_template_directory_uri() . '/js/app.js');
}
add_action('wp_enqueue_scripts', 'hook_up_scripts');

function register_my_menu()
{
    register_nav_menu('main-menu', __('Main Menu'));
    register_nav_menu('socials-menu', __('Socials Menu'));
}
add_action('init', 'register_my_menu');