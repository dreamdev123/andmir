<?php 

$title = get_sub_field('title');
$detail = get_sub_field('detail');
$button = get_sub_field('button');
$image = get_sub_field('image');

$second_image = get_sub_field('second_image');

?>

<div class="about-section">

  <div class="container">

    <div class="row">

      <div class="col-md-5 mobile-view">
        
        <div class="img-wrp">
          <img src="<?php echo $image; ?>">
        </div>
      </div>

      <div class="col-md-7">
        
        <div class="title-part">
          <h2><?php echo $title; ?></h2>
        </div>

        <div class="detail">
          <?php echo $detail; ?>
        </div>

        <?php if ( !empty( $button['label'] ) ): ?>
          <div class="btn-wrp">
            <a href="<?php echo $button['link']; ?>"><?php echo $button['label']; ?></a>
          </div>
        <?php endif; ?>

      </div>

      <div class="col-md-5 desktop-view">
        
        <div class="img-wrp">
          <img src="<?php echo $image; ?>">
        </div>

        <?php if ( !empty($second_image) ) :?>

          <div class="img-wrp second-image">
            <img src="<?php echo $second_image; ?>">
          </div>
        <?php endif; ?>

      </div>
      
    </div>
    
  </div>
  
</div>
