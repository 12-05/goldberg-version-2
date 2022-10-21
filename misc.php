<?php

// People post type
if ( ! function_exists( 'lawyer_register_people_post_type' ) ) {
	function lawyer_register_people_post_type() { 
		// New Post Type
		register_post_type( 'people',
			array(
				'labels' => array(
					'name' => __( 'People', 'lawyer' ),
					'singular_name' => __( 'People', 'lawyer' )
				),
				'menu_icon'   		 => 'dashicons-groups',
				'public' 	  		 => true,
				'supports'    		 => array( 'title', 'editor', 'thumbnail' ),
				'has_archive' 		 => true,
				'rewrite'     		 => array('slug' => 'anwaelte'),
                            'show_in_nav_menus' => true,

			)
		);

		// Post type taxonomy
		register_taxonomy(
			'practice',
			'people',
			array(
				'label' 	   => __( 'Practice areas' ),
				'rewrite' 	   => array( 
					'slug' => 'practice' 
				),
				'hierarchical' => false,
				'labels' 	   => array(
					'add_new_item' => 'Add New Practice area',
				)
			)
		);
		// Post type taxonomy
		register_taxonomy(
			'languages',
			'people',
			array(
				'label' 	   => __( 'Languages' ),
				'rewrite' 	   => array( 
					'slug' => 'languages' 
				),
				'hierarchical' => false,
			)
		);
		// Post type taxonomy
		register_taxonomy(
			'sectors',
			'people',
			array(
				'label' 	   => __( 'Sectors' ),
				'rewrite' 	   => array( 
					'slug' => 'sectors' 
				),
				'hierarchical' => false,
			)
		);
	}
}
add_action('init', 'lawyer_register_people_post_type', 8 );


function modify_admin_footer() {
    $posts = get_posts(array(
        'post_type' => 'page',
        'post_status' => 'trash'
    ));
    echo '<div>';
    if($posts) {
        foreach($posts as $post) {?>
    <div>
    <?php echo $post->post_title;?>
    <div>
        <?php echo get_post_meta('_yoast_wpseo_metadesc', $post->ID;?>
    </div>

    </div>
<?php 
        }
    }
    echo '</div>';
}
add_action( 'acf/render_field/name=news_bild', 'modify_admin_footer' );


