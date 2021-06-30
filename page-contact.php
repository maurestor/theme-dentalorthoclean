<?php 
/**
* Template Name: Contacto
*
* @package dental
* @subpackage DentalOrthoClean
* @since DenatlOrthoClean v0.1
*/

get_header(); ?>

<main id="site-content" role="main" class=''>
    C
    <div class="entry-content col-span-1 mt-20">
        <?php // Post intead of Carrouse
        while ( have_posts() ) :
            the_post();

            do_action('dental_contact_form');

        endwhile; // End of the loop.
        ?>
    </div>
    <!-- .entry-content -->

    <!-- promo-visitanos -->
    <div id='promo-visitanos' class='text-sm md:text-2xl sans-serif text-center h-24 mt-auto mb-auto p-5 shadow-xl rounded-3xl'>
        <?php 
            do_action('dental_promo_visitanos'); 
        ?>  
    </div><!-- /promo-visitanos -->
    
<?php //get_template_part(); ?>
<?php get_footer(); ?>