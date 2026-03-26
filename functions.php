<?php
/**
 * Temo Dev - Custom Theme Functions
 */

function temo_dev_scripts() {
    $theme_uri = get_template_directory_uri();

    // 1. Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap' );

    // 2. მთავარი style.css (თუ ცარიელია, მაინც იყოს)
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    // 3. შენი ახალი CSS ფაილები (ზუსტად ისე, როგორც ls-ში ჩანს)
    // გაითვალისწინე: თუ ფაილები /css/ საქაღალდეში გაქვს, დატოვე '/css/', თუ პირდაპირ თემის ფოლდერში - წაშალე.
    
    wp_enqueue_style( 'base-style', $theme_uri . '/css/base.css' );
    wp_enqueue_style( 'layout-structure', $theme_uri . '/css/layout-structure.css' );
    wp_enqueue_style( 'hero-section', $theme_uri . '/css/hero-section.css' );
    wp_enqueue_style( 'marquee-common', $theme_uri . '/css/marquee-common.css' );
    wp_enqueue_style( 'skills-sections', $theme_uri . '/css/skill-section.css' );
    wp_enqueue_style( 'about-contact', $theme_uri . '/css/about-contact.css' );
    wp_enqueue_style( 'gutenberg-fix', $theme_uri . '/css/services.css' );

    // 4. რესპონსიულობა (Media Queries) - აუცილებლად ბოლოში!
    wp_enqueue_style( 'media-queries', $theme_uri . '/css/media-queries.css' );
}
add_action( 'wp_enqueue_scripts', 'temo_dev_scripts' );

// ბაზისური მხარდაჭერა
add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
});