<?php

/*
Widget Name: SO All Services Widget
Description: A widget to show all members.
Author: Carlos Merizalde
Author URI: https://cmportafolio.000webhostapp.com/
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class SO_AllServices_Widget extends SiteOrigin_Widget {

    function __construct() {
        // Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        // Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'so-all-services-widget',

            // The name of the widget for display purposes.
            __( 'SO Services Widget', 'your-text-domain' ),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __( 'A widget to show all services', 'your-text-domain' ),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            // The $control_options array, which is passed through to WP_Widget
            array(
            ),

            // The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'front-title' => array(
                    'type' => 'text',
                    'label' => __( 'Write the title of the widget to be shown in the frontend', 'your-text-domain' ),
                    'default' => 'Nuestro Equipo',
                ),
                'front-subtitle' => array(
                    'type' => 'text',
                    'label' => __( 'Write the subtitle of the widget to be shown in the frontend', 'your-text-domain' ),
                    'default' => 'Curabitur gravida maximus',
                ),
                'amount' => array(
                    'type' => 'number',
                    'label' => __( 'Write the amount of services you want to show', 'your-text-domain' ),
                    'default' => '10'
                )
            ),

            // The $base_folder path string.
            plugin_dir_path( __FILE__ )
        );
    }

    function get_template_name( $instance ) {
        return 'all-services-template';
    }
    
    function get_template_dir( $instance ) {
        return 'template';
    }
}
siteorigin_widget_register( 'so-all-services-widget', __FILE__, 'SO_AllServices_Widget' );