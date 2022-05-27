<?php 

    class GoldbergLawyerModel {
        public function __construct() {
            add_action('init', array($this, 'register_post_type'));
            add_action('acf/init', array($this, 'register_fields'));
        }

        public function register_post_type() {
            $labels = array(
                'name' => _x( 'Anwälte', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Anwalt', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Anwälte', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Anwalt', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Anwalt Archive', 'textdomain' ),
                'attributes' => __( 'Anwalt Attribute', 'textdomain' ),
                'parent_item_colon' => __( 'Eltern Anwalt:', 'textdomain' ),
                'all_items' => __( 'Alle Anwälte', 'textdomain' ),
                'add_new_item' => __( 'Anwalt erstellen', 'textdomain' ),
                'add_new' => __( 'Erstellen', 'textdomain' ),
                'new_item' => __( 'Anwalt erstellen', 'textdomain' ),
                'edit_item' => __( 'Bearbeite Anwalt', 'textdomain' ),
                'update_item' => __( 'Aktualisiere Anwalt', 'textdomain' ),
                'view_item' => __( 'Anwalt anschauen', 'textdomain' ),
                'view_items' => __( 'Anwälte anschauen', 'textdomain' ),
                'search_items' => __( 'Suche Anwalt', 'textdomain' ),
                'not_found' => __( 'Keine Anwälte gefunden.', 'textdomain' ),
                'not_found_in_trash' => __( 'Keine Anwälte im Papierkorb gefunden.', 'textdomain' ),
                'featured_image' => __( 'Beitragsbild', 'textdomain' ),
                'set_featured_image' => __( 'Beitragsbild festlegen', 'textdomain' ),
                'remove_featured_image' => __( 'Beitragsbild entfernen', 'textdomain' ),
                'use_featured_image' => __( 'Als Beitragsbild verwenden', 'textdomain' ),
                'insert_into_item' => __( 'In Anwalt einfügen', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Zu diesem Anwalt hochgeladen', 'textdomain' ),
                'items_list' => __( 'Anwälte Liste', 'textdomain' ),
                'items_list_navigation' => __( 'Anwälte Liste Navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Anwälte Liste', 'textdomain' ),
                'item_published' => __( 'Anwalt veröffentlicht', 'textdomain' ),
                'item_published_privately' => __( 'Anwalt privat veröffentlicht', 'textdomain' ),
                'item_reverted_to_draft' => __( 'Anwalt als Entwurf gespeichert', 'textdomain' ),
                'item_scheduled' => __( 'Anwalt geplant', 'textdomain' ),
                'item_updated' => __( 'Anwalt aktualisiert', 'textdomain' ),
            );
            $args = array(
                'label' => __( 'Anwalt', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-businessman',
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
            register_post_type( 'anwalt', $args );
        }

        public function register_fields() {
            
        }
    }
    new GoldbergLawyerModel();