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
    
    <!-- servicios -->
    <div id='menu-pages-second' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 p-5'>
        <?php 
            do_action('dental_servicios'); 
        ?>
    </div> <!-- /servicios -->

    <!-- promo-especialidades -->
    <div id='promo-contamos-especialidades' class='text-sm md:text-2xl sans-serif text-center h-24 mt-auto mb-auto p-5 shadow-xl rounded-3xl'>
        <?php 
            do_action('dental_promo_especialidades'); 
        ?>
    </div><!-- /promo-especialidades -->
    
    <!-- especialidades -->
    <div id='info-especilidades' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 p-5 gap-2'>

        <?php do_action('dental_especialidades'); ?> 

    </div><!-- /especialidades -->

    <!-- promo-visitanos -->
    <div id='promo-visitanos' class='text-sm md:text-2xl sans-serif text-center h-24 mt-auto mb-auto p-5 shadow-xl rounded-3xl'>
        <?php 
            do_action('dental_promo_visitanos'); 
        ?>  
    </div><!-- /promo-visitanos -->

    <!-- tratamientos -->
    <div id ='tratamientos' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 p-5'>
        <?php 
            do_action('dental_tratamientos'); 
        ?>
    </div>
    <!-- /tratamientos -->


    <div id='carousel-pictures'>
        <?php 
            do_action( '' ); 
        ?> 
    </div>

<?php //get_template_part(); ?>
<?php get_footer(); ?>