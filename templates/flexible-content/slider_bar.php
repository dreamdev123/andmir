<style> 
	/* slider bar section style */
  .slider_bar_title {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .banner-slider {
    padding-bottom: 1.5rem;
    margin-bottom: 0px !important;
    padding-right: 0px;
    padding-left: 0px; 
  }
  .banner-slider .slick-dots li {
    margin: 5px; 
  } 
  .banner-slider .slick-dots {
    bottom: 30px; 
  }
  .banner-slider .slick-dots li button:before {
    font-size: 20px;
    color: #fff; 
  } 
  .banner-slider .slick-arrow {
    z-index: 1;
    width: 30px;
    height: 30px; 
  }
  .banner-slider .slick-prev {
    left: 25px; 
  }
  .banner-slider .slick-next {
    right: 25px; 
  }
  .banner-slider .slick-list {
    width: 100%; 
  }
  .banner-slider .slick-list .slick-track {
    display: flex; 
  }
  .banner-slider .slick-list .slick-track .each-panel {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    height: auto; 
  }
  .banner-slider .slick-list .slick-track .each-panel:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 1; 
  }
  .banner-slider .slick-list .slick-track .each-panel .inner-panel {
    position: relative;
    z-index: 2;
    padding-top: 15rem;
    padding-bottom: 15rem;
    width: 100%;
    color: #fff; 
  }
  .banner-slider .slick-list .slick-track .each-panel .inner-panel h1 {
    font-size: 72px;      
    margin-bottom: 0.2em; 
  } 
  .banner-slider .slick-list .slick-track .each-panel .inner-panel a {
    text-decoration: none;
    color: #fff;
  }
  
</style>

   <? 
        $slider_bar_title  = get_sub_field('title');
        $slider_bar_width  = get_sub_field('width');
        $slider_bar_slides = get_sub_field('slides');
        if (!empty($slider_bar_title) ): ?>
          <div class="slider_bar_title text-center">
            <h2><?php echo $slider_bar_title; ?></h2>
          </div>          
        <?php
        endif;
        $slider_width_class = "container-fluid";
        if(!empty($slider_bar_width)):
          if($slider_bar_width == 'Fixed Width'):
            $slider_width_class = "container";
          endif;
        endif; ?>
        <div class="banner-slider <?php echo $slider_width_class;?>" style="<?php echo ($slider_width_class == 'container') ? 'padding-left: 15px; padding-right: 15px;':''; ?>">
          <?php
          if(!empty($slider_bar_slides)):
            foreach($slider_bar_slides as $each_slide): ?>
              <div class="each-panel" style="background-image: url(<?php echo $each_slide['slider_image']; ?>);">
                <div class="inner-panel">
                  <div class="container text-center">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <a href="<?php echo $each_slide['slider_link']; ?>">
                          <?php echo $each_slide['slider_content']; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php 
            endforeach;
          endif; ?>
        </div>  



