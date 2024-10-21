<?php       
 
$html_block = get_sub_field('content_area');
$anchor_name = get_sub_field('anchor_name');
$html_block_2 = get_sub_field('content_area_2');
$html_block_3 = get_sub_field('content_area_3');
$html_block_4 = get_sub_field('content_area_4');
$background_color = get_sub_field('background_color');
$columns = get_sub_field('columns');
$padding_top = get_sub_field('padding_top');
$padding_bottom = get_sub_field('padding_bottom');
$custom_class = get_sub_field('custom_class');

?>

<style>
  .html_block-sc {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }
  .html_block-sc h1, .html_block-sc h2 {
    
  }  

  .html_block-sc .gform_wrapper .gform_footer .gform_button {
    font-size: 16px;
    padding: 7px 25px;
    border-radius: 30px;
    background-color: #222;
    color: #fff;
    text-decoration: none;
    transition: all ease 0.3s;
    border: none;
    font-weight: 500;
    cursor:  pointer;
  }

  .html_block-sc .gform_wrapper .gform_footer .gform_button:hover {
    color: #222;
    background-color: #eee;
    text-decoration: none;
  }

  .html_block-sc ul {
    margin: 0;
    padding: 0;
    padding-left: 25px;
  }
  .html_block-sc ul li {
    font-size: 18px;
    font-weight: 500;
  }
  .html_block-sc ul.list-with-mark {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .html_block-sc ul.list-with-mark li {        
    position: relative;
    padding: 20px 0;
    padding-left: 60px;

    font-size: 20px;
    font-weight: 500;
    display: flex;
    align-items: center;
    min-height: 100px;
  }

  .html_block-sc ul.list-with-mark li:before {
    content: "";
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/Icon-Check.svg');
    background-size: 40px 40px;
    width: 40px;
    height: 40px;
    left: 0;
    top: calc(50% - 20px);
    position: absolute;
  }

  .html_block-sc h2 {
    font-size: 35px;
    font-weight: 700;
    color: #13576E;
  }

  .html_block-sc h3 {
    font-size: 30px;
    font-weight: 700;
    color: #13576E;
  }

  .html_block-sc p {
    font-size: 20px;
    line-height: 140%;
    color: #000;
  }
  

  @media (max-width: 768px) {
    .html_block-sc {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    .html_block-sc h2 {
      font-size: 25px;
      font-weight: 700;
      color: #13576E;
    }

    .html_block-sc h3 {
      font-size: 21px;
      font-weight: 700;
      color: #13576E;
    }

    .html_block-sc p {
      font-size: 18px;
      line-height: 140%;
      color: #000;
    }

    .html_block-sc ul.list-with-mark li {        
      position: relative;
      padding: 10px 0;
      padding-left: 60px;

      font-size: 18px;
      font-weight: 500;
      display: flex;
      align-items: center;
      min-height: unset;
    }

    .html_block-sc ul.list-with-mark li:before {
      content: "";
      background-image: url('<?php echo get_template_directory_uri(); ?>/images/Icon-Check.svg');
      background-size: 36px 36px;
      width: 36px;
      height: 36px;
      left: 5px;
      top: calc(50% - 18px);
      position: absolute;
    }
  }
</style>

<?php

if ( !empty( $html_block ) ): ?>
  <?php if ( !empty( $anchor_name ) ) : ?>
    <div class="html_block-sc <?php echo $custom_class; ?>" id="<?php echo $anchor_name; ?>" style="background-color: <?php echo $background_color; ?>; padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px;">
  <?php else :?>
    <div class="html_block-sc <?php echo $custom_class; ?>" style="background-color: <?php echo $background_color; ?>; padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px;">
  <?php endif; ?>          
    <div class="container">
      <div class="row">

        <?php if ( $columns == 1 ) :?>
          <div class="col-lg-12">
            <?php echo $html_block; ?>
          </div>
        <?php elseif ( $columns == 2 ) :?>
          <div class="col-md-6">
            <?php echo $html_block; ?>
          </div>
          <div class="col-md-6">
            <?php echo $html_block_2; ?>
          </div>
        <?php elseif ( $columns == 3 ) :?>
          <div class="col-md-4">
            <?php echo $html_block; ?>
          </div>
          <div class="col-md-4">
            <?php echo $html_block_2; ?>
          </div>
          <div class="col-md-4">
            <?php echo $html_block_3; ?>
          </div>
        <?php elseif ( $columns == 4 ) :?>
          <div class="col-md-3">
            <?php echo $html_block; ?>
          </div>
          <div class="col-md-3">
            <?php echo $html_block_2; ?>
          </div>
          <div class="col-md-3">
            <?php echo $html_block_3; ?>
          </div>
          <div class="col-md-3">
            <?php echo $html_block_4; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
 <?php 

endif; ?>
