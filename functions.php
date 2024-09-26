<?php

function custom_theme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri()); // ottaa css
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');

// lataa tiedoston
function custom_theme_load_textdomain() {
    load_theme_textdomain('custom-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'custom_theme_load_textdomain');
?>
