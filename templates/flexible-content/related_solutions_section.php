<?php

$title = get_sub_field('title');
$solutions = get_sub_field('solutions');

?>

<div class="related-solutions-section">
  
  <div class="container">
    
    <div class="title-part">
      <h2><?php echo $title; ?></h2>
    </div>

    <div class="row">

      <?php if ( !empty( $solutions ) ): ?>

        <?php foreach( $solutions as $each ) :?>

          <div class="each col-md-4">
            <div class="each-wrp">
              <a href="<?php echo $each['link']; ?>">
                <div class="img-wrapper">
                  <div class="img-wrp">
                    <div class="img-inner-wrp">
                      <img src="<?php echo $each['image']; ?>">
                    </div>
                  </div>
                </div>
              </a>

              <div class="sub-title">
                <a href="<?php echo $each['link']; ?>"><h3><?php echo $each['sub_title']; ?></h3></a>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

      <?php endif; ?>
      
    </div>

  </div>
</div>
