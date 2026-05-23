<?php
/**
 * Temo Dev - Custom Theme Functions
 */

function temo_dev_scripts()
{
    $theme_uri = get_template_directory_uri();

    // 1. Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    // 2. მთავარი style.css
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // 3. შენი CSS ფაილები
    wp_enqueue_style('base-style', $theme_uri . '/css/base.css');
    wp_enqueue_style('layout-structure', $theme_uri . '/css/layout-structure.css');
    wp_enqueue_style('hero-section', $theme_uri . '/css/hero-section.css');
    wp_enqueue_style('marquee-common', $theme_uri . '/css/marquee-common.css');
    wp_enqueue_style('skills-sections', $theme_uri . '/css/skill-section.css', array(), time());
    wp_enqueue_style('about-contact', $theme_uri . '/css/about-contact.css');
    wp_enqueue_style('order-style', $theme_uri . '/css/order-forms.css', array(), time());
    wp_enqueue_style('gutenberg-fix', $theme_uri . '/css/services.css', array(), time());
    wp_enqueue_style('services-list-page-style', $theme_uri . '/css/services-1.css', array(), time());
    wp_enqueue_style('pricing-style', $theme_uri . '/css/price.css', array(), time());
    wp_enqueue_style('special-menu-style', $theme_uri . '/css/special-menu.css', array(), time());

    // 4. რესპონსიულობა
    wp_enqueue_style('media-queries', $theme_uri . '/css/media-queries.css', array(), time());
    
    // 5. Font Awesome იკონკები
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'temo_dev_scripts');

// ბაზისური მხარდაჭერა
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

function temo_dev_widgets_init()
{
    // 1. სერვისების არეალი
    register_sidebar(array(
        'name'          => 'Services Area',
        'id'            => 'services-widgets',
        'before_widget' => '<div class="service-card custom-service-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="service-card-title">',
        'after_title'   => '</h3>',
    ));

    // 2. საკონტაქტო ბარათის არეალი
    register_sidebar(array(
        'name'          => 'Contact Area',
        'id'            => 'contact-widgets',
        'before_widget' => '<div class="contact-widget-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="contact-title">',
        'after_title'   => '</h3>',
    ));

    // 3. ორდერის ფორმის არეალი
    register_sidebar(array(
        'name'          => 'Order Form Area',
        'id'            => 'order-form-widgets',
        'before_widget' => '<div class="order-form-container">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'temo_dev_widgets_init');