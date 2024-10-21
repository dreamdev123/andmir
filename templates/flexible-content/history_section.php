<?php 

$items = get_sub_field('items');

?>

<div class="history-section">

  <div class="container">

    <div class="instruction">
      <p>Drag then tap the timeline to reveal more dates and details.</p> 
      <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_right.svg">
    </div>

    <div class="history-inner-wrp">

      <?php if ( !empty( $items ) ) :?>

        <div class="history-time-line">

          <?php foreach( $items as $item ) :?>

            <?php 

              $start_year = (int)$item['start_year'];
              $end_year = (int)$item['end_year'];

              $sub_title = $item['sub_title'];
              $detail = $item['detail'];

              $start_point = ($start_year - 2001) * 100 / 22;
              $length = ($end_year - $start_year) * 100 / 22;

              // if ( ($end_year - $start_year) == 1 ) {
              //   $start_point = ($start_year - 2001 - 1) * 100 / 22;
              //   $length = ($end_year - $start_year + 1) * 100 / 22;
              // }

            ?>

            <div class="item <?php echo ( ($end_year - $start_year) == 0 )? 'single-item':'multi-item'; ?>" style="left: <?php echo $start_point; ?>%; width: <?php echo $length; ?>%;">
              <div class="item-outer"></div>
              <div class="item-inner"></div>
                
              <p class="start-year"><?php echo $start_year; ?></p>
              <?php if( ($end_year - $start_year) != 0 ): ?>
                <p class="end-year"><?php echo $end_year; ?></p>
              <?php endif; ?>

              <div class="detail">
                <div class="detail-inner">
                  <div class="detail-wrp">
                    <div class="close-btn">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/Homepage-Closebox.svg">
                    </div>
                    <h3><?php echo $item['sub_title']; ?></h3>
                    <p><?php echo $item['detail']; ?></p>
                  </div>
                </div>
              </div>

            </div>

          <?php endforeach; ?>

        </div>

      <?php endif; ?>

    </div>
    
  </div>
  
</div>
