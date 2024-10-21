<?php

$slides = get_sub_field('slides');

?>

<div class="home-hero-slider">

  <?php if ( !empty($slides) ) :?>

    <div class="slider-wrp">

      <?php foreach( $slides as $each ) :?>

        <div class="each" style="background-image: url(<?php echo $each['background_image']; ?>);">
          <div class="container">

            <div class="row">
              <div class="col-lg-7 col-md-10">
                <div class="title-part">
                  <h2><?php echo $each['title']; ?></h2>
                </div>
              </div>
            </div>
            
          </div>
        </div>

      <?php endforeach; ?>

    </div>

    <div class="slider-wrp mobile-view">

      <?php foreach( $slides as $each ) :?>

        <div class="each" style="background-image: url(<?php echo $each['mobile_background_image']; ?>);">
          <div class="container">

            <div class="row">
              <div class="col-md-7">
                <div class="title-part">
                  <h2><?php echo $each['title']; ?></h2>
                </div>
              </div>
            </div>
            
          </div>
        </div>

      <?php endforeach; ?>

    </div>

  <?php endif; ?>

</div>
