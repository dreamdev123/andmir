<style> 
	/* gallery section style */
  .gallery-sc {
    padding-bottom: 1.5rem;
    padding-top: 1.5rem;
  }
  .gallery-sc .each {
    padding-left: 15px;
    padding-right: 15px;
  }
  .gallery-sc .inner-col {
    text-align: center;
    padding-bottom: 1rem;
  }
  .gallery-sc .inner-col .caption {
    font-size: 12px;
    text-align:  left;
  }
  .gallery-sc .inner-col .img-wrp {
    display: block;
    width: 100%;
    height: 0;
    padding-bottom: 60%;
    position: relative;
    margin-bottom: 5px;
    background-color: #fafafa;
    overflow: hidden; 
  }
  .gallery-sc .inner-col .img-wrp img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center; 
  }
</style>

<?
$gallery_images     = get_sub_field('gallery');
$anchor_name        = get_sub_field('anchor_name');
$columns_to_display = get_sub_field('columns_to_display');
$rows_to_display    = get_sub_field('rows_to_display');
$include_captions   = get_sub_field('include_captions');

$width = 100 / $columns_to_display;
$number_of_images = 0;

if ( $rows_to_display != 'Unlimited' ) {
  $number_of_images = $columns_to_display * $rows_to_display;
}

if( !empty($gallery_images) ): ?> 
  <div class="gallery-sc" id="<?php echo $anchor_name; ?>">
    <div class="container">
      <div class="row">
      <?php $image_index = 1; ?>
      <?php foreach ( $gallery_images as $image ): ?>               
        <div class="each" style="width: <?php echo $width; ?>%;" >
          <div class="inner-col">
            <div class="img-wrp">
              <style type="text/css">
                #html5-watermark {
                  display: none !important;
                }
              </style>
              <a class="html5lightbox" rel="group" href="<?php echo $image['url']; ?>">
                <?php if(end(explode(".",$image['url'])) =="m4v"): ?>
                    <video src="<?php echo $image['url']; ?>">
                <?php else:?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif; ?>
              </a>
            </div>

            <?php if ( $include_captions ) :?>
              <p class="caption"><?php echo $image['caption']; ?></p>
            <?php endif; ?>

          </div>
        </div>
        <?php 
        $image_index ++;
        if ( $rows_to_display != 'Unlimited' && $image_index > $number_of_images  ) {
          break;
        } ?>
      <?php endforeach;?>
      </div>
    </div>
  </div>
<?php
endif; ?>
