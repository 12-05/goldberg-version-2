<?php 

    class GoldbergOfficeModel {
        public function __construct() {
            add_action('init', array($this, 'register_post_type'));
            add_action('acf/init', array($this, 'register_fields'));
        }

        public function register_post_type() {
            $labels = array(
                'name' => _x( 'Büros', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Büro', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Büros', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Büro', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Büro Archives', 'textdomain' ),
                'attributes' => __( 'Büro Attributes', 'textdomain' ),
                'parent_item_colon' => __( 'Parent Büro:', 'textdomain' ),
                'all_items' => __( 'All Büros', 'textdomain' ),
                'add_new_item' => __( 'Add New Büro', 'textdomain' ),
                'add_new' => __( 'Add New', 'textdomain' ),
                'new_item' => __( 'New Büro', 'textdomain' ),
                'edit_item' => __( 'Edit Büro', 'textdomain' ),
                'update_item' => __( 'Update Büro', 'textdomain' ),
                'view_item' => __( 'View Büro', 'textdomain' ),
                'view_items' => __( 'View Büros', 'textdomain' ),
                'search_items' => __( 'Search Büro', 'textdomain' ),
                'not_found' => __( 'Not found', 'textdomain' ),
                'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
                'featured_image' => __( 'Featured Image', 'textdomain' ),
                'set_featured_image' => __( 'Set featured image', 'textdomain' ),
                'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
                'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
                'insert_into_item' => __( 'Insert into Büro', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this Büro', 'textdomain' ),
                'items_list' => __( 'Büros list', 'textdomain' ),
                'items_list_navigation' => __( 'Büros list navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Büros list', 'textdomain' ),
            );
            $args = array(
                'label' => __( 'Büro', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-admin-multisite',
                'supports' => array('title'),
                'taxonomies' => array(),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'menu_position' => 5,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'can_export' => true,
                'has_archive' => true,
                'hierarchical' => false,
                'exclude_from_search' => false,
                'show_in_rest' => true,
                'publicly_queryable' => true,
                'capability_type' => 'post',
            );
            register_post_type( 'office', $args );
        }

        public function register_fields() {

        }
    }
    new GoldbergOfficeModel();