<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage OthoClean
 * @since Ortho Clean 0.1v
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Stop looking or check my code please 🤣🤣 i see you... (👀)  -->
        <!-- Made in MecaroXGames.com by mau_restor. -->
        <!-- better see my github.com/maurestor and follow me.            -->
        <!-- ........................................thanks friend. 😎    -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php bloginfo( 'name' ); wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        
        <?php wp_head(); ?>

    </head>

<body <?php body_class(); ?> >

    <?php // Cargar primero el body
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
    ?>

<div class="page-top container m-auto my-0" id="site-header page" role='banner'>
<header>
	<div class="container">
		<div id='' class="grid grid-colums-2 sm:grid-cols-3 sm:items-center rounded-md">
            <div id='navbar-top' class='fixed justify-between items-center text-center grid grid-cols-2 w-full top-0 z-50 m-0 p-0 duration-500 text-2xs sm:text-sm lg:text-base verde h-4'>
                <div class='flex mx-auto'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <p>Jacarandas #62 Col. El Molino Tezonco, CDMX</p>
                </div>
                
                <div class='flex mx-auto'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z" />
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <p>5618350826, 5570072288</p>
                </div>

                <div class='flex left invisible sm:invisible'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                    </svg>
                    <p>servicio@clinicalorthoclean.com</p>
                </div>
            </div>

            <div id='navbar' class="justify-between items-center grid grid-cols-12 fixed w-full top-0 z-40 m-0 pt-7 duration-500 bg-white bg-opacity-90">

                <a id='title logo' class='flex col-span-9 md:col-span-3' href="<?php echo site_url(); ?>">
                    <img id='logo-img' class='flex mx-auto h-12 sm:h-14 md:h-10 md:w-auto z-50 lg:h-14 lg:mx-auto' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/solid_horizontal_clinical_ortho_clean.png'); ?>" alt="Logo">
                </a>

                <div class="flex md:hidden flex-grow col-span-3 md:col-span-9">
                    <div class='container-menu h-auto' onclick='myFunction(this); openNav()'>
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>

                <div id="myNav" class="overlay">

                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <!-- Overlay content -->
                    <div class="overlay-content">
                        <a href="/">Portada</a>
                        <a href="">Sobre Nosotros</a>
                        <a href="#">Tratamientos dentales</a>
                        <a href="#">Promociones</a>
                        <a href="#">Contacto</a>
                    </div>

                </div>

                <nav class='mt-0 hidden md:block md:mx-auto lg:mt-0 lg:p-0 bg-transparent lg:block col-span-9 '>
                    <div class='menu'>
                        <ul class='flex flex-col float-left text-sm md:flex-row md:space-x-6 md:w-auto font-semibold w-full lg:bg-transparent p-6 md:p-0'>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url('#dir'); ?>">Portada</a></li>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url('#dir'); ?>">Nosotros</a></li>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url('#dir'); ?>">Tratamientos Dentales</a></li>
                                <ul class='transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top w-8 min-w-min'>
                                    <li class='hover:underline'><a href="<?php echo site_url('#dir'); ?>">Niños</a></li>
                                    <li class='hover:underline'><a href="<?php echo site_url('#dir'); ?>">Limpieza</a></li>
                                    <li class='hover:underline'><a href="<?php echo site_url('#dir'); ?>">Endodoncia</a></li>
                                    <li class='hover:underline'><a href="<?php echo site_url('#dir'); ?>">Extracciones</a></li>
                                    <li class='hover:underline'><a href="<?php echo site_url('#dir'); ?>"></a></li>
                                </ul>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url('#dir'); ?>">Promociones</a></li>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url('#dir'); ?>">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
                <?php

                
                
                // wp_nav_menu( array(
                //     'theme_location'  => 'first-menu',
                //     'menu'            => '',
                //     'container'       => 'nav',
                //     'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                //     'container_id'    => '',
                //     'menu_class'      => 'menu flex',
                //     'menu_id'         => '',
                //     'echo'            => true,
                //     'fallback_cb'     => 'wp_page_menu',
                //     'before'          => '',
                //     'after'           => '',
                //     'link_before'     => '',
                //     'link_after'      => '',
                //     'items_wrap'      => '<ul id="%1$s" class="%2$s flex">%3$s</ul>',
                //     'depth'           => 0,
                //     'walker'          => '',

                //     )
                //     );
                    ?>

            </div>
        </div>
    </div>
</header>