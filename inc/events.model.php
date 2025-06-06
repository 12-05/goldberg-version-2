<?php 

    class GoldbergEventModel {
        public function __construct() {
            add_action('acf/init', array($this, 'register_fields'));
        }

       

        public function register_fields() {
             acf_add_local_field_group(array(
                'key' => 'group_tribe_events_lawyers',
                'title' => 'Event Lawyers',
                'fields' => array(
                    array(
                        'key' => 'field_event_lawyers',
                        'label' => 'Lawyers',
                        'name' => 'lawyers',
                        'type' => 'relationship',
                        'instructions' => 'Select lawyers associated with this event',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'post_type' => array(
                            0 => 'anwalt',
                        ),
                        'taxonomy' => '',
                        'filters' => array(
                            0 => 'search',
                            1 => 'post_type',
                        ),
                        'elements' => array(
                            0 => 'featured_image',
                        ),
                        'min' => '',
                        'max' => '',
                        'return_format' => 'object',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'tribe_events',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => 'Relationship field to connect events with lawyers',
    ));
        }

        public static function render_lawyers() {
            $lawyers = get_field('lawyers');
            if($lawyers) {
                include get_template_directory() . '/inc/templates/event-lawyers.php';
            }
        }
    }
    new GoldbergEventModel();