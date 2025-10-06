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
function school_site_setup(){
    add_theme_support( 'post-thumbnails' );
    //load styles at back end
    add_editor_style(get_stylesheet_uri());
     add_image_size('300x200', 300, 200, true);
    add_image_size('800x400', 800, 400, true);
}
add_action( 'after_setup_theme', 'school_site_setup' );
function school_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'300x200' => __( '300x200', 'school-site' ),
		'800x400' => __( '800x400', 'school-site' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'school_add_custom_image_sizes' );