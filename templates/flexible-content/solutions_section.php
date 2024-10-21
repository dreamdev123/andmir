<?php

$title = get_sub_field('title');
$description = get_sub_field('description');
$solutions = get_sub_field('solutions');
$background_image = get_sub_field('background_image');

?>

<div class="solutions-section">

  <div class="top-content" style="background-image: url(<?php echo $background_image; ?>)">
    
    <div class="container">

      <div class="title-part">
        <h2><?php echo $title; ?></h2>
      </div>

      <div class="description">

        <div class="row">

          <div class="col-md-10 offset-md-1">
            <?php echo $description; ?>
          </div>
          
        </div>
        
      </div>
      
    </div>

  </div>

  <div class="bottom-content">

    <div class="container">

      <div class="row">

        <?php if ( !empty( $solutions ) ): ?>

          <?php foreach( $solutions as $each ) :?>

            <div class="each col-md-3">
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

</div>


<div class="contact-modal">
  <div class="close-btn">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Homepage-Closebox.svg">
  </div>
  <div class="inner-wrp">
    <h3>Already know <br>what you're <br>looking for?</h3>

    <div class="btn-wrp">
      <a href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
    </div>
  </div>
</div>

<script type="text/javascript">
  jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() >= 140) {

      var contact_modal_show = localStorage.getItem('contact_modal_show');

      if ( !contact_modal_show ) {
        jQuery('.contact-modal').addClass('modal-show');
      }
      
    }
  });

  jQuery('.contact-modal .close-btn').click(function() {
    jQuery('.contact-modal').removeClass('modal-show');
    localStorage.setItem('contact_modal_show', 1);
  });
</script>
