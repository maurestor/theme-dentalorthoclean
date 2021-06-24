<?php
/**
 * Header file for the Denatl Ortho Clean WordPress default theme.
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
		<div id='' class="grid grid-colums-2 sm:grid-cols-3 sm:items-center rounded-md ">
            
            <div id='navbar-top' class='fixed justify-between text-center grid grid-cols-2 w-full top-0 z-50 m-0 p-0 duration-500 text-xs sm:text-sm lg:text-base verde'>
                <div class='flex mx-auto'>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 azul gap-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 72 72" class=''>
                        <path fill="#fff" d="M56.846 18.796a11.642 11.642 0 0 0-10.55-5.013c-4.808.546-6.06 2.765-10.357 3.188c-4.296-.423-5.55-2.642-10.357-3.188a11.642 11.642 0 0 0-10.55 5.013c-2.758 4.212-2.153 10.504 1.812 15.318a6.092 6.092 0 0 1 1.444 3.626c.237 6.121 1.402 23.342 6.988 24.508c4.31.9 2.03-19.697 10.663-19.43c8.632-.267 6.354 20.329 10.663 19.43c5.586-1.166 6.75-18.387 6.988-24.508a6.092 6.092 0 0 1 1.444-3.626c3.965-4.814 4.57-11.106 1.812-15.318z"/>
                        <path fill="#d0cfce" d="M56.846 18.796c-1.252-2.796-12.474-7.687-10.55-5.013c3.06 4.252 4.207 12.231 3.257 20.922c-.818 7.468-5.476 23.877-5.476 23.877c-.365 2.232.97 4.208 1.83 4.071c2.375-.377 7.936-7.613 7.683-24.913a5.675 5.675 0 0 1 1.443-3.626a14.41 14.41 0 0 0 1.813-15.318z"/>
                        <g>
                            <path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" d="M56.846 18.796a11.642 11.642 0 0 0-10.55-5.013c-4.808.546-6.06 2.765-10.357 3.188c-4.296-.423-5.55-2.642-10.357-3.188a11.642 11.642 0 0 0-10.55 5.013c-2.758 4.212-2.153 10.504 1.812 15.318a6.092 6.092 0 0 1 1.444 3.626c.237 6.121 1.402 23.342 6.988 24.508c4.31.9 2.03-19.697 10.663-19.43c8.632-.267 6.354 20.329 10.663 19.43c5.586-1.166 6.75-18.387 6.988-24.508a6.092 6.092 0 0 1 1.444-3.626c3.965-4.814 4.57-11.106 1.812-15.318z"/>
                        </g>
                        <rect x="0" y="0" width="72" height="72" fill="rgba(0, 0, 0, 0)" />
                    </svg>
                    <p>Jacarandas #62, El Molino Tezonco, CDMX</p>
                </div>
                
                <div class='flex mx-auto text-sm pt-0 mt-0'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 azul" viewBox="0 0 20 20" fill="currentColor" width='1em' height='1em'>
                        <path d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z" />
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <p id='first-phone-number' class=''>5618350826</p>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 259" class=''>
                        <path d="M67.663 221.823l4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346c61.385 0 111.609-50.224 111.609-111.609c0-29.297-11.859-57.897-32.785-78.824c-20.927-20.927-48.83-32.785-78.824-32.785c-61.385 0-111.61 50.224-110.912 112.307c0 20.926 6.278 41.156 16.741 58.594l2.79 4.186l-11.16 41.156l41.853-10.464z" fill="#00E676"/>
                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0C57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347c70.453 0 127.653-57.898 127.653-128.35c0-34.181-13.254-66.269-36.97-89.986zM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093l-40.458 10.463l10.463-39.76l-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181c30.692 50.224 16.043 115.097-34.18 145.79c-16.045 10.463-35.576 16.043-55.108 16.043zm61.385-77.428l-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698c-2.093 0-3.488.698-4.883 1.396c0 0-.697.697-10.463 11.858c-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254c-1.395-1.395-3.488-2.79-4.883-4.185c-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79c0-1.395 0-2.79.698-3.488c0 0 2.79-3.488 4.882-5.58c1.396-1.396 2.093-3.488 3.488-4.883c1.395-2.093 2.093-4.883 1.395-6.976c-.697-3.488-9.068-22.322-11.16-26.507c-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79c-1.395 1.396-2.093 2.79-3.488 4.186c-4.883 6.278-7.673 13.951-7.673 21.624c0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58c14.649 12.557 31.39 21.625 50.224 26.508c2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79c2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487c1.395-1.395 2.79-2.79 3.488-4.186c1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395z" fill="#FFF"/>
                        <rect x="0" y="0" width="256" height="259" fill="rgba(0, 0, 0, 0)" />
                    </svg>
                    <p class=''><a href='https://wa.me/525570072288?text=%20' class='underline' target='_blank' class=''>5570072288</a></p>
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
                    <img id='logo-img' class='flex mx-auto h-12 sm:h-14 md:h-10 md:w-auto z-50 lg:h-14 lg:mx-auto' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/transparent_horizontal_clinical_ortho_clean.png'); ?>" alt="Logo">
                </a>

                <div id='menu' class=" md:hidden col-span-3 md:col-span-9">
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
                        <a href="<?php echo site_url('index.php/contact'); ?>">Contacto</a>
                    </div>

                </div>

                <nav class='mt-0 hidden md:block md:mx-auto lg:mt-0 lg:p-0 bg-transparent lg:block col-span-9 '>
                    <div class='menu'>
                        <ul class='flex flex-col float-left text-sm md:flex-row md:space-x-6 md:w-auto font-semibold w-full lg:bg-transparent p-6 md:p-0'>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url(''); ?>">Portada</a></li>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url('tratamientos-dentales'); ?>">Tratamientos Dentales</a></li>
                                <ul class='transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top w-8 min-w-min'>
                                    <li class='hover:underline'><a href="<?php echo site_url('tratamientos-dentales/ninios'); ?>">Niños</a></li>
                                    <li class='hover:underline'><a href="<?php echo site_url('tratamientos-dentales/limpieza'); ?>">Limpieza</a></li>
                                    <li class='hover:underline'><a href="<?php echo site_url('tratamientos-dentales/endodoncia'); ?>">Endodoncia</a></li>
                                    <li class='hover:underline'><a href="<?php echo site_url('tratamientos-dentales/estracciones'); ?>">Extracciones</a></li>
                                    
                                </ul>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url('promotions'); ?>">Promociones</a></li>
                            <li class='hover:underline w-auto'><a href="<?php echo site_url('index.php/contact'); ?>">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
                <?php

                
                
                // wp_nav_menu( array(
                //     'theme_location'  => 'first-menu',
                //     'menu'            => '',
                //     'container'       => 'nav',
                //     'container_class' => '',
                //     'container_id'    => '',
                //     'menu_class'      => 'menu-wp',
                //     'menu_id'         => 'menu',
                //     'echo'            => true,
                //     'fallback_cb'     => 'wp_page_menu',
                //     'before'          => '',
                //     'after'           => '',
                //     'link_before'     => '',
                //     'link_after'      => '',
                //     'items_wrap'      => '<ul id="%1$s" class="%2$s flex flex-row">%3$s</ul>',
                //     'depth'           => 0,
                //     'walker'          => '',

                //     )
                //     );


                // wp_nav_menu( array(
                //     'theme_location'  => 'first-menu',
                //     'container'       => FALSE,
                //     'container_id'    => FALSE,
                //     'menu_class'      => '',
                //     'menu_id'         => FALSE,
                //     'depth'           => 1,
                //     'walker'          => new Description_Walker
                //     )
                //     );
                    ?>

            </div>
        </div>
    </div>
</header>