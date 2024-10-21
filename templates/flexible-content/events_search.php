<style type="text/css">
         
</style>

<?

        $style = get_sub_field('style');
        $number_of_cols = get_sub_field('#_of_columns');
        $starting_orientation = get_sub_field('starting_orientation');
        $show_category = get_sub_field('show_category');

        if ( empty( $style ) ) {
          $style = "Boxes with images in middle";
        }

        ?>

        <?php if ( $style == "Boxes with images in middle" ) : ?>
          <style type="text/css">
            .grid-area-sc-type1 {
              padding-top: 4rem;
              padding-bottom: 4rem;
            }
            .grid-area-sc-type1 .each {
              margin-bottom: 50px;
            }
            .grid-area-sc-type1 .content-wrp {

            }
            .grid-area-sc-type1 .content-wrp .img-wrp {
              display: block;
              width: 100%;
              height: 0;
              padding-bottom: 56.25%;
              position: relative;
              margin-bottom: 15px;
              background-color: #fafafa;
            }
            .grid-area-sc-type1 .content-wrp .img-wrp img {
              position: absolute;
              left: 0;
              top: 0;
              width: 100%;
              height: 100%;
              object-fit: cover;
              object-position: center center;
            }
            .grid-area-sc-type1 .content-wrp .title h3 {
              font-size: 24px;
              color: #222;
              font-weight: 600;
              margin-bottom: 15px;
            }
            .grid-area-sc-type1 .content-wrp .description {
              margin-bottom: 15px;
            }
            .grid-area-sc-type1 .content-wrp .description p {
              font-size: 18px;
              color: #222;
            }
            /*.grid-area-sc-type1 .content-wrp .button-link a {
              padding: 10px 20px;
              border: 2px solid #63b1e5;
              border-radius: 0;
              color: #54236c;
              text-transform: uppercase;
              font-weight: 700;
              font-size: 14px;
              letter-spacing: 2px;
            }
            .grid-area-sc-type1 .content-wrp .button-link a:hover {
              background-color: #63b1e5;
              text-decoration: none;
            }*/
            .grid-area-sc-type1 .content-wrp {

            }
          </style>
          <div class="grid-area-sc-type1">
            <div class="container">
              <div class="row">
                <?php if (!empty($show_category)) :?>
                <?php foreach ($show_category as $post) :
                  setup_postdata( $post );

                  if ( has_post_thumbnail( get_the_ID() ) ) {
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                  } else {
                    $feat_image = get_template_directory_uri() . '/images/placeholder.jpg';
                  } 

                  ?>

                  <?php if ( $number_of_cols == 2 ): ?>
                    <div class="col-md-6 each">
                  <?php elseif ( $number_of_cols == 3 ) : ?>
                    <div class="col-md-4 each">
                  <?php else :?>
                    <div class="col-md-3 each">
                  <?php endif; ?>
                      <div class="content-wrp">
                        <div class="img-wrp">
                          <img src="<?php echo $feat_image; ?>">
                        </div>
                        <div class="title">
                          <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="description">
                          <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <div class="button-link">
                          <a class="btn" href="<?php echo get_the_permalink(); ?>">Read more</a>
                        </div>
                      </div> 
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif;?>
              </div>
            </div>
          </div>
        <?php elseif ( $style == "Boxes with Background images with text overlay" ) : ?>
          <style type="text/css">
            .grid-area-sc-type2 {
              padding-top: 4rem;
              padding-bottom: 4rem;
            }
            .grid-area-sc-type2 .each {
              margin-bottom: 30px;
            }
            .grid-area-sc-type2 .each .content-wrp {
              margin-bottom: 30px;
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
              position: relative;
              height: 100%;
              padding: 50px 30px 20px
            }
            .grid-area-sc-type2 .each .content-wrp::before {
              content: "";
              position: absolute;
              left: 0;
              top: 0;
              width: 100%;
              height: 100%;
              background-color: rgba(0, 0, 0, 0.45);
              z-index: 1;
            }
            .grid-area-sc-type2 .each .content-wrp .content-inner {
              position: relative;
              z-index: 2;
            }
            .grid-area-sc-type2 .each a:hover {
              text-decoration: none;
            }
            .grid-area-sc-type2 .content-wrp .title h3 {
              font-size: 24px;
              color: #fff;
              font-weight: 600;
              margin-bottom: 15px;
            }
            .grid-area-sc-type2 .content-wrp .description {
              margin-bottom: 15px;
            }
            .grid-area-sc-type2 .content-wrp .description p {
              font-size: 18px;
              color: #fff;
            }
          </style>
          <div class="grid-area-sc-type2">
            <div class="container">
              <div class="row">
                <?php if (!empty($show_category)) :?>
                <?php foreach ($show_category as $post) :
                  setup_postdata( $post ); 

                  if ( has_post_thumbnail( get_the_ID() ) ) {
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                  } else {
                    $feat_image = get_template_directory_uri() . '/images/placeholder.jpg';
                  } 

                  ?>

                  <?php if ( $number_of_cols == 2 ): ?>
                    <div class="col-md-6 each">
                  <?php elseif ( $number_of_cols == 3 ) : ?>
                    <div class="col-md-4 each">
                  <?php else :?>
                    <div class="col-md-3 each">
                  <?php endif; ?>
                      <a href="<?php echo get_the_permalink(); ?>">
                        <div class="content-wrp" style="background-image: url(<?php echo $feat_image; ?>)">
                          <div class="content-inner">
                            <div class="title">
                              <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="description">
                              <p><?php echo get_the_excerpt(); ?></p>
                            </div>
                          </div>                         
                        </div>
                      </a>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php else: ?>
          <style type="text/css">
            .grid-area-sc-type3 .container-fluid {
              padding: 0;
            }
            .grid-area-sc-type3 .row {
              margin: 0;
            }
            .grid-area-sc-type3 .left-image,
            .grid-area-sc-type3 .right-image {
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
              position: relative;              
            }
            @media (max-width: 768px) {
              .grid-area-sc-type3 .left-image,
              .grid-area-sc-type3 .right-image {
                min-height: 300px;
              }
            }
            .grid-area-sc-type3 .title {
              font-size: 28px;
              font-weight: 600;
              color: #222;
              margin-bottom: 20px;
            }
            .grid-area-sc-type3 .description {
              font-size: 18px;
              color: #222;
              margin-bottom: 30px
            }
            .grid-area-sc-type3 .left-content {
              padding: 120px 60px 120px 10%;
              background-color: #f7f7f7;
            }
            .grid-area-sc-type3 .right-content {
              padding: 120px 10% 120px 60px;
              background-color: #f7f7f7;
            }
            @media (max-width: 768px) {
              .grid-area-sc-type3 .left-content {
                padding: 60px;
                background-color: #f7f7f7;
              }
              .grid-area-sc-type3 .right-content {
                padding: 60px;
                background-color: #f7f7f7;
              }
            }
            @media (max-width: 576px) {
              .grid-area-sc-type3 .left-content {
                padding: 60px 30px;
                background-color: #f7f7f7;
              }
              .grid-area-sc-type3 .right-content {
                padding: 60px 30px;
                background-color: #f7f7f7;
              }
            }
            .grid-area-sc-type3 .button-link {
              padding: 15px 30px;
              border: 2px solid #63b1e5;
              border-radius: 0;
              color: #54236c;
              text-transform: uppercase;
              font-weight: 700;
              font-size: 14px;
              letter-spacing: 2px;
            }
            .grid-area-sc-type3 .button-link:hover {
              background-color: #63b1e5;
              text-decoration: none;
            }
            .grid-area-sc-type3 .mobile-view {
              display: none;
            }
            @media (max-width: 768px) {
              .grid-area-sc-type3 .mobile-view {
                display: block;
              }
              .grid-area-sc-type3 .desktop-view {
                display: none;
              }
            }
          </style>
          <div class="grid-area-sc-type3">
            <div class="container-fluid">
              <?php $index = 0; ?>
              <?php if (!empty($show_category)) :?>
              <?php foreach ($show_category as $post) :
                setup_postdata( $post ); 

                if ( has_post_thumbnail( get_the_ID() ) ) {
                  $feat_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                } else {
                  $feat_image = get_template_directory_uri() . '/images/placeholder.jpg';
                } 

                ?>
                <div class="row">
                  <?php if ($starting_orientation == "Image Left"): ?>
                    <?php if ( $index % 2 == 0) :?>
                      <div class="col-md-6 left-image" style="background-image: url(<?php echo $feat_image; ?>);">
                        
                      </div>
                      <div class="col-md-6 right-content">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p class="description"><?php echo get_the_excerpt(); ?></p>
                        <a class="button-link" href="<?php echo get_the_permalink(); ?>">Read more</a>
                      </div>
                    <?php else :?>
                      <div class="col-md-6 left-image mobile-view" style="background-image: url(<?php echo $feat_image; ?>);">
                        
                      </div>
                      <div class="col-md-6 left-content">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p class="description"><?php echo get_the_excerpt(); ?></p>
                        <a class="button-link" href="<?php echo get_the_permalink(); ?>">Read more</a>
                      </div>
                      <div class="col-md-6 right-image desktop-view" style="background-image: url(<?php echo $feat_image; ?>);">
                        
                      </div>
                    <?php endif; ?>
                  <?php else :?>
                    <?php if ( $index % 2 == 1 ) :?>
                      <div class="col-md-6 left-image" style="background-image: url(<?php echo $feat_image; ?>);">
                        
                      </div>
                      <div class="col-md-6 right-content">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p class="description"><?php echo get_the_excerpt(); ?></p>
                        <a class="button-link" href="<?php echo get_the_permalink(); ?>">Read more</a>
                      </div>
                    <?php else :?>
                      <div class="col-md-6 right-image mobile-view" style="background-image: url(<?php echo $feat_image; ?>);">
                        
                      </div>
                      <div class="col-md-6 left-content">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p class="description"><?php echo get_the_excerpt(); ?></p>
                        <a class="button-link" href="<?php echo get_the_permalink(); ?>">Read more</a>
                      </div>
                      <div class="col-md-6 right-image desktop-view" style="background-image: url(<?php echo $feat_image; ?>);">
                        
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>  
                </div>
              <?php $index++; ?>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
          </div>
