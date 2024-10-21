<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-sm-6 col-md-4'); ?>>
	<header class="entry-header text-center">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<div class="post-date">
					Posted on: <?php echo get_the_date(); ?>
				</div>
				<div class="posted-by">
					<?php
					cseven_posted_by();
					?>
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="post-img-wrp">
		<?php cseven_post_thumbnail(); ?>	
	</div>
	

	<div class="entry-content">
		<?php
		the_excerpt();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
