<?php
/**
 * Template Name: Landing Template
 */

get_header();
?>

<style type="text/css">
  
</style>

<main id="site-content" role="main">

  <div class="home-page">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 

    <?php include get_template_directory() . '/templates/content-flexible-content.php' ; ?>
   
    <?php endwhile; // end of the loop. ?> 

  </div><!-- .home-page -->

</main><!-- #site-content --> 

<?php get_footer(); ?>