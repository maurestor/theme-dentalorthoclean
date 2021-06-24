<?php
/**
* The template for displaying all single posts
*
*/

get_header(); 
?>
<main id="site-content" role="main" class=''>
    S
    <div class="entry-content col-span-1 mt-20">
        <?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                // Display post content
                the_title( '<h2>', '</h2>' ); 
                the_content();
            endwhile;
        else:
            _e( 'Sorry, no posts matched your criteria.', 'dental' );
        endif;

        ?>
    </div>
<?php
    
get_footer(); ?>
