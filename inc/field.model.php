<?php 

    class GoldbergFieldModel {
        public function __construct() {
            add_action('init', array($this, 'register_post_type'));
            add_action('acf/init', array($this, 'register_fields'));
        }

        public function register_post_type() {

            $labels = array(
                'name' => _x( 'Rechtsgebiete', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Rechtsgebiet', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Rechtsgebiete', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Rechtsgebiet', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Rechtsgebiet Archives', 'textdomain' ),
                'attributes' => __( 'Rechtsgebiet Attributes', 'textdomain' ),
                'parent_item_colon' => __( 'Parent Rechtsgebiet:', 'textdomain' ),
                'all_items' => __( 'All Rechtsgebiete', 'textdomain' ),
                'add_new_item' => __( 'Add New Rechtsgebiet', 'textdomain' ),
                'add_new' => __( 'Add New', 'textdomain' ),
                'new_item' => __( 'New Rechtsgebiet', 'textdomain' ),
                'edit_item' => __( 'Edit Rechtsgebiet', 'textdomain' ),
                'update_item' => __( 'Update Rechtsgebiet', 'textdomain' ),
                'view_item' => __( 'View Rechtsgebiet', 'textdomain' ),
                'view_items' => __( 'View Rechtsgebiete', 'textdomain' ),
                'search_items' => __( 'Search Rechtsgebiet', 'textdomain' ),
                'not_found' => __( 'Not found', 'textdomain' ),
                'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
                'featured_image' => __( 'Featured Image', 'textdomain' ),
                'set_featured_image' => __( 'Set featured image', 'textdomain' ),
                'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
                'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
                'insert_into_item' => __( 'Insert into Rechtsgebiet', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this Rechtsgebiet', 'textdomain' ),
                'items_list' => __( 'Rechtsgebiete list', 'textdomain' ),
                'items_list_navigation' => __( 'Rechtsgebiete list navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Rechtsgebiete list', 'textdomain' ),
            );
            $args = array(
                'label' => __( 'Rechtsgebiet', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-admin-post',
                'supports' => array('title', 'editor'),
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
            register_post_type( 'rechtsgebiet', $args );
        }

        public function register_fields() {
            
        }
    }
    new GoldbergFieldModel();