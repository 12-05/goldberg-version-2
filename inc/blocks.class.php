<?php 

    class GoldbergBlocksClass {
        public function __construct() {
            add_action('acf/init', array($this, 'register_blocks'));
        }

        public function register_blocks() {
            acf_register_block_type(array(
                'name'              => 'Goldberg Text',
                'title'             => __('Goldberg Text'),
                'description'       => __('Textkomponente für Goldberg.'),
                'render_template'   => get_template_directory().'/inc/blocks/text.php',
                'category'          => 'goldberg',
                'icon'              => 'admin-comments',
                'align'           => 'full',
                'supports'        => array(
                'align'        => array('full'),
                'align'        => false,
                ),
            ));

            acf_register_block_type(array(
                'name'              => 'Goldberg Hero',
                'title'             => __('Goldberg Hero'),
                'description'       => __('Herokomponente für Goldberg.'),
                'render_template'   => get_template_directory().'/inc/blocks/hero.php',
                'category'          => 'goldberg',
                'icon'              => 'admin-comments',
                'align'           => 'full',
                'supports'        => array(
                'align'        => array('full'),
                'align'        => false,
                ),
            ));

            acf_register_block_type(array(
                'name'              => 'Goldberg Rechtsgebiete',
                'title'             => __('Goldberg Rechtsgebiete'),
                'description'       => __('Rechtsgebiete für Goldberg.'),
                'render_template'   => get_template_directory().'/inc/blocks/rechtsgebiete.php',
                'category'          => 'goldberg',
                'icon'              => 'admin-comments',
                'align'           => 'full',
                'supports'        => array(
                'align'        => array('full'),
                'align'        => false,
                ),
            ));
            acf_register_block_type(array(
                'name'              => 'Goldberg Bild',
                'title'             => __('Goldberg Bild'),
                'description'       => __('Bild für Goldberg.'),
                'render_template'   => get_template_directory().'/inc/blocks/bild.php',
                'category'          => 'goldberg',
                'icon'              => 'admin-comments',
                'align'           => 'full',
                'supports'        => array(
                'align'        => array('full'),
                'align'        => false,
                ),
            ));
            acf_register_block_type(array(
                'name'              => 'Goldberg Aktuelles',
                'title'             => __('Goldberg Aktuelles'),
                'description'       => __('Aktuelles für Goldberg.'),
                'render_template'   => get_template_directory().'/inc/blocks/aktuelles.php',
                'category'          => 'goldberg',
                'icon'              => 'admin-comments',
                'align'           => 'full',
                'supports'        => array(
                'align'        => array('full'),
                'align'        => false,
                ),
            ));
            acf_register_block_type(array(
                'name'              => 'Goldberg Anwaelte',
                'title'             => __('Goldberg Anwaelte'),
                'description'       => __('Anwälte für Goldberg.'),
                'render_template'   => get_template_directory().'/inc/blocks/anwaelte.php',
                'category'          => 'goldberg',
                'icon'              => 'admin-comments',
                'align'           => 'full',
                'supports'        => array(
                'align'        => array('full'),
                'align'        => false,
                ),
            ));
            acf_register_block_type(array(
                'name'              => 'Goldberg Anwaelte Grid',
                'title'             => __('Goldberg Anwaelte Grid'),
                'description'       => __('Anwälte-Grid für Goldberg.'),
                'render_template'   => get_template_directory().'/inc/blocks/anwaelte-grid.php',
                'category'          => 'goldberg',
                'icon'              => 'admin-comments',
                'align'           => 'full',
                'supports'        => array(
                'align'        => array('full'),
                'align'        => false,
                ),
            ));
        }
    }

    new GoldbergBlocksClass();
