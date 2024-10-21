<?php

$items = get_sub_field('items');

?>

<div class="values-section">

  <div class="container">

    <div class="row">

      <?php if ( !empty( $items ) ) :?>

        <?php foreach( $items as $each ) :?>

          <div class="each col-md-6">

            <div class="title-part">
              <h2><?php echo $each['title']; ?></h2>
            </div>

            <div class="items">

              <?php if ( !empty($each['sub_items']) ) :?>

                <?php foreach($each['sub_items'] as $item): ?>

                  <div class="row item">

                    <div class="col-md-3 col-3">
                      <div class="img-wrp">
                        <img src="<?php echo $item['image']; ?>">
                      </div>
                    </div>

                    <div class="col-md-9 col-9">
                      <div class="sub-title">
                        <p><?php echo $item['sub_title']; ?></p>
                      </div>
                    </div>
                    
                  </div>

                <?php endforeach; ?>

              <?php endif; ?>
              
            </div>
            
          </div>

        <?php endforeach; ?>

      <?php endif; ?>
      
    </div>
    
  </div>
  
</div>
