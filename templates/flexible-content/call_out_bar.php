<style>
 /* call out bar section style */
  .call_out_bar-sc {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem; 
  }

  .call_out_bar-sc a:hover {
    text-decoration: none;
  }
  .call_out_bar-sc .page-banner {
    padding-top: 4rem;
    padding-bottom: 4rem;
    padding-left: 0;
    padding-right: 0;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    height: auto;
    color: #fff; 
    width: 100%;
    background-size: cover;
    background-position: center center;
	  opacity: 0.8;
     }
  .call_out_bar-sc .page-banner .row {
    margin-left: 15px;
    margin-right: 15px; 
  }
  .call_out_bar-sc .page-banner .banner-btn-group {
    padding-top: 2rem; 
  }
  /*.call_out_bar-sc .page-banner .banner-btn-group .middle_banner_btn {
    margin-bottom: 4px;
    border: 1px solid #fff;
    background-color: rgba(0,0,0,0);
    color: #fff;
    padding: 10px 25px;
  }
  .call_out_bar-sc .page-banner .banner-btn-group .middle_banner_btn:hover {
    border: 1px solid #0083be;
    background-color: #0083be; 
  }  */

  .call_out_bar-sc .gform_wrapper input[type="text"] {
    width: 100% !important;
  }
  .call_out_bar-sc .gform_wrapper .gform_footer {
    text-align:  center;
  }
  .call_out_bar-sc .gform_wrapper .gform_footer .gform_button {
    background-color:  #fff;
    border: 1px solid #fff;
    color: #1f3d7f;
    font-size:  16px;
    font-weight:  500;
    padding: 8px 30px;
    border-radius:  40px;
  }

  .call_out_bar-sc .gform_wrapper ul li.gfield {
    margin-top: 0;
  }
</style>
<?
$call_out_bar_title            = get_sub_field("title");
$call_out_bar_width            = get_sub_field("width");
$call_out_bar_transparency     = get_sub_field("add_transparency");
$call_out_bar_background_image = get_sub_field("background_image");
$call_out_bar_sub_text         = get_sub_field("sub_text");
$call_out_bar_buttons          = get_sub_field("buttons");
$banner_class = "container-fluid";
$anchor_name = get_sub_field('anchor_name');
$banner_url = get_sub_field('banner_url');
$single_button_or_multi = get_sub_field('single_button_or_multi');

if(!empty($call_out_bar_width)):
  if($call_out_bar_width == 'Fixed Width'):
    $banner_class = "container";
  endif;
endif; ?>

<div class="call_out_bar-sc" id="<?php echo $anchor_name; ?>">
<?php 
if ( $call_out_bar_transparency ) : ?>
  <style type="text/css">
    .call_out_bar-sc .page-banner::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }
    .call_out_bar-sc .page-banner .banner-content {
      z-index: 2;
    }
  </style>
<?php endif; ?>


<?php if ( $single_button_or_multi == 'Single' ) :?>
  <a href="<?php echo $banner_url; ?>">
<?php endif; ?>

<?php if (!empty($call_out_bar_background_image)): ?>
  <div class="page-banner <?php echo $banner_class; ?>" style="background-image: url(<?php echo $call_out_bar_background_image; ?>);">
<?php else: ?>
  <div class="page-banner  <?php echo $banner_class; ?>" style="color: #000 !important; ">
<?php endif; ?>

    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 text-center banner-content">
        <?php if(!empty($call_out_bar_title)): ?>
          <h2><?php echo($call_out_bar_title) ?></h2>
        <?php endif;?>
        <?php if(!empty($call_out_bar_sub_text)): ?>
          <?php echo($call_out_bar_sub_text) ?>
        <?php endif;?>

        <?php 
        if(!empty($call_out_bar_buttons) && $single_button_or_multi == 'Multi'): ?>
          <div class="banner-btn-group">
            <?php 
            foreach ($call_out_bar_buttons as $button ): 
              if (!empty($call_out_bar_background_image)): ?>
                <a href="<?php echo $button['link'];?>" class="btn"><?php echo $button['title'] ?></a>
              <?php 
              else:?>
                <a href="<?php echo $button['link'];?>" class="btn" style=" background-color: #fff !important; border: 1px solid #000 !important; color: #000 !important;"><?php echo $button['title'] ?></a>
              <?php 
              endif;?>
            <?php   
            endforeach; ?>
          </div>
        <?php
        endif; ?>         
      </div>
    </div>
  </div>

<?php if ( $single_button_or_multi == 'Single' ) :?>
  </a>
<?php endif; ?>

</div>
