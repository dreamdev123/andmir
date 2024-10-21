<?php

$title = get_sub_field('title');
$background_image = get_sub_field('background_image');

?>

<div class="events-news-section" style="background-image: url(<?php echo $background_image; ?>);">

  <div class="container">

    <div class="title-part">

      <h2><?php echo $title; ?></h2>
      
    </div>

    <div class="posts-wrp">

      <?php

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
      );

      $query = new WP_Query($args);

      if ( $query->have_posts() ) : ?>

        <div class="row">

          <?php while( $query->have_posts() ) : $query->the_post(); ?>

            <div class="each col-md-4">
              
              <div class="each-wrp">

                <a href="<?php echo get_the_permalink(); ?>">
                  <div class="img-wrp">
                    <?php if ( has_post_thumbnail() ) :?>
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <?php endif; ?>
                  </div>
                </a>
                
                <div class="info-wrp">
                  <div class="post-info">
                    <p><?php echo get_the_date( 'F j, Y' ); ?></p>
                  </div>
                  <div class="post-title">
                    <a href="<?php echo get_the_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
                  </div>
                  <div class="post-excerpt">
                    <p><?php echo get_the_excerpt(); ?></p>
                  </div>

                  <div class="btn-wrp">
                    <a href="<?php echo get_the_permalink(); ?>">Read More</a>
                  </div>
                </div>
                
              </div>

            </div> 

          <?php endwhile; ?>

        </div>

      <?php endif; ?>
      
    </div>
    
  </div>
  
</div>
