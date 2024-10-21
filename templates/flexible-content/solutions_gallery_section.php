<?php

$images = get_sub_field('images');

?>

<div class="solutions-gallery-section">

  <div class="container">

    <div class="inner-wrp">

      <?php if ( !empty( $images ) ) :?>

        <?php foreach($images as $each) :?>

          <div class="item">

            <style type="text/css">
              #html5-watermark {
                display: none !important;
              }
            </style>
            <a class="html5lightbox" data-fullscreenmode="true" rel="group" href="<?php echo $each; ?>">
              <img src="<?php echo $each; ?>" >
            </a>

          </div>

        <?php endforeach; ?>

      <?php endif; ?>
      
    </div>

  </div>
  
</div>
