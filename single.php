<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cseven
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			$blog_display_options = get_field('blog_display_options', 'options');

			if ( $blog_display_options == 'Show feature image as hero image with blog title over top' ) :
				$featured_imge = get_the_post_thumbnail_url( get_the_ID() ); ?>

	      <style type="text/css">
	        .hero-section {
	          padding-top: 8rem;
	          padding-bottom: 6rem;
	          background-size: cover;
	          background-position: center center;
	          background-repeat: no-repeat;
	          position: relative;
	          width: 100%;
	          height: 30rem;
	        }
	        .hero-section .container {
	          height: 100%;
	        }
	        .hero-section .container .row {
	          height: 100%;
	        }
	        .hero-section .container .content {
	          height: 100%;
	          display: flex;
	          align-items: center;
	        }
	        .hero-section::before {
	          content: "";
	          position: absolute;
	          left: 0;
	          top: 0;
	          width: 100%;
	          height: 100%;
	          background-color: rgba(0, 0, 0, 0.25);
	          z-index: 1;
	        }
	        .hero-section .content {
	          position: relative;
	          z-index: 2;
	        }
	        .hero-section .content .title {
	          font-size: 54px;
	          font-weight: 800;
	          color: #fff;
	          margin-bottom: 15px;
	        }
	        @media(max-width: 768px) {
	          .hero-section .content .title {
	            font-size: 42px;
	          }
	        }
	        @media(max-width: 576px) {
	          .hero-section .content .title {
	            font-size: 36px;
	          }
	        }
	        .hero-section .content .description {
	          font-size: 18px;
	          color: #fff;
	        }
	      </style>

	      <div class="hero-section" style="background-image: url(<?php echo $featured_imge; ?>);">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-8 offset-md-2 content">
		            <div class="content-wrp">
		              <h1 class="title text-center"><?php echo get_the_title(); ?></h1>
		            </div>              
		          </div>
	        	</div>	          
	        </div>
	      </div>

	      <div class="container mt-5 mb-5">
	      	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="mt-5 mb-5">
						<div class="entry-content">
							<?php
							the_content();
							?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
	      </div>

	    	<?php
	  	else :
	  		$featured_imge = get_the_post_thumbnail_url( get_the_ID() ); ?>

	  		<style type="text/css">
	  			.hero-section {
	          padding-top: 8rem;
	          width: 100%;
	        }
	        .hero-section .container {
	          height: 100%;
	        }
	        .hero-section .container .row {
	          height: 100%;
	        }
	        .hero-section .container .content {
	          height: 100%;
	          display: flex;
	          align-items: center;
	        }
	        .hero-section .content .title {
	          font-size: 48px;
	          font-weight: 800;
	          color: #222;
	          margin-bottom: 15px;
	        }
	        @media(max-width: 768px) {
	          .hero-section .content .title {
	            font-size: 42px;
	          }
	        }
	        @media(max-width: 576px) {
	          .hero-section .content .title {
	            font-size: 36px;
	          }
	        }
	        article .featured-img {
	        	max-width: 500px;
	        	width: 100%;
	        	float: right;
	        	padding: 15px;
	        }
	  		</style>
	  		<div class="hero-section">
	  			<div class="container">
	  				<div class="row">
	  					<div class="col-md-8 offset-md-2 content">
		            <div class="content-wrp">
		              <h1 class="title text-center"><?php echo get_the_title(); ?></h1>
		            </div>              
		          </div>
	  				</div>
	  			</div>
	  		</div>

	  		<div class="container mb-5">
	      	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="mt-5 mb-5">
						<div class="entry-content">
							<?php if ( $featured_imge ) :?>
							<img class="featured-img" src="<?php echo $featured_imge; ?>">
							<?php endif;

							the_content();
							?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
	      </div>

	    <?php
	  	endif; ?>

		<?php 

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
