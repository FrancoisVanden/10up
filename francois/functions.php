<?php
/**
 * The functions file
 *
 * @package francois
 *
 * @author Francois van den Heever <frannavdheever@gmail.com>
 */

add_action('wp_enqueue_scripts', 'francois_add_styles');

add_action('wp_enqueue_scripts', 'francois_add_scripts');

function francois_add_styles()
{
    wp_enqueue_style('francois', get_template_directory_uri() . '/francois.css', [], '0.1.0');
}

function francois_add_scripts()
{
    wp_enqueue_script('francois', get_template_directory_uri() . '/francois.js', [], '0.1.0');
}

function twentytwenty_menus()
{
    $locations = array(
        'primary'  => __('Primary', 'vanden'),
        'secondary' => __('Secondary', 'vanden'),
    );

    register_nav_menus($locations);
    add_theme_support('post-thumbnails');
}

add_action('init', 'twentytwenty_menus');
