<?php

/*
Widget Name: SO Contact Info Widget
Description: A widget to create Contact Information
Author: Carlos Merizalde
Author URI: https://cmeriz.com/
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class SO_ContactInfo_Widget extends SiteOrigin_Widget {

    function __construct() {
        // Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        // Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'so-contact-info-widget',

            // The name of the widget for display purposes.
            __( 'SO Contact Info Widget', 'wptailwind-theme' ),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __( 'A widget to create Contact Information', 'wptailwind-theme' ),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            // The $control_options array, which is passed through to WP_Widget
            array(
            ),

            // The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'contact_info' => array(
                    'type' => 'repeater',
                    'label' => __( 'Contact Information' , 'widget-form-fields-text-domain' ),
                    'item_name'  => __( 'contact_data', 'siteorigin-widgets' ),
                    'item_label' => array(
                        'selector'     => "[id*='label']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'label' => array(
                            'type' => 'text',
                            'label' => __( 'Data Label', 'widget-form-fields-text-domain' )
                        ),
                        'icon' => array(
                            'type' => 'media',
                            'label' => __( 'Data Icon (svg)', 'widget-form-fields-text-domain' ),
                            'choose' => __( 'Icon', 'widget-form-fields-text-domain' ),
                            'update' => __( 'Update', 'widget-form-fields-text-domain' ),
                            'library' => 'image',
                            'fallback' => true
                        ),
                        'data' => array(
                            'type' => 'text',
                            'label' => __( 'Data Content', 'widget-form-fields-text-domain' )
                        ),    
                        'classes' => array(
                            'type' => 'text',
                            'label' => __( 'Data CSS Classes (optional).', 'widget-form-fields-text-domain' )
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
            'contact_info' => $instance['contact_info'],
        );
    }

    function get_template_name( $instance ) {
        return 'contact-info-template';
    }
    
    function get_template_dir( $instance ) {
        return 'template';
    }
}
siteorigin_widget_register( 'so-contact-info-widget', __FILE__, 'SO_ContactInfo_Widget' );