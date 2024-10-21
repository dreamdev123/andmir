<?php

$items = get_sub_field('items'); 

?>

<div class="mission-vision-section">
  
  <div class="container">

    <div class="row">

      <?php if ( !empty( $items ) ) :?>

        <?php foreach( $items as $each ) :?>

          <div class="each col-md-6">

            <div class="each-wrp">

              <div class="row">

                <div class="col-md-8 col-8">
                  <div class="title-part">
                    <h2><?php echo $each['title']; ?></h2>
                  </div>
                  <div class="detail">
                    <?php echo $each['detail']; ?>
                  </div>
                </div>

                <div class="col-md-4 col-4">
                  <div class="img-wrp">
                    <img src="<?php echo $each['image']; ?>">
                  </div>
                </div>
                
              </div>
              
            </div>
            
          </div>

        <?php endforeach; ?>

      <?php endif;?>
      
    </div>
    
  </div>

</div>
