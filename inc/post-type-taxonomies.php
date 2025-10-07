<?php
function school_site_register_custom_post_types() {
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
}
add_action( 'init', 'school_site_register_custom_post_types' );
// register custom taxnomies
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
}
add_action( 'init', 'school_site_register_taxonomies' );