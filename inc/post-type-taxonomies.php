<?php
function school_site_register_custom_post_types() {
    // staff post type
    $labels = array(
        'name'                     => _x( 'Staff', 'post type general name', 'school-site' ),
        'singular_name'            => _x( 'Staff', 'post type singular name', 'school-site' ),
        'add_new'                  => _x( 'Add New', 'staff', 'school-site' ),
        'add_new_item'             => __( 'Add New Staff', 'school-site' ),
        'edit_item'                => __( 'Edit Staff', 'school-site' ),
        'new_item'                 => __( 'New Staff', 'school-site' ),
        'view_item'                => __( 'View Staff', 'school-site' ),
        'view_items'               => __( 'View Staffs', 'school-site' ),
        'search_items'             => __( 'Search Staffs', 'school-site' ),
        'not_found'                => __( 'No staff found.', 'school-site' ),
        'not_found_in_trash'       => __( 'No staff found in Trash.', 'school-site' ),
        'parent_item_colon'        => __( 'Parent Staffs:', 'school-site' ),
        'all_items'                => __( 'All Staffs', 'school-site' ),
        'archives'                 => __( 'Staff Archives', 'school-site' ),
        'attributes'               => __( 'Staff Attributes', 'school-site' ),
        'insert_into_item'         => __( 'Insert into staff', 'School-site' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this staff', 'school-site' ),
        'featured_image'           => __( 'Staff featured image', 'school-site' ),
        'set_featured_image'       => __( 'Set work featured image', 'school-site' ),
        'remove_featured_image'    => __( 'Remove work featured image', 'school-site' ),
        'use_featured_image'       => __( 'Use as featured image', 'school-site' ),
        'menu_name'                => _x( 'staff', 'admin menu', 'school-site' ),
        'filter_items_list'        => __( 'Filter staffs list', 'school-site' ),
        'items_list_navigation'    => __( 'Staffs list navigation', 'school-site' ),
        'items_list'               => __( 'Staffs list', 'school-site' ),
        'item_published'           => __( 'Staff published.', 'school-site' ),
        'item_published_privately' => __( 'Staff published privately.', 'school-site' ),
        'item_revereted_to_draft'  => __( 'Staff reverted to draft.', 'school-site' ),
        'item_trashed'             => __( 'Staff trashed.', 'school-site' ),
        'item_scheduled'           => __( 'Staff scheduled.', 'school-site' ),
        'item_updated'             => __( 'Staff updated.', 'school-site' ),
        'item_link'                => __( 'Staff link.', 'school-site' ),
        'item_link_description'    => __( 'A link to a staff.', 'school-site' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'staffs' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'fwd-staff', $args );

    $labels = array(
        'name'                     => _x( 'Students', 'post type general name', 'school-site-theme' ),
        'singular_name'            => _x( 'Student', 'post type singular name', 'school-site-theme' ),
        'add_new'                  => _x( 'Add New', 'student', 'school-site-theme' ),
        'add_new_item'             => __( 'Add New Student', 'school-site-theme' ),
        'edit_item'                => __( 'Edit Student', 'school-site-theme' ),
        'new_item'                 => __( 'New Student', 'school-site-theme' ),
        'view_item'                => __( 'View Student', 'school-site-theme' ),
        'view_items'               => __( 'View Students', 'school-site-theme' ),
        'search_items'             => __( 'Search Students', 'school-site-theme' ),
        'not_found'                => __( 'No students found.', 'school-site-theme' ),
        'not_found_in_trash'       => __( 'No students found in Trash.', 'school-site-theme' ),
        'parent_item_colon'        => __( 'Parent Students:', 'school-site-theme' ),
        'all_items'                => __( 'All Students', 'school-site-theme' ),
        'archives'                 => __( 'Student Archives', 'school-site-theme' ),
        'attributes'               => __( 'Student Attributes', 'school-site-theme' ),
        'insert_into_item'         => __( 'Insert into student', 'school-site-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this student', 'school-site-theme' ),
        'featured_image'           => __( 'Student featured image', 'school-site-theme' ),
        'set_featured_image'       => __( 'Set student featured image', 'school-site-theme' ),
        'remove_featured_image'    => __( 'Remove student featured image', 'school-site-theme' ),
        'use_featured_image'       => __( 'Use as featured image', 'school-site-theme' ),
        'menu_name'                => _x( 'Students', 'admin menu', 'school-site-theme' ),
        'filter_items_list'        => __( 'Filter students list', 'school-site-theme' ),
        'items_list_navigation'    => __( 'Students list navigation', 'school-site-theme' ),
        'items_list'               => __( 'Students list', 'school-site-theme' ),
        'item_published'           => __( 'Student published.', 'school-site-theme' ),
        'item_published_privately' => __( 'Student published privately.', 'school-site-theme' ),
        'item_revereted_to_draft'  => __( 'Student reverted to draft.', 'school-site-theme' ),
        'item_trashed'             => __( 'Student trashed.', 'school-site-theme' ),
        'item_scheduled'           => __( 'Student scheduled.', 'school-site-theme' ),
        'item_updated'             => __( 'Student updated.', 'school-site-theme' ),
        'item_link'                => __( 'Student link.', 'school-site-theme' ),
        'item_link_description'    => __( 'A link to a student.', 'school-site-theme' ),
    );

     $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'template'           => array(
            array(
                'core/paragraph',
                array(
                    'placeholder' => 'Add Bio...',
                    'lock' => array(
                        'move'   => true,
                        'remove' => true,
                    ),
                )
            ),
            array(
                'core/button',
                array(
                    'text' => 'See Portfolio',
                    'lock' => array(
                        'move'   => true,
                        'remove' => true,
                    ),
                )
            ),
        ),
    );
    register_post_type( 'fwd-student', $args );

}
add_action( 'init', 'school_site_register_custom_post_types' );

function school_site_register_taxonomies() {
        // Add staff Category taxonomy
        $labels = array(
            'name'                  => _x( 'Staff Categories', 'taxonomy general name', 'school_site' ),
            'singular_name'         => _x( 'Staff Category', 'taxonomy singular name', 'school_site' ),
            'search_items'          => __( 'Search Staff Categories', 'school_site' ),
            'all_items'             => __( 'All Staff Category', 'school_site' ),
            'parent_item'           => __( 'Parent Staff Category', 'school_site' ),
            'parent_item_colon'     => __( 'Parent Staff Category:', 'school_site' ),
            'edit_item'             => __( 'Edit Staff Category', 'school_site' ),
            'view_item'             => __( 'View Staff Category', 'school_site' ),
            'update_item'           => __( 'Update Staff Category', 'school_site' ),
            'add_new_item'          => __( 'Add New Staff Category', 'school_site' ),
            'new_item_name'         => __( 'New Staff Category Name', 'school_site' ),
            'template_name'         => __( 'Staff Category Archives', 'school_site' ),
            'menu_name'             => __( 'Staff Category', 'school_site' ),
            'not_found'             => __( 'No staff categories found.', 'school_site' ),
            'no_terms'              => __( 'No staff categories', 'school_site' ),
            'items_list_navigation' => __( 'Staff Categories list navigation', 'school_site' ),
            'items_list'            => __( 'Staff Categories list', 'school_site' ),
            'item_link'             => __( 'Staff Category Link', 'school_site' ),
            'item_link_description' => __( 'A link to a staff category.', 'school_site' ),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'show_in_nav_menu'  => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'staff-categories' ),
        );
        register_taxonomy( 'fwd-staff-category', array( 'fwd-staff' ), $args );

    	    // Add Student Category taxonomy
	    $labels = array(
	        'name'                  => _x( 'Student Categories', 'taxonomy general name', 'school-site-theme' ),
	        'singular_name'         => _x( 'Student Category', 'taxonomy singular name', 'school-site-theme' ),
	        'search_items'          => __( 'Search Student Categories', 'school-site-theme' ),
	        'all_items'             => __( 'All Student Category', 'school-site-theme' ),
	        'parent_item'           => __( 'Parent Student Category', 'school-site-theme' ),
	        'parent_item_colon'     => __( 'Parent Student Category:', 'school-site-theme' ),
	        'edit_item'             => __( 'Edit Student Category', 'school-site-theme' ),
	        'view_item'             => __( 'View Student Category', 'school-site-theme' ),
	        'update_item'           => __( 'Update Student Category', 'school-site-theme' ),
	        'add_new_item'          => __( 'Add New Student Category', 'school-site-theme' ),
	        'new_item_name'         => __( 'New Student Category Name', 'school-site-theme' ),
	        'template_name'         => __( 'Student Category Archives', 'school-site-theme' ),
	        'menu_name'             => __( 'Student Category', 'school-site-theme' ),
	        'not_found'             => __( 'No student categories found.', 'school-site-theme' ),
	        'no_terms'              => __( 'No student categories', 'school-site-theme' ),
	        'items_list_navigation' => __( 'Student Categories list navigation', 'school-site-theme' ),
	        'items_list'            => __( 'Student Categories list', 'school-site-theme' ),
	        'item_link'             => __( 'Student Category Link', 'school-site-theme' ),
	        'item_link_description' => __( 'A link to a student category.', 'school-site-theme' ),
	    );
	    $args = array(
	        'hierarchical'      => true,
	        'labels'            => $labels,
	        'show_ui'           => true,
	        'show_in_menu'      => true,
	        'show_in_nav_menu'  => true,
	        'show_in_rest'      => true,
	        'show_admin_column' => true,
	        'query_var'         => true,
	        'rewrite'           => array( 'slug' => 'student-categories' ),
	    );
	    register_taxonomy( 'fwd-student-category', array( 'fwd-student' ), $args );

}

add_action( 'init', 'school_site_register_taxonomies' );


?>