<?php

/*
Widget Name: SO Technologies Widget
Description: A widget show the technologies I use
Author: Carlos Merizalde
Author URI: https://cmportafolio.000webhostapp.com/
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class SO_Technologies_Widget extends SiteOrigin_Widget {

    function __construct() {
        // Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        // Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'so-technologies-widget',

            // The name of the widget for display purposes.
            __( 'SO Technologies Widget', 'wptailwind-theme' ),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __( 'A widget show the technologies I use', 'wptailwind-theme' ),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            // The $control_options array, which is passed through to WP_Widget
            array(
            ),

            // The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'technologies' => array(
                    'type' => 'repeater',
                    'label' => __( 'The technologies I know' , 'widget-form-fields-text-domain' ),
                    'item_name'  => __( 'Technology', 'siteorigin-widgets' ),
                    'item_label' => array(
                        'selector'     => "[id*='name']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'name' => array(
                            'type' => 'text',
                            'label' => __( 'The technology name.', 'widget-form-fields-text-domain' )
                        ),
                        'image' => array(
                            'type' => 'media',
                            'label' => __( 'The technology image', 'widget-form-fields-text-domain' ),
                            'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                            'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                            'library' => 'image',
                            'fallback' => true
                        )
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
            'technologies' => $instance['technologies'],
        );
    }

    function get_template_name( $instance ) {
        return 'technologies-template';
    }
    
    function get_template_dir( $instance ) {
        return 'template';
    }
}
siteorigin_widget_register( 'so-technologies-widget', __FILE__, 'SO_Technologies_Widget' );