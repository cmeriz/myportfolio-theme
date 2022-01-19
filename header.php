<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="Soy Desarrollador Web. Me especializo en Sitios Informativos y Tiendas eCommerce. ¡Echa un vistazo a mis proyectos!">
    <title>Carlos Merizalde | Portafolio</title>
    <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri() ?>/favicon.png" type="image/x-icon">  
    <?php wp_head(); ?>
</head>

<body class="container mx-auto bg-gray-50">

    <div class="modal-background fixed inset-0 hidden"></div>

    <div class="card relative font-body bg-white">
    
        <header id="header" class="header  flex <?= is_front_page() ? 'home justify-center' : 'justify-between' ?> md:justify-between items-center w-full bg-primary-500 text-white">

            <a class="header__logo <?= is_front_page() ? 'hidden' : 'flex' ?> md:flex items-center text-white" href="<?= get_site_url() ?>">
                <?php 

                    if ( function_exists( 'the_custom_logo' ) ) {
                        $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' );
                    
                        if ( has_custom_logo() ) {
                            echo '<img class="h-12 w-12 rounded-full" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        }
                    }
                
                ?>
                <span class="text-xl font-bold ml-2 <?= is_front_page() ? 'hidden' : '' ?> ml:block">@cmeriz</span>
            </a>

            <?php if(is_front_page()): ?>
            <div class="header__navbar main-navbar w-full md:w-auto">
                <?php is_dynamic_sidebar('wt_navbar') ? dynamic_sidebar('wt_navbar') : '' ?>
            </div>
            <?php endif; ?>

            <div class="header__social <?= is_front_page() ? 'hidden' : '' ?> md:block">
                <?php is_dynamic_sidebar('wt_social_links') ? dynamic_sidebar('wt_social_links') : '' ?>
            </div>
            

        </header>

        <div class="content overflow-x-hidden">