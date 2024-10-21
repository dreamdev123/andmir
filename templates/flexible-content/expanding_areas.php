<style> 
	/* expanding areas section style */
  .expanding_areas-sc {
    padding-bottom: 1.5rem;
    padding-top:  1.5rem; }
  /*.expanding_areas-sc .expanding-details .btn {
    border: 1px solid #000;
    background-color: rgba(0,0,0,0);
    color: #000;
    font-size: 14px;
  }
  .expanding_areas-sc .expanding-details .btn:hover {
    background-color: #4089c7;
    color: #fff;
    border: 1px solid #4089c7;
  }*/
  .expanding_areas-sc .side-image {
    width: 20%; 
    padding: 15px; 
    padding-top: 6px; 
  }
  .expanding_areas-sc .more_read {
    margin-top: 20px; 
  }
  .expanding_areas-sc .less_read {
    margin-top: 20px; 
  }
</style>


 <?
        $side_image    = get_sub_field('side_image');
        $image_align   = get_sub_field('image_align');
        $preview_text  = get_sub_field('preview_text');
        $expanded_text = get_sub_field('expanded_text');
        $image_link_id_for_modal = get_sub_field('image_link_id_for_modal');  
        $anchor_name = get_sub_field('anchor_name');      
        if(empty($image_align)):
          $image_align = 'left';
        endif;
        if( $image_align == 'Right' ):
          $more_align = 'left';
        else:
          $more_align = 'right';
        endif; ?>
        <div class="expanding_areas-sc" id="<?php echo $anchor_name; ?>">
          <div class="container">
            <div class="expanding-details">
              <p>
                <?php
                if(!empty($side_image)):
                  if(!empty($image_link_id_for_modal)):?>                     
                    <a href="#" data-toggle="modal" data-target="#<?php echo $image_link_id_for_modal; ?>">
                      <img class="side-image" src="<?php echo $side_image; ?>" style="float: <?php echo $image_align; ?>; <?php echo ($more_align == 'right')? 'padding-left: 0px;' : 'padding-right: 0px;'; ?>">
                    </a>
                  <?php 
                  else: ?>
                    <img class="side-image" src="<?php echo $side_image; ?>" style="float: <?php echo $image_align; ?>; <?php echo ($more_align == 'right')? 'padding-left: 0px;' : 'padding-right: 0px;'; ?>">
                  <?php
                  endif;
                endif;                
                if(!empty($preview_text)):
                  echo $preview_text;
                endif;                
                if(!empty($expanded_text)):?>
                  <div class="expanded_text">
                    <?php echo $expanded_text; ?>
                  </div>                    
                  <a class="btn" style="float: <?php echo $more_align; ?>;" href="javascript:;">Read more</a>
                <?php                   
                endif; ?>
              </p>
            </div>            
          </div>          
        </div>

