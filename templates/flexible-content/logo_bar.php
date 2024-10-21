<style> 
 /* logo bar section style */
  .logo_bar-sc {
    padding-bottom: 1.5rem;
    padding-top: 1.5rem;
  }
  .logo_bar-sc .inner-col {
    text-align: center;
  }
  .logo_bar-sc .inner-col .img-wrp {
    display: block;
    width: 100%;
    height: 0;
    padding-bottom: 50%;
    position: relative;
    overflow: hidden; 
  }
  .logo_bar-sc .inner-col .img-wrp img {
    position: absolute;
    left: 50%;
    top: 50%;
    height: 100%;
    width: 100%;
    transform: translateX(-50%) translateY(-50%);
    object-fit: contain;
    object-position: center center; 
  }  	
	
	/* logo bar section style */
  .logo_bar-sc {
    padding-bottom: 1.5rem;
    padding-top: 1.5rem; 
  }
  .logo_bar-sc .title-img-wrp {
    display: block;
    width: 100%;
    height: 0;
    padding-bottom: 22.25%;
    position: relative;
    margin-bottom: 30px;
    overflow: hidden;
  }
  .logo_bar-sc .title-img-wrp img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
  }
  .logo_bar-sc .logo-title {
    padding-bottom: 2rem; 
  }
  .logo_bar-sc .each-logo {
    padding: 10px;
  }
  /* Slider */
  .logo_bar-sc .slick-slide {
    margin: 0px 20px;
  }
  .logo_bar-sc .slick-slide img {
    width: 100%;
  }
  .logo_bar-sc .slick-slider
  {
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
  }
  .logo_bar-sc .slick-list
  {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
  }
  .logo_bar-sc .slick-list:focus
  {
    outline: none;
  }
  .logo_bar-sc .slick-list.dragging
  {
    cursor: pointer;
    cursor: hand;
  }
  .logo_bar-sc .slick-slider .slick-track,
  .logo_bar-sc .slick-slider .slick-list
  {
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
  .logo_bar-sc .slick-track
  {
    position: relative;
    top: 0;
    left: 0;
    display: block;
  }
  .logo_bar-sc .slick-track:before,
  .logo_bar-sc .slick-track:after
  {
    display: table;
    content: '';
  }
  .logo_bar-sc .slick-track:after
  {
    clear: both;
  }
  .logo_bar-sc .slick-loading .slick-track
  {
    visibility: hidden;
  }
  .logo_bar-sc .slick-slide
  {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
  }
  [dir='rtl'] .logo_bar-sc .slick-slide
  {
    float: right;
  }
  .logo_bar-sc .slick-slide img
  {
    display: block;
  }
  .logo_bar-sc .slick-slide.slick-loading img
  {
    display: none;
  }
  .logo_bar-sc .slick-slide.dragging img
  {
    pointer-events: none;
  }
  .logo_bar-sc .slick-initialized .slick-slide
  {
    display: block;
  }
  .logo_bar-sc .slick-loading .slick-slide
  {
    visibility: hidden;
  }
  .logo_bar-sc .slick-vertical .slick-slide
  {
    display: block;
    height: auto;
    border: 1px solid transparent;
  }
  .logo_bar-sc .slick-arrow.slick-hidden {
    display: none;
  } 
  /*.logo_bar-sc .see-more-button {
    width: 150px;
    background-color: #fff;
    border: 1px solid #000;
    color: #000;
  }
  .logo_bar-sc .see-more-button:hover {
    background-color: #337ab7;
    color: #fff;
    border: 1px solid #337ab7;
  }*/
</style>

 <?        
        $logo_title           = get_sub_field('logo_title');
        $logo_title_color     = get_sub_field('logo_title_color');
        $columns_of_display   = get_sub_field('#_of_columns_to_display');
        $include_descriptions = get_sub_field('include_descriptions');
        $include_links        = get_sub_field('include_links');
        $logos                = get_sub_field('logos');
        $scrolling            = get_sub_field('scrolling');
        $banner_image         = get_sub_field('banner_image');
        $logo_bar_id          = get_sub_field('logo_bar_id');
        $see_more_button      = get_sub_field('see_more_button');
        if(empty($columns_of_display)):
          $columns_of_display = 3;
        endif;
        if(empty($logo_title_color)):
          $title_color = '#000';
        else :
          $title_color = $logo_title_color;
        endif; ?>         
        <div class="logo_bar-sc" <?php echo (!empty($logo_bar_id))? "id='".$logo_bar_id."'":''; ?>>
          <input class="logo_bar_columns_of_display" type="hidden" value="<?php echo $columns_of_display; ?>"/>          
         
          <?php 
          if(!$scrolling):?>
            <div class="container">
              <div class="row logo-list-wrp">
                <?php
                if(!empty($logos)):
                  foreach($logos as $logo): ?>
                    <div class="each-logo" style="width: <?php echo (100/$columns_of_display) ;?>%; object-fit: contain !important; padding: <?php echo (5/$columns_of_display); ?>% <?php echo (10/$columns_of_display); ?>%;" >
                      <div class="inner-col text-center">
                        <?php 
                        if (!empty($include_links) && $include_links): ?>
                          <a href="<?php echo $logo['logo_link']; ?>" class="img-wrp">
                            <img src="<?php echo $logo['logo_image']; ?>" alt="<?php echo $logo['logo_name']; ?>">
                          </a>
                        <?php
                        else: ?>
                          <div class="img-wrp">
                            <img src="<?php echo $logo['logo_image']; ?>" alt="<?php echo $logo['logo_name']; ?>">
                          </div>
                        <?php
                        endif;?>

                        
                        <?php 
                        if (!empty($include_descriptions) && $include_descriptions):
                          echo $logo['logo_description'];
                        endif; ?>
                      </div>
                    </div>
                  <?php 
                  endforeach;
                endif; ?>
              </div>
            </div>            
            <?php
            if(!empty($see_more_button) && $see_more_button):?>
              <div class="container text-center pb-2">
                <input class="click_count" type="hidden" value="1"/>
                <a class="see-more-button btn" href="javascript:;">See more</a>
              </div>
            <?php
            endif;
          else :?>
            <div class="container">
              <section class="customer-logos slider">
                <?php
                if(!empty($logos)):
                  foreach($logos as $logo): ?>
                  <div class="each-logo" style="width: <?php echo (100/$columns_of_display) ;?>%; object-fit: contain !important;" >
                    <div class="inner-col text-center">
                      <?php 
                      if (!empty($include_links) && $include_links): ?>
                        <a href="<?php echo $logo['logo_link']; ?>" class="img-wrp">
                        <img src="<?php echo $logo['logo_image']; ?>" alt="Logo Image">
                        </a>
                      <?php
                      else: ?>
                        <div class="img-wrp">
                        <img src="<?php echo $logo['logo_image']; ?>" alt="<?php echo $logo['logo_name']; ?>">
                        </div>
                      <?php
                      endif;?>
                     
                      <?php 
                      if (!empty($include_descriptions) && $include_descriptions):
                        echo $logo['logo_description'];
                      endif; ?>
                    </div>
                  </div>
                  <?php 
                  endforeach;
                endif; ?>
              </section>
            </div>
<?php
                          endif; ?>

