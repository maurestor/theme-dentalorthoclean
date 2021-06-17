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
        <!-- Making for MecaroXGames.com and Mau_restor, am..             -->
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
	<div class="mx-auto container">
		<div id='' class="flex flex-row space-x-4 bg-white sm:items-center rounded-md">
				
            <div id='navbar' class="justify-between items-center grid grid-cols-12 gap-2 fixed w-auto top-0 z-50 m-0 p-0 duration-500 bg-white bg-opacity-90">
                
                <a id='title logo' class='flex-none h-auto sm:h-14 col-span-9 md:col-span-3' href="<?php echo site_url(); ?>">
                    <img id='logo-img' class='' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/solid_horizontal_clinical_ortho_clean.png'); ?>" alt="Logo">
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
                    <a href="javascript:void(0)" class="closebtn" onclick="myFunction(this); closeNav()">&times;</a>

                    <!-- Overlay content -->
                    <div class="overlay-content">
                        <a href="/">Portada</a>
                        <a href="">Sobre Nosotros</a>
                        <a href="#">Tratamientos dentales</a>
                        <a href="#">Promociones</a>
                        <a href="#">Contacto</a>
                    </div>

                </div>

                <nav class='mt-4 hidden md:block lg:mt-0 lg:p-0 bg-transparent lg:block col-span-9'>
                    <div class='menu'>
                        <ul class='flex flex-col float-left text-sm md:flex-row md:space-x-6 md:w-auto font-semibold w-full bg-gray-100 lg:bg-transparent p-6 md:p-0'>
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