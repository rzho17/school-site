<?php
function school_site_enqueues()
{
    // load normalize files here
    wp_enqueue_style(
    'school-site-normalize',
    get_theme_file_uri( 'assets/css/normalize.css'),
    array(),
    '12.1.0'
);
    // load styles files
    wp_enqueue_style(
        'school-site-style',
        get_stylesheet_uri(),
        array('school-site-normalize'),
        //date function to get version number
        wp_get_theme()->get('Version'),
        //media say apply to print or screen
        'all'
    );
}
add_action('wp_enqueue_scripts', 'school_site_enqueues');
// add styles to the back-end-editor
function school_site_setup() {
    add_editor_style( get_stylesheet_uri() );
    add_theme_support('templates');
    add_theme_support('parts');
}
add_action( 'after_setup_theme', 'school_site_setup' );