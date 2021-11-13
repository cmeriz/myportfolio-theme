<?php 

const WPTAILWIND_THEME_VERSION = '1.0.0';
const WP_ENVIRONMENT_TYPE = 'development';
//const WP_ENVIRONMENT_TYPE = 'production';


/* -------------------------------------------------------------------------- */
/*                              INITIAL REQUIRES                              */
/* -------------------------------------------------------------------------- */

require_once 'inc/helpers/queries.php';



/* -------------------------------------------------------------------------- */
/*                                 Theme Setup                                */
/* -------------------------------------------------------------------------- */

add_action('after_setup_theme', 'wptailwind_setup');
function wptailwind_setup(){

    // Enable featured images
    add_theme_support('post-thumbnails');

}

/* -------------------------------------------------------------------------- */
/*                               Enqueue Scripts                              */
/* -------------------------------------------------------------------------- */

add_action( 'wp_enqueue_scripts', 'wptailwind_scripts', 10);
function wptailwind_scripts() {

    $version = ( wp_get_environment_type() === 'development' ) ? time() : WPTAILWIND_THEME_VERSION;

    // style.css
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $version);

    // main.css
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $version );

    // slick.css
    wp_enqueue_style('slickCSS', get_stylesheet_directory_uri().'/assets/css/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slickTheme', get_stylesheet_directory_uri().'/assets/css/slick/slick-theme.css', array(), '1.8.1');


    // sticky-header.js
    wp_enqueue_script('sticky-headerJS', get_stylesheet_directory_uri() . '/assets/js/sticky-header.js', array(), $version, true);

    // animations.js
    wp_enqueue_script('animationsJS', get_stylesheet_directory_uri() . '/assets/js/animations.js', array('jquery'), $version, true);

    // navbar.js
    wp_enqueue_script('navbarJS', get_stylesheet_directory_uri() . '/assets/js/navbar.js', array('jquery'), $version, true);

    // slick.js
    wp_enqueue_script('slickJS', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.8.1', true);

    // technologies-carousel.js
    wp_enqueue_script('technologiesJS', get_stylesheet_directory_uri() . '/assets/js/technologies-carousel.js', array('jquery', 'slickJS'), $version, true);

    // single-project.js
    wp_enqueue_script('single-project', get_stylesheet_directory_uri() . '/assets/js/single-project.js', array('jquery'), $version, true);

    // AJAX Connection
    wp_localize_script('single-project', 'admin_url', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));

}

/* -------------------------------------------------------------------------- */
/*                               Register Menus                               */
/* -------------------------------------------------------------------------- */

function wptailwind_menus(){
    register_nav_menus(array(
        'main-menu' => __( 'Main Menu', 'wptailwind-theme' )
    ));
}
add_action('init', 'wptailwind_menus');


/* -------------------------------------------------------------------------- */
/*                                 Widget Zone                                */
/* -------------------------------------------------------------------------- */

function wptailwind_widgets(){

    register_sidebar( array(
        'name' => 'Navbar',
        'id' => 'wt_navbar',
        'before_widget' => '',
        'after_widget' => ''
    ));

    register_sidebar( array(
        'name' => 'Contact Info',
        'id' => 'wt_contact_info',
        'class' => 'wt_contact_info',
        'before_widget' => '',
        'after_widget' => ''
    ));

    register_sidebar( array(
        'name' => 'Social Links',
        'id' => 'wt_social_links',
        'before_widget' => '',
        'after_widget' => ''
    ));

    register_sidebar( array(
        'name' => 'Technologies',
        'id' => 'wt_technologies',
        'before_widget' => '',
        'after_widget' => ''
    ));

    register_sidebar( array(
        'name' => 'Footer',
        'id' => 'wt_footer',
        'before_widget' => '',
        'after_widget' => ''
    ));
}

add_action('widgets_init', 'wptailwind_widgets');


function wptailwind_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'wptailwind_custom_logo_setup' );

/* -------------------------------------------------------------------------- */
/*                             SiteOrigin Widgets                             */
/* -------------------------------------------------------------------------- */


add_filter( 'siteorigin_widgets_widget_folders', 'add_widgets_collection' );

function add_widgets_collection( $folders ) {

    $folders[] = get_template_directory() . '/so-custom-widgets/'; // important: Slash on end string is required.
    return $folders;
}