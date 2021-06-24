<?php 
/**
* Template Name: Full Width LandingPage
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header(); ?>
<main id="site-content" role="main" class=''>
    LP
    <?php // Post intead of Carrouse
    while ( have_posts() ) :
        the_post();

        do_action('dental_page');


    endwhile; // End of the loop.
    ?>

<?php //get_template_part(); ?>
<?php get_footer(); ?>