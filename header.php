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
    
        <header id="header" class="header flex justify-center md:justify-between items-center w-full bg-primary-500 text-white">

            <a class="header__logo hidden md:flex items-center" href="<?= get_site_url() ?>">
                <?php 
                
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
                
                ?>
                <span class="text-xl font-bold ml-2 hidden ml:block">@cmeriz</span>
            </a>

            <div class="header__navbar main-navbar w-full md:w-auto">
                <?php is_dynamic_sidebar('wt_navbar') ? dynamic_sidebar('wt_navbar') : '' ?>
            </div>

            <div class="header__social hidden md:block">
                <?php is_dynamic_sidebar('wt_social_links') ? dynamic_sidebar('wt_social_links') : '' ?>
            </div>
            

        </header>

        <div class="content overflow-x-hidden">