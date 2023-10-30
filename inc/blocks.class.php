<?php

class GoldbergBlocksClass
{
    public function __construct()
    {
        add_action('acf/init', array($this, 'register_blocks'));
    }

    public function register_blocks()
    {
        acf_register_block_type(array(
            'name' => 'Goldberg Text',
            'title' => __('Goldberg Text'),
            'description' => __('Textkomponente für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/text.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'Goldberg Hero',
            'title' => __('Goldberg Hero'),
            'description' => __('Herokomponente für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/hero.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'Goldberg Rechtsgebiete',
            'title' => __('Goldberg Rechtsgebiete'),
            'description' => __('Rechtsgebiete für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/rechtsgebiete.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));
        acf_register_block_type(array(
            'name' => 'Goldberg Bild',
            'title' => __('Goldberg Bild'),
            'description' => __('Bild für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/bild.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));
        acf_register_block_type(array(
            'name' => 'Goldberg Aktuelles',
            'title' => __('Goldberg Aktuelles'),
            'description' => __('Aktuelles für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/aktuelles.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));
        acf_register_block_type(array(
            'name' => 'Goldberg Anwaelte',
            'title' => __('Goldberg Anwaelte'),
            'description' => __('Anwälte für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/anwaelte.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));
        acf_register_block_type(array(
            'name' => 'Goldberg Anwaelte Grid',
            'title' => __('Goldberg Anwaelte Grid'),
            'description' => __('Anwälte-Grid für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/anwaelte-grid.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        // create block with name video
        acf_register_block_type(array(
            'name' => 'Goldberg Video',
            'title' => __('Goldberg Video'),
            'description' => __('Video für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/video.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'Goldberg Standorte',
            'title' => __('Goldberg Standorte'),
            'description' => __('Standorte für Goldberg.'),
            'render_template' => get_template_directory() . '/inc/blocks/standorte.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'Goldberg Button Group',
            'title' => __('Goldberg Button Group'),
            'description' => __('Goldberg Button Group.'),
            'render_template' => get_template_directory() . '/inc/blocks/buttongroup.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));
        acf_register_block_type(array(
            'name' => 'Goldberg Newsletter',
            'title' => __('Goldberg Newsletter'),
            'description' => __('Goldberg Newsletter'),
            'render_template' => get_template_directory() . '/inc/blocks/newsletter.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'Goldberg Icons',
            'title' => __('Goldberg Icons'),
            'description' => __('Goldberg Icons'),
            'render_template' => get_template_directory() . '/inc/blocks/icons.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'Goldberg Prozess',
            'title' => __('Goldberg Prozess'),
            'description' => __('Goldberg Prozess'),
            'render_template' => get_template_directory() . '/inc/blocks/process.php',
            'category' => 'goldberg',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

    }
}

new GoldbergBlocksClass();
