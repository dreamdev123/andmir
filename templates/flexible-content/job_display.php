<style type="text/css">
	
	.jobs-section {
		padding-bottom: 4rem;
		padding-top: 4rem;
	}

	.jobs-section .each {
		margin-bottom:  30px;
	}
	.jobs-section .each-wrp {
		height: 100%;
		background-color: #f0f0f0;
		border: 1px solid #e1e1e1;
		border-radius: 5px;
		padding: 15px 30px;
	}

	.jobs-section .each a {
		text-decoration: none;
		color: #222;
	}

	.jobs-section .each a:hover {
		text-decoration: none;
	}

</style>


<?php 
	
	$display_style = get_sub_field('display_style');
	$num_of_columns = get_sub_field('#_of_columns');
	$order = get_sub_field('order');

	if ( empty($num_of_columns) ) {
		$num_of_columns = 3;
	}

	$class_name = "col-md-" . ( 12 / $num_of_columns );

	if ( $order == 'Alphabetical' ) {
		$orderby = 'title';
	} else {
		$orderby = 'publish_date';
	}

	$args = array(
    'post_type'      => 'jobs',
    'posts_per_page' => -1,
    'orderby' => $orderby, 
    'order' => 'DESC'
  );


  $query = new WP_Query( $args ); 

?>

	<div class="jobs-section">

		<?php 

		if ($query->have_posts()):  ?> 
		
		<div class="container">

			<div class="row">

			<?php while($query->have_posts()): $query->the_post(); ?>
				
				<?php if ( $display_style == 'Grid' ) :?>
					<div class="<?php echo $class_name; ?> each">
				<?php else :?>
					<div class="col-md-12 each">
				<?php endif; ?>
					
					<a href="<?php echo get_the_permalink(); ?>">
						<div class="each-wrp">
							<div class="job-title">
								<h2><?php echo get_the_title(); ?></h2>
							</div>
							<div class="job-date">
								<p><?php echo get_field('date_posted'); ?></p>
							</div>
							<div class="organization">
								<p><?php echo get_field('organization'); ?></p>
							</div>
						</div>
					</a>
				</div>

			<?php endwhile; ?>

			</div>

		</div>
		
		<?php endif; ?>

	</div>

<?php wp_reset_query(); ?>
