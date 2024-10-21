<style> 

  /* location info */
  .location-info-sc {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .location-info-sc .left-wrp {
    padding-bottom: 1rem;
  }
  .location-info-sc .left-wrp .left-wrp-title {
    text-transform: uppercase;
  }
  .location-info-sc .left-wrp .left-wrp-description {
    font-size: 14px;
    padding-bottom: 1rem;
  }
  .location-info-sc .left-wrp .left-wrp-googlemap {
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
    position: relative; 
    border: 2px solid #989898;
  }
  .location-info-sc .left-wrp .left-wrp-googlemap iframe {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%; 
  }
  .location-info-sc .right-wrp {
    padding-bottom: 1rem; 
  }
  .location-info-sc .right-wrp .slider-wrp {
    margin-bottom: 0px !important;
    padding-right: 0px;
    padding-left: 0px; 
    border: 2px solid #989898;
  }
  .location-info-sc .right-wrp .slider-wrp .slick-dots li {
    margin: 5px; 
  } 
  .location-info-sc .right-wrp .slider-wrp .slick-dots {
    bottom: 30px; 
  }
  .location-info-sc .right-wrp .slider-wrp .slick-dots li button:before {
    font-size: 20px;
    color: #fff; 
  } 
  .location-info-sc .right-wrp .slider-wrp .slick-arrow {
    z-index: 1;
    width: 30px;
    height: 30px; 
  }
  .location-info-sc .right-wrp .slider-wrp .slick-prev {
    left: 25px; 
  }
  .location-info-sc .right-wrp .slider-wrp .slick-next {
    right: 25px; 
  }
  .location-info-sc .right-wrp .slider-wrp .slick-list {
    width: 100%; 
  }
  .location-info-sc .right-wrp .slider-wrp .slick-list .slick-track {
    display: flex; 
  }
  .location-info-sc .right-wrp .slider-wrp .slick-list .slick-track .each-panel {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    height: auto; 
  }
  .location-info-sc .right-wrp .slider-wrp .slick-list .slick-track .each-panel:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 1; 
  }
  .location-info-sc .right-wrp .slider-wrp .slick-list .slick-track .each-panel .inner-panel {
    position: relative;
    z-index: 2;
    padding-top: 13rem;
    padding-bottom: 13rem;
    width: 100%;
    color: #fff; 
  }
</style>

   <?
        $left_wrap_title = get_sub_field('left_wrap_title');
        $left_wrap_description = get_sub_field('left_wrap_description');
        $left_wrap_google_map = get_sub_field('left_wrap_google_map');
        $right_wrap_slider = get_sub_field('right_wrap_slider'); ?>
        <div class="location-info-sc">
          <div class="container">
            <div class="row align-items-end">
              <div class="col-lg-6 left-wrp">
                <?php
                if (!empty($left_wrap_title)): ?>
                  <h2 class="left-wrp-title"><?php echo $left_wrap_title; ?></h2>
                <?php
                endif;
                if (!empty($left_wrap_description)): ?>
                  <div class="left-wrp-description"><?php echo $left_wrap_description; ?></div>
                <?php 
                endif; ?>
                <div class="left-wrp-googlemap">
                  <?php echo $left_wrap_google_map; ?>
                </div>
              </div>
              <div class="col-lg-6 right-wrp">
                <div class="slider-wrp">
                  <?php
                  if(!empty($right_wrap_slider)):
                    foreach($right_wrap_slider as $image): ?>
                      <div class="each-panel" style="background-image: url(<?php echo $image; ?>);">
                        <div class="inner-panel">
                        </div>
                      </div>
                    <?php 
                    endforeach;
                  endif; ?>
                </div>  
              </div>
            </div>
          </div>
        </div>


