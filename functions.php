<?php
// 1. Theme Support & WooCommerce Integration
function landon_fitness_setup() {
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'main-menu' => 'Main Navigation',
    ));
}
add_action('after_setup_theme', 'landon_fitness_setup');

// Custom post type for meal reviews
function register_meal_reviews_cpt() {
    register_post_type('reviews', array(
        'labels' => array(
            'name' => 'Meal Reviews',
            'singular_name' => 'Meal Review',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'register_meal_reviews_cpt');
