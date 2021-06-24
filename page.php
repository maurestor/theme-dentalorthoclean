<?php 
/**
* Template Name: Pagina general
*
* @package dental
* @subpackage DentalOrthoClean
* @since DenatlOrthoClean v0.1
*/

get_header(); ?>

<main id="site-content" role="main" class=''>
    P
    <div class="entry-content col-span-1 mt-20">
        <?php // Post intead of Carrouse
        while ( have_posts() ) :
            the_post();

            do_action('dental_page');


        endwhile; // End of the loop.
        ?>
    </div><!-- .entry-content -->
    
    <div id='menu-pages-second' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 p-5'>
    
        <?php do_action('dental_servicios'); ?>    

    </div>

    <?php do_action('dental_promo_especialidades'); ?>   

    <div id='info-especilidades' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 p-5 gap-2'>

        <?php do_action('dental_especialidades'); ?> 

    </div>

    <?php do_action('dental_promo_visitanos'); ?>  


    <div id ='tratamientos' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 p-5'>
        
        <?php do_action('dental_tratamientos'); ?>

    </div>

    <div id='carousel-pictures'>

    </div>

<?php //get_template_part(); ?>
<?php get_footer(); ?>