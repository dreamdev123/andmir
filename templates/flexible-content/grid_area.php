<style> 
	/* Grid Area Section */
  .grid_area-sc {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem; 
  }

  .grid_area-sc .tabs-left {
    border-bottom: none; 
  }
  .grid_area-sc .tabs-left>li {
    float: none;
    margin-bottom: 1px;
    background-color: #24679a; 
  }
  .grid_area-sc .tabs-left>li {
    margin-right: -1px;
    border: none; 
  }
  .grid_area-sc .tabs-left>li.active>a,
  .grid_area-sc .tabs-left>li.active>a:hover,
  .grid_area-sc .tabs-left>li.active>a:focus {
    border: none;
    background-color: #58a0d5;
    color: #fff; 
    cursor: pointer;
  }
  .grid_area-sc .tabs-left>li>a:hover {
    background-color: #58a0d5; 
  }
  .grid_area-sc .tabs-left>li>a {
    border-radius: 4px 0 0 4px;
    margin-right: 0;
    display:block;
    line-height: 1.4;
    color: #fff;
    font-size: 14px; 
  }
  .grid_area-sc .inner-col {
    padding-bottom: 1rem;
  }
  .grid_area-sc .inner-col h5 {
    margin-bottom: 0.3em;
    color: #58a0d5; 
  }
  .grid_area-sc .img-content .img-wrp img {
    height: 100%;
  }
  @media(max-width: 767px) {
    .grid_area-sc >.container >div {
      -webkit-flex-wrap: wrap;
      -moz-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      -o-flex-wrap: wrap;
      flex-wrap: wrap;
    }
    .grid_area-sc .img-content .img-wrp {
      width: 100%;
      height: auto;
    }
  }
  .grid_area-sc .left_tabs {
    padding-right: 15px;
  }
  .grid_area-sc .tab_contents {
    padding-left: 0px;
  }
  @media(max-width: 767px) {
    .grid_area-sc .left_tabs {
      padding-right: 0;
    }
    .grid_area-sc .img-content {
      margin-top: 15px;
      width: 100%;
    }
    .grid_area-sc .img-content .img-wrp {
      width: 100%;
    }
    .grid_area-sc .img-content .img-wrp img{
      width: 100%;
    }
  }
</style>

<? 

$display = get_sub_field('display');
$style = get_sub_field('style');
$number_of_cols = get_sub_field('#_of_columns');
$starting_orientation = get_sub_field('starting_orientation');
$grid_repeater = get_sub_field('grid_repeater');
$anchor_name = get_sub_field('anchor_name');
$rounded_edges = get_sub_field('rounded_edges');
$image_display = get_sub_field('image_display');

if ( empty( $style ) ) {
  $style = "Boxes with images in middle";
}

if ( empty( $display ) ) {
  $display = 'Content';
}

?>

<?php if ( $style == "Boxes with images in middle" ) : ?>
  <style type="text/css">
    .grid-area-sc-type1 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
    .grid-area-sc-type1 .each {
      margin-bottom: 50px;
    }
    .grid-area-sc-type1 .content-wrp {

    }
    .grid-area-sc-type1 .content-wrp .img-wrp {
      display: block;
      width: 100%;
      height: 0;
      padding-bottom: 56.25%;
      position: relative;
      margin-bottom: 15px;
      background-color: #fafafa;
    }
    .grid-area-sc-type1 .content-wrp .img-wrp img {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center center;
    }
    .grid-area-sc-type1 .content-wrp .title h3 {
      font-size: 24px;
      color: #222;
      font-weight: 600;
      margin-bottom: 15px;
    }
    .grid-area-sc-type1 .content-wrp .description {
      margin-bottom: 15px;
    }
    .grid-area-sc-type1 .content-wrp .description p {
      font-size: 18px;
      color: #222;
    }
    /*.grid-area-sc-type1 .content-wrp .button-link a {
      padding: 10px 20px;
      border: 2px solid #63b1e5;
      border-radius: 0;
      color: #54236c;
      text-transform: uppercase;
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 2px;
    }
    .grid-area-sc-type1 .content-wrp .button-link a:hover {
      background-color: #63b1e5;
      text-decoration: none;
    }*/
    .grid-area-sc-type1 .content-wrp {

    }
  </style>
  <div class="grid-area-sc-type1" id="<?php echo $anchor_name; ?>">
    <div class="container">
      <div class="row">

        <?php if ( $display == 'Content' ) :?>

          <?php if (!empty($grid_repeater)) :?>
            <?php foreach ( $grid_repeater as $grid ) : ?>
              <?php if ( $number_of_cols == 2 ): ?>
                <div class="col-md-6 each">
              <?php elseif ( $number_of_cols == 3 ) : ?>
                <div class="col-md-4 each">
              <?php else :?>
                <div class="col-md-3 each">
              <?php endif; ?>
                  <div class="content-wrp">
                    <div class="img-wrp" style="padding-bottom: <?php echo ($image_display == 'Square')? '100%':'56.25%'; ?>;">
                      <?php if ($rounded_edges) :?>
                        <img style="border-radius: 18px;" src="<?php echo $grid['image']; ?>">
                      <?php else :?>
                        <img src="<?php echo $grid['image']; ?>">
                      <?php endif; ?>
                    </div>
                    <div class="title">
                      <h3><?php echo $grid['title']; ?></h3>
                    </div>
                    <div class="description">
                      <p><?php echo $grid['description']; ?></p>
                    </div>

                    <?php switch ($grid['link_type']) {
                      case 'Link to page':
                        if (!empty($grid['page_link'])) :?>
                          <div class="button-link">
                            <a class="btn" href="<?php echo $grid['page_link']; ?>"><?php echo $grid['button_text']; ?></a>
                          </div>
                          <?php
                        endif;
                        break;
                      case 'Link to file':
                        if (!empty($grid['file_link'])) :?>
                          <div class="button-link">
                            <a class="btn" href="<?php echo $grid['file_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
                          </div>
          
                        <?php
                        endif;
                        break;
                      case 'Link to url':
                        if (!empty($grid['website_link'])) :?>
                          <div class="button-link">
                            <a class="btn" href="<?php echo $grid['website_link']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
                          </div>
                          <?php
                        endif;
                        break;
                      case 'Link to litebox popup': ?>
                        <div class="button-link litebox-open">
                          <a class="btn" href="javascript:;" ><?php echo $grid['button_text']; ?></a>
                          <div class="litebox-content" style="display: none;">
                            <?php echo $grid['litebox_area'] ?>
                          </div>
                          <input class="litebox-image" type="hidden" value="<?php echo $grid['litebox_image']; ?>">
                        </div>
                        <?php
                        break;
                    }
                    ?>
                  </div> 
                </div>

            <?php endforeach; ?>
          <?php endif; ?>

        <?php elseif ( $display == 'Posts' ) :

          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'orderby' => 'publish_date', 
            'order' => 'DESC'
          );

          $query = new WP_Query( $args ); 

          if ($query->have_posts()):
            while($query->have_posts()): $query->the_post(); ?>

              <?php if ( $number_of_cols == 2 ): ?>
                <div class="col-md-6 each">
              <?php elseif ( $number_of_cols == 3 ) : ?>
                <div class="col-md-4 each">
              <?php else :?>
                <div class="col-md-3 each">
              <?php endif; ?>
                  <div class="content-wrp">
                    <div class="img-wrp"  style="padding-bottom: <?php echo ($image_display == 'Square')? '100%':'56.25%'; ?>;">
                      <?php if ($rounded_edges) :?>
                        <?php if ( has_post_thumbnail() ) :?>
                          <img style="border-radius: 18px;" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <?php else :?>
                          <img style="border-radius: 18px;" src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg">
                        <?php endif; ?>
                      <?php else :?>
                        <?php if ( has_post_thumbnail() ) :?>
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <?php else :?>
                          <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg">
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                    <div class="title">
                      <h3><?php echo get_the_title(); ?></h3>
                    </div>
                    <div class="description">
                      <p><?php echo get_the_excerpt(); ?></p>
                    </div>

                    <div class="button-link">
                      <a class="btn" href="<?php echo get_the_permalink(); ?>" >Read More</a>
                    </div>
                  </div> 
                </div>

            <?php endwhile; 

          endif;

          wp_reset_query();

        else :

          $args = array(
            'post_type'      => 'tribe_events',
            'posts_per_page' => -1,
            'orderby' => 'publish_date', 
            'order' => 'DESC'
          );

          $query = new WP_Query( $args ); 

          if ($query->have_posts()):
            while($query->have_posts()): $query->the_post(); ?>

              <?php if ( $number_of_cols == 2 ): ?>
                <div class="col-md-6 each">
              <?php elseif ( $number_of_cols == 3 ) : ?>
                <div class="col-md-4 each">
              <?php else :?>
                <div class="col-md-3 each">
              <?php endif; ?>
                  <div class="content-wrp">
                    <div class="img-wrp" style="padding-bottom: <?php echo ($image_display == 'Square')? '100%':'56.25%'; ?>;">
                      <?php if ($rounded_edges) :?>
                        <?php if ( has_post_thumbnail() ) :?>
                          <img style="border-radius: 18px;" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <?php else :?>
                          <img style="border-radius: 18px;" src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg">
                        <?php endif; ?>
                      <?php else :?>
                        <?php if ( has_post_thumbnail() ) :?>
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <?php else :?>
                          <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg">
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                    <div class="title">
                      <h3><?php echo get_the_title(); ?></h3>
                    </div>
                    <div class="description">
                      <p><?php echo get_the_excerpt(); ?></p>
                    </div>

                    <div class="button-link">
                      <a class="btn" href="<?php echo get_the_permalink(); ?>" >Read More</a>
                    </div>
                  </div> 
                </div>

            <?php endwhile; 

          endif;

          wp_reset_query();

        endif; ?>

      </div>
    </div>
  </div>
<?php elseif ( $style == "Boxes with Background images with text overlay" ) : ?>
  <style type="text/css">
    .grid-area-sc-type2 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
    .grid-area-sc-type2 .each {
      margin-bottom: 30px;
    }
    .grid-area-sc-type2 .each .content-wrp {
      margin-bottom: 30px;
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      position: relative;
      height: 100%;
      padding: 50px 30px 20px;
      <?php if ($rounded_edges) :?>
        border-radius: 18px;
      <?php endif; ?>
    }
    .grid-area-sc-type2 .each .content-wrp::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.45);
      z-index: 1;
      <?php if ($rounded_edges) :?>
        border-radius: 18px;
      <?php endif; ?>
    }
    .grid-area-sc-type2 .each .content-wrp .content-inner {
      position: relative;
      z-index: 2;
    }
    .grid-area-sc-type2 .each a:hover {
      text-decoration: none;
    }
    .grid-area-sc-type2 .content-wrp .title h3 {
      font-size: 24px;
      color: #fff;
      font-weight: 600;
      margin-bottom: 15px;
    }
    .grid-area-sc-type2 .content-wrp .description {
      margin-bottom: 15px;
    }
    .grid-area-sc-type2 .content-wrp .description p {
      font-size: 18px;
      color: #fff;
    }
  </style>
  <div class="grid-area-sc-type2" id="<?php echo $anchor_name; ?>">
    <div class="container">
      <div class="row">

        <?php if ( $display == 'Content' ) :?>

          <?php if (!empty($grid_repeater)) :?>
            <?php foreach ( $grid_repeater as $grid ) : ?>
              <?php if ( $number_of_cols == 2 ): ?>
                <div class="col-md-6 each">
              <?php elseif ( $number_of_cols == 3 ) : ?>
                <div class="col-md-4 each">
              <?php else :?>
                <div class="col-md-3 each">
              <?php endif; ?>
                <?php switch ($grid['link_type']) {
                  case 'Link to page':
                    if (!empty($grid['page_link'])) :?>
                      <a href="<?php echo $grid['page_link']; ?>">
                      <?php
                    endif;
                    break;
                  case 'Link to file':
                    if (!empty($grid['file_link'])) :?>
                      <a href="<?php echo $grid['file_link']['url']; ?>" target="_blank">
            
                    <?php
                    endif;
                    break;
                  case 'Link to Website':
                    if (!empty($grid['website_link'])) :?>1
                      <div class="button-link">
                        <a class="btn" href="<?php echo $grid['website_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
                      </div>
          
                    <?php
                    endif;
                    break;
                  case 'Link to litebox popup': ?>
                    <a class="litebox-open" href="javascript:;" >
                      <div class="litebox-content" style="display: none;">
                        <?php echo $grid['litebox_area'] ?>
                      </div>
                      <input class="litebox-image" type="hidden" value="<?php echo $grid['litebox_image']; ?>">
                    <?php
                    break;
                  default: ?>
                    <a href="#">
                    <?php
                    break;
                    } ?>
                    <div class="content-wrp" style="background-image: url(<?php echo $grid['image']; ?>)">
                      <div class="content-inner">
                        <div class="title">
                          <h3><?php echo $grid['title']; ?></h3>
                        </div>
                        <div class="description">
                          <p><?php echo $grid['description']; ?></p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

            <?php endforeach; ?>
          <?php endif; ?>

        <?php elseif ( $display == 'Posts' ) :

          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'orderby' => 'publish_date', 
            'order' => 'DESC'
          );

          $query = new WP_Query( $args ); 

          if ($query->have_posts()):
            while($query->have_posts()): $query->the_post(); ?>
              <?php if ( $number_of_cols == 2 ): ?>
                <div class="col-md-6 each">
              <?php elseif ( $number_of_cols == 3 ) : ?>
                <div class="col-md-4 each">
              <?php else :?>
                <div class="col-md-3 each">
              <?php endif; ?>
                  <a href="<?php echo get_the_permalink(); ?>">
                    <div class="content-wrp" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                      <div class="content-inner">
                        <div class="title">
                          <h3><?php echo get_the_title(); ?></h3>
                        </div>
                        <div class="description">
                          <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            <?php endwhile;

          endif;

          wp_reset_query();

        else:

          $args = array(
            'post_type'      => 'tribe_events',
            'posts_per_page' => -1,
            'orderby' => 'publish_date', 
            'order' => 'DESC'
          );

          $query = new WP_Query( $args ); 

          if ($query->have_posts()):
            while($query->have_posts()): $query->the_post(); ?>
              <?php if ( $number_of_cols == 2 ): ?>
                <div class="col-md-6 each">
              <?php elseif ( $number_of_cols == 3 ) : ?>
                <div class="col-md-4 each">
              <?php else :?>
                <div class="col-md-3 each">
              <?php endif; ?>
                  <a href="<?php echo get_the_permalink(); ?>">
                    <div class="content-wrp" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                      <div class="content-inner">
                        <div class="title">
                          <h3><?php echo get_the_title(); ?></h3>
                        </div>
                        <div class="description">
                          <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            <?php endwhile;

          endif;

          wp_reset_query();

        endif; ?>

      </div>
    </div>
  </div>
<?php else: ?>
  <style type="text/css">
    .grid-area-sc-type3 .container-fluid {
      padding: 0;
    }
    .grid-area-sc-type3 .row {
      margin: 0;
    }
    .grid-area-sc-type3 .left-image,
    .grid-area-sc-type3 .right-image {
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      position: relative;              
    }
    @media (max-width: 768px) {
      .grid-area-sc-type3 .left-image,
      .grid-area-sc-type3 .right-image {
        min-height: 300px;
      }
    }
    .grid-area-sc-type3 .title {
      font-size: 28px;
      font-weight: 600;
      color: #222;
      margin-bottom: 20px;
    }
    .grid-area-sc-type3 .description {
      font-size: 18px;
      color: #222;
      margin-bottom: 30px
    }
    .grid-area-sc-type3 .left-content {
      padding: 120px 60px 120px 10%;
      background-color: #f7f7f7;
    }
    .grid-area-sc-type3 .right-content {
      padding: 120px 10% 120px 60px;
      background-color: #f7f7f7;
    }
    @media (max-width: 768px) {
      .grid-area-sc-type3 .left-content {
        padding: 60px;
        background-color: #f7f7f7;
      }
      .grid-area-sc-type3 .right-content {
        padding: 60px;
        background-color: #f7f7f7;
      }
    }
    @media (max-width: 576px) {
      .grid-area-sc-type3 .left-content {
        padding: 60px 30px;
        background-color: #f7f7f7;
      }
      .grid-area-sc-type3 .right-content {
        padding: 60px 30px;
        background-color: #f7f7f7;
      }
    }
    /*.grid-area-sc-type3 .button-link {
      padding: 15px 30px;
      border: 2px solid #63b1e5;
      border-radius: 0;
      color: #54236c;
      text-transform: uppercase;
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 2px;
    }
    .grid-area-sc-type3 .button-link:hover {
      background-color: #63b1e5;
      text-decoration: none;
    }*/
    .grid-area-sc-type3 .mobile-view {
      display: none;
    }
    @media (max-width: 768px) {
      .grid-area-sc-type3 .mobile-view {
        display: block;
      }
      .grid-area-sc-type3 .desktop-view {
        display: none;
      }
    }
  </style>
  <div class="grid-area-sc-type3" id="<?php echo $anchor_name; ?>">
    <div class="container-fluid">

      <?php if ( $display == 'Content' ) :?>
        <?php $index = 0; ?>
        <?php if (!empty($grid_repeater)) :?>
          <?php foreach ($grid_repeater as $grid) :?>
            <div class="row">
              <?php if ($starting_orientation == "Image Left"): ?>
                <?php if ( $index % 2 == 0) :?>
                  <div class="col-md-6 left-image" style="background-image: url(<?php echo $grid['image']; ?>);">
                    
                  </div>
                  <div class="col-md-6 right-content">
                    <h3 class="title"><?php echo $grid['title']; ?></h3>
                    <div class="description"><?php echo $grid['description']; ?></div>

                    <?php switch ($grid['link_type']) {
                      case 'Link to page':
                        if (!empty($grid['page_link'])) :?>
                          <a class="btn" href="<?php echo $grid['page_link']; ?>"><?php echo $grid['button_text']; ?></a>
                          <?php
                        endif;
                        break;
                      case 'Link to file':
                        if (!empty($grid['file_link'])) :?>
                          <a class="btn" href="<?php echo $grid['file_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
          
                        <?php
                        endif;
                        break;
                      case 'Link to Website':
                        if (!empty($grid['website_link'])) :?>
                          <a class="btn" href="<?php echo $grid['website_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
                          <?php
                        endif;
                        break;
                      case 'Link to litebox popup': ?>
                        <a class="btn litebox-open" href="javascript:;" ><?php echo $grid['button_text']; ?></a>
                        <div class="litebox-content" style="display: none;">
                          <?php echo $grid['litebox_area'] ?>
                        </div>
                        <input class="litebox-image" type="hidden" value="<?php echo $grid['litebox_image']; ?>">
                        <?php
                        break;
                    }
                    ?>
                  </div>
                <?php else :?>
                  <div class="col-md-6 left-image mobile-view" style="background-image: url(<?php echo $grid['image']; ?>);">
                    
                  </div>
                  <div class="col-md-6 left-content">
                    <h3 class="title"><?php echo $grid['title']; ?></h3>
                    <div class="description"><?php echo $grid['description']; ?></div>
                    <?php switch ($grid['link_type']) {
                      case 'Link to page':
                        if (!empty($grid['page_link'])) :?>
                          <a class="btn" href="<?php echo $grid['page_link']; ?>"><?php echo $grid['button_text']; ?></a>
                          <?php
                        endif;
                        break;
                      case 'Link to file':
                        if (!empty($grid['file_link'])) :?>
                          <a class="btn" href="<?php echo $grid['file_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
          
                        <?php
                        endif;
                        break;
                      case 'Link to Website':
                        if (!empty($grid['website_link'])) :?>
                          <a class="btn" href="<?php echo $grid['website_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
                          <?php
                        endif;
                        break;
                      case 'Link to litebox popup': ?>
                        <a class="btn litebox-open" href="javascript:;" ><?php echo $grid['button_text']; ?></a>
                        <div class="litebox-content" style="display: none;">
                          <?php echo $grid['litebox_area'] ?>
                        </div>
                        <input class="litebox-image" type="hidden" value="<?php echo $grid['litebox_image']; ?>">
                        <?php
                        break;
                    }
                    ?>
                  </div>
                  <div class="col-md-6 right-image desktop-view" style="background-image: url(<?php echo $grid['image']; ?>);">
                    
                  </div>
                <?php endif; ?>
              <?php else :?>
                <?php if ( $index % 2 == 1 ) :?>
                  <div class="col-md-6 left-image" style="background-image: url(<?php echo $grid['image']; ?>);">
                    
                  </div>
                  <div class="col-md-6 right-content">
                    <h3 class="title"><?php echo $grid['title']; ?></h3>
                    <div class="description"><?php echo $grid['description']; ?></div>
                    <?php switch ($grid['link_type']) {
                      case 'Link to page':
                        if (!empty($grid['page_link'])) :?>
                          <a class="btn" href="<?php echo $grid['page_link']; ?>"><?php echo $grid['button_text']; ?></a>
                          <?php
                        endif;
                        break;
                      case 'Link to file':
                        if (!empty($grid['file_link'])) :?>
                          <a class="btn" href="<?php echo $grid['file_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
                        <?php
                        endif;
                        break;
                      case 'Link to Website':
                        if (!empty($grid['website_link'])) :?>
                          <a class="btn" href="<?php echo $grid['website_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
          
                          <?php
                        endif;
                        break;
                      case 'Link to litebox popup': ?>
                        <a class="btn litebox-open" href="javascript:;" ><?php echo $grid['button_text']; ?></a>
                        <div class="litebox-content" style="display: none;">
                          <?php echo $grid['litebox_area'] ?>
                        </div>
                        <input class="litebox-image" type="hidden" value="<?php echo $grid['litebox_image']; ?>">
                        <?php
                        break;
                    }
                    ?>
                  </div>
                <?php else :?>
                  <div class="col-md-6 right-image mobile-view" style="background-image: url(<?php echo $grid['image']; ?>);">
                    
                  </div>
                  <div class="col-md-6 left-content">
                    <h3 class="title"><?php echo $grid['title']; ?></h3>
                    <div class="description"><?php echo $grid['description']; ?></div>
                    <?php switch ($grid['link_type']) {
                      case 'Link to page':
                        if (!empty($grid['page_link'])) :?>
                          <a class="btn" href="<?php echo $grid['page_link']; ?>"><?php echo $grid['button_text']; ?></a>
                          <?php
                        endif;
                        break;
                      case 'Link to file':
                        if (!empty($grid['file_link'])) :?>
                          <a class="btn" href="<?php echo $grid['file_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
                        <?php
                        endif;
                        break;
                      case 'Link to website':
                        if (!empty($grid['website_link'])) :?>
                          <a class="btn" href="<?php echo $grid['website_link']['url']; ?>" target="_blank"><?php echo $grid['button_text']; ?></a>
                          <?php
                        endif;
                        break;
                      case 'Link to litebox popup':?>
                        <a class="btn litebox-open" href="javascript:;" ><?php echo $grid['button_text']; ?></a>
                        <div class="litebox-content" style="display: none;">
                          <?php echo $grid['litebox_area'] ?>
                        </div>
                        <input class="litebox-image" type="hidden" value="<?php echo $grid['litebox_image']; ?>">
                        <?php
                        break;
                    }
                    ?>
                  </div>
                  <div class="col-md-6 right-image desktop-view" style="background-image: url(<?php echo $grid['image']; ?>);">
                    
                  </div>
                <?php endif; ?>
              <?php endif; ?>  
            </div>
            <?php $index++; ?>
          <?php endforeach; ?>
        <?php endif; ?>

      <?php elseif ( $display == 'Posts' ) :

        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => -1,
          'orderby' => 'publish_date', 
          'order' => 'DESC'
        );

        $query = new WP_Query( $args ); 

        if ($query->have_posts()):
          $index = 0;
          while($query->have_posts()): $query->the_post(); ?>

            <div class="row">
              <?php if ($starting_orientation == "Image Left"): ?>
                <?php if ( $index % 2 == 0) :?>
                  <div class="col-md-6 left-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                  <div class="col-md-6 right-content">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <div class="description"><?php echo get_the_excerpt(); ?></div>

                    <a class="btn" href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a>
                  </div>
                <?php else :?>
                  <div class="col-md-6 left-image mobile-view" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                  <div class="col-md-6 left-content">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <div class="description"><?php echo get_the_excerpt(); ?></div>
                    <a class="btn" href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a>
                  </div>
                  <div class="col-md-6 right-image desktop-view" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                <?php endif; ?>
              <?php else :?>
                <?php if ( $index % 2 == 1 ) :?>
                  <div class="col-md-6 left-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                  <div class="col-md-6 right-content">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <div class="description"><?php echo get_the_excerpt(); ?></div>
                    <a class="btn" href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a>
                  </div>
                <?php else :?>
                  <div class="col-md-6 right-image mobile-view" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                  <div class="col-md-6 left-content">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <div class="description"><?php echo get_the_excerpt(); ?></div>
                    <a class="btn" href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a>
                  </div>
                  <div class="col-md-6 right-image desktop-view" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                <?php endif; ?>
              <?php endif; ?>  
            </div>

          <?php $index++; 
          endwhile;
        endif;

        wp_reset_query();

      else: 

        $args = array(
          'post_type'      => 'tribe_events',
          'posts_per_page' => -1,
          'orderby' => 'publish_date', 
          'order' => 'DESC'
        );

        $query = new WP_Query( $args ); 

        if ($query->have_posts()):
          $index = 0;
          while($query->have_posts()): $query->the_post(); ?>

            <div class="row">
              <?php if ($starting_orientation == "Image Left"): ?>
                <?php if ( $index % 2 == 0) :?>
                  <div class="col-md-6 left-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                  <div class="col-md-6 right-content">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <div class="description"><?php echo get_the_excerpt(); ?></div>

                    <a class="btn" href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a>
                  </div>
                <?php else :?>
                  <div class="col-md-6 left-image mobile-view" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                  <div class="col-md-6 left-content">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <div class="description"><?php echo get_the_excerpt(); ?></div>
                    <a class="btn" href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a>
                  </div>
                  <div class="col-md-6 right-image desktop-view" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                <?php endif; ?>
              <?php else :?>
                <?php if ( $index % 2 == 1 ) :?>
                  <div class="col-md-6 left-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                  <div class="col-md-6 right-content">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <div class="description"><?php echo get_the_excerpt(); ?></div>
                    <a class="btn" href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a>
                  </div>
                <?php else :?>
                  <div class="col-md-6 right-image mobile-view" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                  <div class="col-md-6 left-content">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <div class="description"><?php echo get_the_excerpt(); ?></div>
                    <a class="btn" href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a>
                  </div>
                  <div class="col-md-6 right-image desktop-view" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    
                  </div>
                <?php endif; ?>
              <?php endif; ?>  
            </div>

          <?php $index++; 
          endwhile;
        endif;

        wp_reset_query();

      endif; ?>

    </div>
  </div>

<?php endif;?>


<style type="text/css">
  .grid-area-modal .modal:before {
    display: none;
  }
  .grid-area-modal .modal .modal-dialog {
    display: flex;
  }
  .grid-area-modal .detail-modal {
    padding-right: 0 !important; z-index: 10000; }
  @media (min-width: 992px) {
    .grid-area-modal .detail-modal .modal-lg {
      max-width: 900px; } }
  .grid-area-modal .detail-modal .modal-content {
    border: none;
    border-radius: 0; }
  .grid-area-modal .detail-modal .modal-body {
    padding: 0; }
  .grid-area-modal .detail-modal .modal-body .container .right-content {
    padding: 0px; 
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    height: auto; }
  .grid-area-modal .detail-modal .modal-body .container .right-content .detail-modal-close {
    background-color: transparent;
    border: none;
    position: absolute;
    right: 3px;
    top: 3px;
    padding: 0px;
    cursor: pointer;
    display: block; }
  @media (max-width: 992px) {
    .grid-area-modal .detail-modal .modal-body .container .right-content .detail-modal-close {
      display: none; } }
  .grid-area-modal .detail-modal .modal-body .container .right-content .detail-modal-close:focus {
    outline: none; }
  .grid-area-modal .detail-modal .modal-body .container .right-content .detail-modal-close:before {
    display: inline-block;
    border-radius: 0.33em;
    content: "\00D7";
    font-size: 40px;
    font-weight: normal;
    line-height: 25px;
    width: 40px;
    height: 40px;
    text-align: center;
    background: transparent;
    padding-top: 0px;
    padding-right: 0px; }
  .grid-area-modal .detail-modal .modal-body .container .left-content {
    padding: 0px; }
  .grid-area-modal .detail-modal .modal-body .container .left-content .detail-modal-close {
    background-color: transparent;
    border: none;
    position: absolute;
    right: 3px;
    top: 3px;
    padding: 0px;
    cursor: pointer;
    display: none; }
  @media (max-width: 992px) {
    .grid-area-modal .detail-modal .modal-body .container .left-content .detail-modal-close {
      display: block; } }
  .grid-area-modal .detail-modal .modal-body .container .left-content .detail-modal-close:focus {
    outline: none; }
  .grid-area-modal .detail-modal .modal-body .container .left-content .detail-modal-close:before {
    display: inline-block;
    color: #8d2b5c;
    border-radius: 0.33em;
    content: "\00D7";
    font-size: 40px;
    font-weight: normal;
    line-height: 25px;
    width: 40px;
    height: 40px;
    text-align: center;
    background: transparent;
    padding-top: 0px;
    padding-right: 0px; }
  .grid-area-modal .detail-modal .modal-body .container .left-content .inner-content {
    height: 100%;
    width: 100%;
    padding: 30px 42px;
    padding-bottom: 30px; }
  @media (max-width: 576px) {
    .grid-area-modal .detail-modal .modal-body .container .left-content .inner-content {
      padding: 30px; } }
  .grid-area-modal .detail-modal .modal-body .container .left-content .inner-content .title {
    font-weight: 700;
    font-style: normal;
    font-size: 20px;
    letter-spacing: .05em;
    line-height: 1.2em;
    text-transform: none;
    hyphens: none;
    word-break: keep-all;
    white-space: pre-wrap;
    margin: 0px;
    color: #222; }
  .grid-area-modal .detail-modal .modal-body .container .left-content .inner-content .desc {
    padding-top: 20px;
    padding-bottom: 0px;
    color: #222;
    font-size: 16px; }
  @media (max-width: 576px) {
    .grid-area-modal .detail-modal .modal-body .container .left-content .inner-content .desc {
      padding-top: 20px; } }
  .grid-area-modal .detail-modal .modal-body .container .left-content .inner-content .btn {
    margin-top: 10px;
    width: 100%;
    max-width: 150px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    outline: none;
    border: none; }
  .grid-area-modal .detail-modal .modal-body .container .left-content .inner-content .btn:focus {
    outline: none;
    border: none;
    box-shadow: none; }

  .grid-area-modal .detail-modal.no-right-content .col-lg-8 {
    width: 100%;
    max-width: 100%;
    flex: 0 0 100%;
  }
  .grid-area-modal .detail-modal.no-right-content .col-lg-4 {
    width: 0%;
    max-width: 0;
  }
</style>

<!-- Modal -->
<div class="grid-area-modal">
  <div class="modal fade detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 left-content">
                <button class="detail-modal-close"></button>
                <div class="inner-content">

                </div>
              </div>
              <div class="col-lg-4 right-content">                        
                <button class="detail-modal-close"></button>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  jQuery('.litebox-open').click(function() {
    var content = jQuery(this).parent().find('.litebox-content').html();
    var image_url = jQuery(this).parent().find('.litebox-image').val();

    jQuery('.grid-area-modal .detail-modal .inner-content').html(content);

    if ( !image_url ) {
      jQuery('.grid-area-modal .detail-modal').addClass('no-right-content');
    } else {
      jQuery('.grid-area-modal .detail-modal').removeClass('no-right-content');
      jQuery('.grid-area-modal .detail-modal .right-content').attr('style', 'background-image: url(' + image_url + ');');
    }

    jQuery('.grid-area-modal .detail-modal').modal('show');     

  });

  jQuery('.grid-area-modal .detail-modal .detail-modal-close').click(function(){
    jQuery('.grid-area-modal .detail-modal').modal('hide');
  });

</script>
