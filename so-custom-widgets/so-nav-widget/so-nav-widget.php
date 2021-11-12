<?php

/*
Widget Name: SO Nav Widget
Description: A widget create a custom nav
Author: Carlos Merizalde
Author URI: https://cmportafolio.000webhostapp.com/
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class SO_Nav_Widget extends SiteOrigin_Widget {

    function __construct() {
        // Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        // Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'so-nav-widget',

            // The name of the widget for display purposes.
            __( 'SO Nav Widget', 'wptailwind-theme' ),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __( 'A widget create a custom nav', 'wptailwind-theme' ),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            // The $control_options array, which is passed through to WP_Widget
            array(
            ),

            // The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'menu_items' => array(
                    'type' => 'repeater',
                    'label' => __( 'Custom Menu' , 'widget-form-fields-text-domain' ),
                    'item_name'  => __( 'menu_item', 'siteorigin-widgets' ),
                    'item_label' => array(
                        'selector'     => "[id*='label']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'label' => array(
                            'type' => 'text',
                            'label' => __( 'Write the label for your button.', 'widget-form-fields-text-domain' )
                        ),
                        'icon' => array(
                            'type' => 'media',
                            'label' => __( 'Button Icon (svg)', 'widget-form-fields-text-domain' ),
                            'choose' => __( 'Icon', 'widget-form-fields-text-domain' ),
                            'update' => __( 'Update', 'widget-form-fields-text-domain' ),
                            'library' => 'image',
                            'fallback' => true
                        ),
                        'id' => array(
                            'type' => 'text',
                            'label' => __( 'Write the id for your button.', 'widget-form-fields-text-domain' )
                        ),
                        'link_id' => array(
                            'type' => 'text',
                            'label' => __( 'Write the id for the section which page will be scrolled to.', 'widget-form-fields-text-domain' )
                        ),
                    )
                )
            ),

            // The $base_folder path string.
            plugin_dir_path( __FILE__ )
        );
    }

    public function get_template_variables($instance, $args)
    {
        return array(
            'menu_items' => $instance['menu_items'],
        );
    }

    function get_template_name( $instance ) {
        return 'nav-template';
    }
    
    function get_template_dir( $instance ) {
        return 'template';
    }
}
siteorigin_widget_register( 'so-nav-widget', __FILE__, 'SO_Nav_Widget' );