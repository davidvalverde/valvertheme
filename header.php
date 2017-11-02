<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title><?php echo dv_title(); ?></title>
    <meta name="viewport" content="initial-scale=1">
    <?php wp_head(); ?>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Dancing+Script' type='text/css' media='screen' />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans' type='text/css' media='screen' />
    <link rel='stylesheet' href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='screen' />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>

<body>

    <div id='wrapper'>

        <header class='header header--blog'>

            <div class='header__holder'>

                <div class='wrap header__wrap'>

                    <section class='header__top'>

                        <section class='header__logo'>
                            <a href='<?php echo site_url(); ?>' title='<?php bloginfo('name'); ?>'>
                                <img class='header__logo__img' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-white.png' alt='<?php bloginfo('name'); ?>' title='<?php bloginfo('name'); ?>'>
                                <div class='header__logo__name'>
                                    <p class='header__logo__title'><?php bloginfo('name'); ?></p>
                                </div>
                            </a>
                        </section>

                        <a class="header__menu__toggle" href="#" id="nav-open"></a>
                        <nav class='header__menu' id='main-navigation'>
                            <ul>
                                <li class='header__menu__option'><a href='<?php echo site_url(); ?>/../' title='Inicio'>INICIO</a></li>
                                <li class='header__menu__option'><a href='<?php echo site_url(); ?>/../about/' title='David'>DAVID</a></li>
                                <li class='header__menu__option'><a href='<?php echo site_url(); ?>/../portfolio/' title='Proyectos'>PROYECTOS</a></li>
                                <li class='header__menu__option'><a href='<?php echo site_url(); ?>/../services/' title='Servicios'>SERVICIOS</a></li>
                                <li class='header__menu__option'><a href='<?php echo site_url(); ?>/../blog/' title='Blog'>BLOG</a></li>
                                <li class='header__menu__option'><a href='<?php echo site_url(); ?>/../contact/' title='Contacto'>CONTACTO</a></li>
                                <li class='header__menu__option'><a href='<?php echo site_url(); ?>/../newsletter/' title='Newsletter'>NEWSLETTER</a></li>
                            </ul>
                        </nav>

                    </section>

                    <section class='header__teaser'>
                        <section class='teaser teaser--blog'>
                            <?php //echo dv3_teaser(); ?>
                        </section>
                    </section>

                </div>

            </div>

        </header>

        <main class='content content--blog'>
            <div class='wrap'>
