<?php 

function pruefsiegel()
{
    $labels = array(
        'name' => _x('Prüfsiegel', 'Post Type General Name', 'pruefsiegel'),
        'singular_name' => _x('Prüfsiegel', 'Post Type Singular Name', 'pruefsiegel'),
        'menu_name' => __('Prüfsiegel', 'pruefsiegel'),
        'name_admin_bar' => __('Prüfsiegel', 'pruefsiegel'),
        'archives' => __('Archiv', 'pruefsiegel'),
        'attributes' => __('Eigenschaften', 'pruefsiegel'),
        'parent_item_colon' => __('Eltern', 'pruefsiegel'),
        'all_items' => __('Alle Prüfsiegel', 'pruefsiegel'),
        'add_new_item' => __('Neues Prüfsiegel', 'pruefsiegel'),
        'add_new' => __('Neues Prüfsiegel hinzufügen', 'pruefsiegel'),
        'new_item' => __('Neues Prüfsiegel', 'pruefsiegel'),
        'edit_item' => __('Prüfsiegel bearbeiten', 'pruefsiegel'),
        'update_item' => __('Prüfsiegel aktualisieren', 'pruefsiegel'),
        'view_item' => __('Prüfsiegel anssehen', 'pruefsiegel'),
        'view_items' => __('Prüfsiegel anssehen', 'pruefsiegel'),
        'search_items' => __('Prüfsiegel durchssuchen', 'pruefsiegel'),
        'not_found' => __('Nicht gefunden', 'pruefsiegel'),
        'not_found_in_trash' => __('Nicht gefunden', 'pruefsiegel'),
        'featured_image' => __('Hauptbild', 'pruefsiegel'),
        'set_featured_image' => __('Hauptbild setzen', 'pruefsiegel'),
        'remove_featured_image' => __('Hauptbild löschen', 'pruefsiegel'),
        'use_featured_image' => __('Hauptbild setzen', 'pruefsiegel'),
        'insert_into_item' => __('Einfügen', 'pruefsiegel'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'pruefsiegel'),
        'items_list' => __('Items list', 'pruefsiegel'),
        'items_list_navigation' => __('Items list navigation', 'pruefsiegel'),
        'filter_items_list' => __('Filter items list', 'pruefsiegel'),
    );
    $args = array(
        'label' => __('Prüfsiegel', 'pruefsiegel'),
        'description' => __('Post Type Description', 'pruefsiegel'),
        'labels' => $labels,
        'supports' => array('title'),
        'taxonomies' => array('art'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'rewrite' => array('slug' => 'goldberg-geprueft'),

    );
    register_post_type('pruefsiegel', $args);
}
add_action('init', 'pruefsiegel', 0);

function redirectsiegel()
{
}

add_action('init', 'redirectsiegel');

add_action('template_redirect', 'my_callback');
function my_callback()
{
    if (isset($_GET['id'])) {
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type' => 'pruefsiegel',
        ));
        if ($posts):
            foreach ($posts as $post):
                setup_postdata($post);
        $siegel = get_field('alte_id', $post->ID);
        if ($_GET['id'] == $siegel) {
            $siegellink = $post->ID;
        }

        endforeach;
        wp_reset_postdata();

        endif;
        wp_redirect(get_permalink($siegellink));
        exit;
    }
}
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
    add_submenu_page('edit.php?post_type=pruefsiegel', 'eCommerce Prüfsiegel', 'eCommerce Prüfsiegel', 'manage_options', 'ecommerce_pruefsiegel.php', 'ecommerce_pruefsiegel');
    add_submenu_page('edit.php?post_type=pruefsiegel', 'Siegel für Vereine', 'Siegel für Vereine', 'manage_options', 'vereine_pruefsiegel.php', 'vereine_pruefsiegel');
    add_submenu_page('edit.php?post_type=pruefsiegel', 'Technisches Prüfsiegel', 'Technisches Prüfsiegel', 'manage_options', 'technik_pruefsiegel.php', 'technik_pruefsiegel');
    add_submenu_page('edit.php?post_type=pruefsiegel', 'Datenschutz Prüfsiegel', 'Datenschutz Prüfsiegel', 'manage_options', 'datenschutz_pruefsiegel.php', 'datenschutz_pruefsiegel');
}

function my_acf_prepare_field($field)
{
    if (isset($_GET['typ'])) {
        $field['value'] = $_GET['typ'];
    }
    return $field;
}
add_filter('acf/prepare_field/name=typ', 'my_acf_prepare_field');

function ecommerce_pruefsiegel()
{
    $posts = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'pruefsiegel',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'typ',
                'value' => array('ecommerce'),
                'compare' => 'IN',
            ),
        ),
    ));
    $complete_url = wp_nonce_url($bare_url, 'trash-post_' . $post->ID, 'my_nonce'); ?>

	<div class="wrap">

<style>
.vc_settings-custom-design-notice {
  display: none;
}

</style>
<table class="widefat fixed" cellspacing="0">
<h1 class="wp-heading-inline">eCommerce Prüfsiegel</h1>
<a href="https://www.goldberg.de/wp-admin/post-new.php?post_type=pruefsiegel&typ=ecommerce" class="page-title-action">Neues Prüfsiegel hinzufügen</a>
<hr class="wp-header-end">
    <tbody>
	<thead>
	<tr>
	            <th class="check-column" scope="row"></th>

 			<th id="name" class="manage-column column-columnname" scope="col">Bezeichnung</th>
            <th id="oldid" class="manage-column column-columnname " scope="col">ID</th>
	</tr>
</thead>
		<?php foreach ($posts as $post) {?>
		<?php $i++;?>
        <tr class="<?php if ($i & 1) {
        echo 'alternate';
    }?>" valign="top">
            <th class="check-column" scope="row"></th>
            <td class="column-columnname"><a class="row-title" href="https://www.goldberg.de/wp-admin/post.php?post=<?php echo $post->ID; ?>&amp;action=edit" aria-label="<?php echo $post->post_title; ?> (Bearbeiten)"><?php echo $post->post_title; ?></a>
                <div class="row-actions">
                    <span><a href="/wp-admin/post.php?post=<?php echo $post->ID; ?>&action=edit&lang=de">Bearbeiten</a> |</span>
                    <span class="trash"><a class="submitdelete" href="<?php echo wp_nonce_url("/wp-admin/post.php?post=" . $post->ID . "&action=trash", 'trash-post_' . $post->ID); ?>">Löschen</a></span>
                </div>
            </td>
            <td class="column-columnname"><?php echo get_field('alte_id', $post->ID); ?></td>

        </tr>
		<?php } ?>
    </tbody>
</table>
	</div>
<?php
}

function vereine_pruefsiegel()
{
    $posts = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'pruefsiegel',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'typ',
                'value' => array('vereine'),
                'compare' => 'IN',
            ),
        ),
    ));

    $complete_url = wp_nonce_url($bare_url, 'trash-post_' . $post->ID, 'my_nonce'); ?>

	<div class="wrap">

<style>
.vc_settings-custom-design-notice {
  display: none;
}

</style>
<table class="widefat fixed" cellspacing="0">
<h1 class="wp-heading-inline">Prüfsiegel für Vereine</h1>
<a href="https://www.goldberg.de/wp-admin/post-new.php?post_type=pruefsiegel&typ=vereine" class="page-title-action">Neues Prüfsiegel hinzufügen</a>
<hr class="wp-header-end">
    <tbody>
	<thead>
	<tr>
	            <th class="check-column" scope="row"></th>

 			<th id="name" class="manage-column column-columnname" scope="col">Bezeichnung</th>
            <th id="oldid" class="manage-column column-columnname " scope="col">ID</th>
	</tr>
</thead>
		<?php foreach ($posts as $post) {?>
		<?php $i++;?>
        <tr class="<?php if ($i & 1) {
        echo 'alternate';
    }?>" valign="top">
            <th class="check-column" scope="row"></th>
            <td class="column-columnname"><a class="row-title" href="https://www.goldberg.de/wp-admin/post.php?post=<?php echo $post->ID; ?>&amp;action=edit" aria-label="<?php echo $post->post_title; ?> (Bearbeiten)"><?php echo $post->post_title; ?></a>
                <div class="row-actions">
                    <span><a href="/wp-admin/post.php?post=<?php echo $post->ID; ?>&action=edit&lang=de">Bearbeiten</a> |</span>
                    <span class="trash"><a class="submitdelete" href="<?php echo wp_nonce_url("/wp-admin/post.php?post=" . $post->ID . "&action=trash", 'trash-post_' . $post->ID); ?>">Löschen</a></span>
                </div>
            </td>
            <td class="column-columnname"><?php echo get_field('alte_id', $post->ID); ?></td>
        </tr>
		<?php } ?>
    </tbody>
</table>
	</div>
<?php
}

function technik_pruefsiegel()
{
    $posts = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'pruefsiegel',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'typ',
                'value' => array('technisch'),
                'compare' => 'IN',
            ),
        ),
    ));
    $complete_url = wp_nonce_url($bare_url, 'trash-post_' . $post->ID, 'my_nonce'); ?>

	<div class="wrap">

<style>
.vc_settings-custom-design-notice {
  display: none;
}

</style>
<table class="widefat fixed" cellspacing="0">
<h1 class="wp-heading-inline">Technische Prüfsiegel</h1>
<a href="https://www.goldberg.de/wp-admin/post-new.php?post_type=pruefsiegel&typ=technisch" class="page-title-action">Neues Prüfsiegel hinzufügen</a>
<hr class="wp-header-end">
    <tbody>
	<thead>
	<tr>
	            <th class="check-column" scope="row"></th>

 			<th id="name" class="manage-column column-columnname" scope="col">Bezeichnung</th>
            <th id="oldid" class="manage-column column-columnname " scope="col">ID</th>
	</tr>
</thead>
		<?php foreach ($posts as $post) {?>
		<?php $i++;?>
        <tr class="<?php if ($i & 1) {
        echo 'alternate';
    }?>" valign="top">
            <th class="check-column" scope="row"></th>
            <td class="column-columnname"><a class="row-title" href="https://www.goldberg.de/wp-admin/post.php?post=<?php echo $post->ID; ?>&amp;action=edit" aria-label="<?php echo $post->post_title; ?> (Bearbeiten)"><?php echo $post->post_title; ?></a>
                <div class="row-actions">
                    <span><a href="/wp-admin/post.php?post=<?php echo $post->ID; ?>&action=edit&lang=de">Bearbeiten</a> |</span>
                    <span class="trash"><a class="submitdelete" href="<?php echo wp_nonce_url("/wp-admin/post.php?post=" . $post->ID . "&action=trash", 'trash-post_' . $post->ID); ?>">Löschen</a></span>
                </div>
            </td>
            <td class="column-columnname"><?php echo get_field('alte_id', $post->ID); ?></td>
        </tr>
		<?php } ?>
    </tbody>
</table>
	</div>
<?php
}

function datenschutz_pruefsiegel()
{
    $posts = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'pruefsiegel',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'typ',
                'value' => array('datenschutz'),
                'compare' => 'IN',
            ),
        ),
    ));
    $complete_url = wp_nonce_url($bare_url, 'trash-post_' . $post->ID, 'my_nonce'); ?>

	<div class="wrap">

<style>
.vc_settings-custom-design-notice {
  display: none;
}

</style>
<table class="widefat fixed" cellspacing="0">
<h1 class="wp-heading-inline">Datenschutz Prüfsiegel</h1>
<a href="https://www.goldberg.de/wp-admin/post-new.php?post_type=pruefsiegel&typ=datenschutz" class="page-title-action">Neues Prüfsiegel hinzufügen</a>
<hr class="wp-header-end">
    <tbody>
	<thead>
	<tr>
	            <th class="check-column" scope="row"></th>

 			<th id="name" class="manage-column column-columnname" scope="col">Bezeichnung</th>
            <th id="oldid" class="manage-column column-columnname " scope="col">ID</th>
	</tr>
</thead>
		<?php foreach ($posts as $post) {?>
		<?php $i++;?>
        <tr class="<?php if ($i & 1) {
        echo 'alternate';
    }?>" valign="top">
            <th class="check-column" scope="row"></th>
            <td class="column-columnname"><a class="row-title" href="https://www.goldberg.de/wp-admin/post.php?post=<?php echo $post->ID; ?>&amp;action=edit" aria-label="<?php echo $post->post_title; ?> (Bearbeiten)"><?php echo $post->post_title; ?></a>
                <div class="row-actions">
                    <span><a href="/wp-admin/post.php?post=<?php echo $post->ID; ?>&action=edit&lang=de">Bearbeiten</a> |</span>
                    <span class="trash"><a class="submitdelete" href="<?php echo wp_nonce_url("/wp-admin/post.php?post=" . $post->ID . "&action=trash", 'trash-post_' . $post->ID); ?>">Löschen</a></span>
                </div>
            </td>
            <td class="column-columnname"><?php echo get_field('alte_id', $post->ID); ?></td>
        </tr>
		<?php } ?>
    </tbody>
</table>
	</div>
<?php
}

function get_siegel_url($postid)
{
    $typ = get_field('typ', $postid);
    if ($typ == "technisch") {
        return "https://www.goldberg.de/wp-content/uploads/2018/02/Goldberg_tech_Siegel_KL.jpg";
    }
    if ($typ == "datenschutz") {
        return "https://www.goldberg.de/wp-content/uploads/2018/10/Siegel_Datenschutz_300dpi-263x300.png";
    }
    if ($typ == "ecommerce") {
        return "https://www.goldberg.de/wp-content/uploads/2018/02/goldberg_e-commerce_siegel-1.png";
    }
    if ($typ == "vereine") {
        return "https://www.goldberg.de/wp-content/uploads/2018/10/Siegel_Vereine_300dpi-263x300.png";
    }
    if (!$typ) {
        return get_field('siegel', $postid);
    }
}

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5ba899d2bfe90',
        'title' => 'Prüfsiegel',
        'fields' => array(
            array(
                'key' => 'field_5bfd2b3394512',
                'label' => 'Typ',
                'name' => 'typ',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'ecommerce' => 'eCommerce Siegel',
                    'datenschutz' => 'Datenschutz Siegel',
                    'vereine' => 'Siegel für Vereine',
                    'technisch' => 'Technisches Prüfsiegel',
                ),
                'default_value' => array(
                    0 => 'ecommerce',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5a846ca569c08',
                'label' => 'Alte ID',
                'name' => 'alte_id',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5a846cb1d8e0c',
                'label' => 'Siegeltext',
                'name' => 'siegeltext',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 1,
                'tabs' => 'all',
                'delay' => 0,
            ),
            array(
                'key' => 'field_5a859e29a3982',
                'label' => 'Siegel',
                'name' => 'siegel',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'return_format' => 'url',
                'min_width' => 0,
                'min_height' => 0,
                'min_size' => 0,
                'max_width' => 0,
                'max_height' => 0,
                'max_size' => 0,
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'pruefsiegel',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => false,
    ));
    
    endif;		