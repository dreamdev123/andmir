<?php

$title = get_sub_field('title');
$shortcode = get_sub_field('shortcode');

?>

<div class="contact-section">
  <div class="container">

    <div class="row">

      <div class="col-md-8 offset-md-2">

        <div class="title-part">
          <h2><?php echo $title; ?></h2>
        </div>

        <div class="form-wrp">
          <?php echo do_shortcode($shortcode); ?>
        </div>
        
      </div>
      
    </div>
    
  </div>
</div>
