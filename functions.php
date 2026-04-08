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

// Custom shortcode for promo banner
function fitness_promo_shortcode() {
    return '<div style="background-color: #f4f4f4; padding: 20px; text-align: center;">'
        . '<h2>Get Fit with Landon Fitness!</h2>'
        . '<p>Join our community and start your fitness journey today.</p>'
        . '<a href="#" style="display: inline-block; padding: 10px 20px; background-color: #0073aa; color: #fff; text-decoration: none;">Sign Up Now</a>'
        . '</div>';
}
add_shortcode('fitness_promo', 'fitness_promo_shortcode');
