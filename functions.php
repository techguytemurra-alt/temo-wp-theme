<?php
/**
 * Temo Dev - Custom Theme Functions
 */

function temo_dev_scripts() {
    $theme_uri = get_template_directory_uri();

    // 1. Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap' );

    // 2. მთავარი style.css
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    // 3. შენი CSS ფაილები
    wp_enqueue_style( 'base-style', $theme_uri . '/css/base.css' );
    wp_enqueue_style( 'layout-structure', $theme_uri . '/css/layout-structure.css' );
    wp_enqueue_style( 'hero-section', $theme_uri . '/css/hero-section.css' );
    wp_enqueue_style( 'marquee-common', $theme_uri . '/css/marquee-common.css' );
    wp_enqueue_style( 'skills-sections', $theme_uri . '/css/skill-section.css', array(), time() );
    wp_enqueue_style( 'about-contact', $theme_uri . '/css/about-contact.css' );
    
    // Services CSS - აქ ჩავამატეთ time() ქეშის მოსაკლავად
    wp_enqueue_style( 'gutenberg-fix', $theme_uri . '/css/services.css', array(), time() );

    // 4. რესპონსიულობა - აუცილებლად ბოლოში და ფუნქციის შიგნით!
    wp_enqueue_style( 'media-queries', $theme_uri . '/css/media-queries.css', array(), time() );
}
add_action( 'wp_enqueue_scripts', 'temo_dev_scripts' );

// ბაზისური მხარდაჭერა
add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
});

// ვიჯეტების ზონა
function temo_dev_widgets_init() {
    register_sidebar( array(
        'name'          => 'Services Area',
        'id'            => 'services-widgets',
        'before_widget' => '<div class="service-card">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'temo_dev_widgets_init' );