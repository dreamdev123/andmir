<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cseven
 */

get_header(); ?>
<style type="text/css">
  
</style>

<main id="site-content" role="main">

  <div class="home-page">



    <?php include get_template_directory() . '/templates/content-flexible-content.php' ; ?>


  </div><!-- .home-page -->

</main><!-- #site-content --> 

<?php 

get_footer(); ?>

