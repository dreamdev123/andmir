<?php

$background_image = get_sub_field('background_image');
$contact_info = get_sub_field('contact_info');

?>

<div class="map-section">
  <!-- <div class="container"> -->

    <div class="map-inner-wrp">

      <img class="map-image" src="<?php echo $background_image; ?>">

      <?php if ( !empty($contact_info) ) :?>

        <?php foreach( $contact_info as $key=>$each ) :?>

          <div class="point point-<?php echo $key; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Contact-BlueOctagon.svg">
          </div>

          <div class="each-info each-info-<?php echo $key; ?>">
            <div class="each-inner">
              <div class="detail">
                <h3><?php echo $each['sub_title']; ?></h3>
                <p><?php echo $each['info']; ?></p>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

      <?php endif; ?>
      
    </div>
    
  <!-- </div> -->
</div>
