<?php

class GoldBergThemeClass
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'load_styles'));
        add_action('wp_enqueue_scripts', array($this, 'load_scripts'));
        add_filter('acf/settings/save_json', array($this, 'save_fields'));
        add_filter('acf/settings/load_json', array($this, 'load_fields'));
        add_action('init', array($this, 'add_nav_menus'));
        add_action('acf/init', array($this, 'register_options_page'));
        add_filter('show_admin_bar', '__return_false');
        add_action('after_setup_theme', array($this, 'add_editor_styles'));
        add_action('widgets_init', array($this, 'register_side_bar'));
        add_action('enqueue_block_editor_assets', array($this, 'load_editors_scripts'));
        add_action('acf/init', array($this, 'add_news_fields'));
        add_filter('excerpt_length', array($this, 'excerpt_length'), 999);
        add_action( 'tribe_events_single_meta_before', array($this, 'tribe_stuff'), 100 );


        add_theme_support('post-thumbnails');
        $this->load_inc();
        $this->tribe_stuff();
    }

    public function load_inc()
    {
        require_once get_stylesheet_directory() . '/inc/lawyer.model.php';
        require_once get_stylesheet_directory() . '/inc/office.model.php';
        require_once get_stylesheet_directory() . '/inc/events.model.php';
        require_once get_stylesheet_directory() . '/inc/field.model.php';
        require_once get_stylesheet_directory() . '/inc/misc.functions.php';
        require_once get_stylesheet_directory() . '/inc/blocks.class.php';
        require_once get_stylesheet_directory() . '/inc/siegel.php';
        require_once get_stylesheet_directory() . '/misc.php';
        require_once get_stylesheet_directory() . '/weglot.php';


    }

    public function load_styles()
    {
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/compiled/style.min.css', time());
        wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
        wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');

    }

    public function load_scripts()
    {
        wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/compiled/custom.js', array('jquery'));
        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'));
    }
    
    public function tribe_stuff() {
        if(class_exists('Tribe__Events__Pro__Main')) {
            remove_filter( 'tribe_get_venue', array( Tribe__Events__Pro__Main::instance()->single_event_meta, 'link_venue' ) );
        }
       
    }

    public function save_fields()
    {
        $path = get_stylesheet_directory() . '/inc/fields';
        return $path;
    }

    public function load_fields($paths)
    {
        $paths[] = get_stylesheet_directory() . '/inc/fields';
        return $paths;
    }

    public function add_nav_menus()
    {
        register_nav_menus(array(
            'main' => 'Hauptmenue',
            'footer' => 'Footermenue',
        ));
    }

    public function register_options_page()
    {
        acf_add_options_page(array(
            'page_title' => 'Goldberg Theme Einstellungen',
            'menu_title' => 'Goldberg',
            'menu_slug' => 'goldgberg-theme-settings',
            'capability' => 'manage_options',
            'redirect' => false,
        ));
    }

    public function add_editor_styles()
    {
        add_theme_support('editor-styles'); // if you don't add this line, your stylesheet won't be added

        add_editor_style(get_template_directory_uri() . '/assets/css/compiled/style.css'); // tries to include style-editor.css directly from your theme folder
    }

    public function load_editors_scripts()
    {
        wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/compiled/custom.js', array('jquery'));
        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'));
    }
    public function register_side_bar()
    {
        register_sidebar(array(
            'name' => __('Sidebar2', 'goldberg'),
            'id' => 'goldsidebar',
            'description' => __('Add widgets here to appear in your sidebar.', 'goldberg'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
    }

    public function excerpt_length()
    {
        return 20;
    }
    // add local field group for posts where you select the post object anwalt

    public function add_news_fields()
    {
        acf_add_local_field_group(array(
            'key' => 'group_news_int',
            'title' => 'Anwaltzuordnung',
            'fields' => array(
                array(
                    'key' => 'news_field_anwalt_123',
                    'name' => 'anwalt',
                    'label' => 'Anwalt',
                    'type' => 'post_object',
                    'post_type' => array(
                        0 => 'anwalt',
                    ),
                    'return_format' => 'id',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
        )
        );
    }

  

    public static function custom_weglot_language_switcher() {
    if ( function_exists( 'weglot_get_current_language' ) && function_exists( 'weglot_get_languages_available' ) ) {
        $current_lang = weglot_get_current_language();
        $languages = weglot_get_languages_available();
        return;
        echo '<div class="country-selector">';
        foreach ( $languages as $language ) {
            $code = $language->getCode();
            $name = $language->getLocalName(); // Use getEnglishName() for English names

            if ( $code === $current_lang ) {
                echo '<span class="current-language">' . esc_html( $name ) . '</span>';
            } else {
                echo '<a href="' . esc_url( weglot_get_url_for_language( $code ) ) . '" class="language-option">' . esc_html( $code ) . '</a>';
            }
        }
        echo '</div>';
    }
    }
}

new GoldBergThemeClass();
