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

    // home page
    if(is_page( 67 )) {

        wp_enqueue_style( 
            'lightgallery-css', 
            get_theme_file_uri('assets/css/lightgallery.css'), 
            array(),
            wp_get_theme()->get( 'Version' )
        );
        
        wp_enqueue_script( 
            'lightgallery-js',
            get_theme_file_uri('assets/js/lightgallery.umd.js'),
            array(),
            wp_get_theme()-> get('Version'),
            array('strategy' => 'defer'),
        );

          wp_enqueue_script( 
            'activate-gallery',
            get_theme_file_uri('assets/js/activate-gallery.js'),
            array('lightgallery-js'),
            wp_get_theme()-> get('Version'),
            array('strategy' => 'defer')
        );

    }

}

add_action('wp_enqueue_scripts', 'school_site_enqueues');
// add styles to the back-end-editor


function school_site_setup(){
    add_theme_support( 'post-thumbnails' );
    //load styles at back end
    add_editor_style(get_stylesheet_uri());
    add_image_size('300x200', 300, 200, true);
    add_image_size('400x600', 400, 600, true);
    add_image_size('800x400', 800, 400, true);
    add_image_size('316x316', 316, 316, true);

}
add_action( 'after_setup_theme', 'school_site_setup' );
function school_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'300x200' => __( '300x200', 'school-site' ),
		'400x600' => __( '400x600', 'school-site' ),
		'800x400' => __( '800x400', 'school-site' ),
        '316x316' => __( '316x316', 'school-site' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'school_add_custom_image_sizes' );


require get_theme_file_path() . '/inc/post-type-taxonomies.php';
require get_theme_file_path() . '/school-site-blocks/school-site-blocks.php';
// changes student post add title
function school_site_student_title_placeholder( $title ) {
    $screen = get_current_screen();

    if ( 'fwd-student' === $screen->post_type ) {
        $title = 'Add Student';
    }

    return $title;
}
add_filter( 'enter_title_here', 'school_site_student_title_placeholder' );