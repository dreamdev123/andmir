<?php

$title = get_sub_field('title');
$background_image = get_sub_field('background_image');
$background_color = get_sub_field('background_color');
$mobile_background_image = get_sub_field('mobile_background_image');

if ( empty($background_color) ) {
  $background_color = '#ffffff';
}

?>

<style type="text/css">
  .secondary-hero-section {
    background-image: url('<?php echo $background_image; ?>');
  }

  @media (max-width: 768px) {
    .secondary-hero-section {
      background-image: url('<?php echo $mobile_background_image; ?>');
    }
  }
</style>

<div class="secondary-hero-section" style="background-color: <?php echo $background_color; ?>;">

  <div class="container">

    <div class="title-part">
      
      <h1><?php echo $title; ?></h1>

    </div>
    
  </div>
  
</div>
