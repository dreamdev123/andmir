<style> 
	 /* timeline section style */
  .timeline-sc {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem; 
  }
  .timeline-sc .timelines-wrp {
    position: relative; 
  }
  .timeline-sc .timelines-wrp .timeline-date {
    font-size: 18px; 
  }
  .timeline-sc .timelines-wrp .timeline-content .title {
    padding-bottom: 15px; 
  }
  .timeline-sc .timelines-wrp:before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    height: 100%;
    width: 60px;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    background-image: url("<?php echo get_template_directory_uri(); ?>/images/small_dots.png");
    background-repeat: repeat-y;
    background-position: center top; 
  }
  @media (max-width: 991px) {
    .timeline-sc .timelines-wrp:before {
      content: none; 
    } 
  }
  .timeline-sc .timelines-wrp .inner-col {
    margin-left: 22px;
    margin-right: 22px; 
  }    
  @media (max-width: 991px) {
    .timeline-sc .timelines-wrp .inner-col {
      margin-top: 30px; 
      margin-left: 0px !important;
      margin-right: 0px !important;
    } 
    .timeline-sc .timelines-wrp .content {
      margin-top: 0px !important;
    }
  }
  .timeline-sc .timelines-wrp .inner-col .img-wrp {
    width: 100%;
    height: 0;
    padding-bottom: 50%;
    position: relative;
    margin-bottom: 25px; 
  }
  .timeline-sc .timelines-wrp .inner-col .img-wrp img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover;
    -o-object-position: center center;
       object-position: center center; 
  }
  .timeline-sc .timelines-wrp .inner-col .timeline-desc .timeline-date {
    font-size: 18px; 
  }
  .timeline-sc .timelines-wrp .inner-col .timeline-desc .timeline-content p {
    font-size: 14px; 
  }
  .timeline-sc .timelines-wrp .inner-col .timeline-desc .tl-content h3 {
    font-size: 2rem;
    margin-bottom: 0.5rem; 
  }
  .timeline-sc .timelines-wrp .inner-col .timeline-desc .tl-content p {
    font-size: 1rem; 
  }
  .timeline-sc .timelines-wrp > div:first-child .inner-col {
    margin-top: 0; 
  }
  .timeline-sc .timelines-wrp > div:nth-child(2n+1) .inner-col .img-wrp {
    position: relative; 
  }
  .timeline-sc .timelines-wrp > div:nth-child(2n+1) .inner-col .img-wrp:after {
    content: '';
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    right: -48px;
    width: 48px;
    height: 26px;
    background-color: #fff;
    position: absolute;
    background-image: url("<?php echo get_template_directory_uri(); ?>/images/timeline-side.png");
    background-size: contain;
    background-position: left center;
    background-repeat: no-repeat; 
  }
  @media (max-width: 991px) {
    .timeline-sc .timelines-wrp > div:nth-child(2n+1) .inner-col .img-wrp:after {
      content: none; 
    } 
  }
  .timeline-sc .timelines-wrp > div:nth-child(2n) .inner-col .img-wrp {
    position: relative; 
  }
  .timeline-sc .timelines-wrp > div:nth-child(2n) .inner-col .img-wrp:after {
    content: '';
    top: 50%;
    -webkit-transform: translateY(-50%) rotate(180deg);
            transform: translateY(-50%) rotate(180deg);
    left: -48px;
    width: 48px;
    height: 26px;
    background-color: #fff;
    position: absolute;
    background-image: url("<?php echo get_template_directory_uri(); ?>/images/timeline-side.png");
    background-size: contain;
    background-position: right center;
    background-repeat: no-repeat; 
  }
  @media (max-width: 991px) {
    .timeline-sc .timelines-wrp > div:nth-child(2n) .inner-col .img-wrp:after {
      content: none; 
    } 
  }
  .timeline-sc .load_more_btn {
    border: 1px solid #000;
    background-color: rgba(0,0,0,0);
    color: #000;
    margin-top: 30px;
    font-size: 14px;
  }
  .timeline-sc .load_more_btn:hover {
    border: 1px solid #2e6da4;
    background-color: #2e6da4;
    color: #fff;
  }
</style>


<?
        $content_repeater = get_sub_field('content_repeater'); 
        $anchor_name = get_sub_field('anchor_name');
        ?>
        <div class="timeline-sc" id="<?php echo $anchor_name; ?>">
          <div class="container">
       
            <div class="timelines-wrp">
              <?php 
              if(!empty($content_repeater)):
                $i = 0; 
                foreach ($content_repeater as $each_content): ?>
                  <div class="row">
                    <div class="content col-md-6 <?php echo $i % 2 == 0 ? '' : 'offset-md-6'; ?>" <?php echo $i != 0 ? 'style="margin-top: -90px;"' : ''; ?>>
                      <div class="inner-col" style="<?php echo $i % 2 == 0 ? 'margin-left: 0px;' : 'margin-right: 0px;'; ?>">
                        <div class="img-wrp">
                          <img src="<?php echo $each_content['image']; ?>" alt="Timeline">
                        </div>
                        <div class="timeline-desc">
                          <div class="timeline-date">
                            <strong><?php echo $each_content['date']; ?></strong>
                          </div>
                          <div class="timeline-content">
                             <p><?php echo $each_content['content']; ?></p>
                          </div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                  <?php 
                  $i++; 
                endforeach; 
              endif; ?>                 
            </div>
         
          </div>
        </div> 
