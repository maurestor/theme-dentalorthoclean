<?php
get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
    endwhile; 
endif; 
?>
<h1> <?php bloginfo( 'name' ); ?> </h1>
<p>Pagina de aterrizaje</p>
<?php get_footer(); ?>