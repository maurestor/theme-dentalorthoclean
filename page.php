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
    </div>
    <!-- .entry-content -->
    
<?php //get_template_part(); ?>
<?php get_footer(); ?>