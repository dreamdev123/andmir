<style>
/* accordian section style */
  .accordion-sc {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .accordion-sc .title-part h2 {
    margin-bottom: 0.4em;
    text-transform: uppercase;
  }
  .accordion-sc .accordion-content {
    display: block;
  }

  .accordion-sc .accordion-content .panel-default .panel-heading {
    color: #000;
    background-color: #bdbdbd;
    border-bottom: 2px solid #fff;
    padding: 8px;
    padding-left: 15px;
  }
  .accordion-sc .accordion-content .panel-default .panel-heading h4 {
    margin: 0px;
  }
  .accordion-sc .accordion-content .panel-default .panel-heading a {
    text-decoration: none;
    color: #000;
  }
  .accordion-sc .accordion-content .panel-default .panel-body {
    padding: 8px;
    padding-left: 15px;
  }	
</style>


<?php

$accordion = get_sub_field('accordion');
$anchor_name = get_sub_field('anchor_name');
if ( !empty($accordion) ): ?>
<div class="accordion-sc" id="<?php echo $anchor_name; ?>">  
  <div class="container">
    <div class="row">
      <div class="col-12 accordion-content">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <?php 
          foreach($accordion as $key=>$each_content): ?>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="<?php echo 'faq-' . $key;  ?>">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo 'collapse-' . $key; ?>" aria-expanded="false" aria-controls="<?php echo 'collapse-' . $key; ?>">
                  <?php echo $each_content['title'];  ?>
                </a>
              </h4>
            </div>
            <div id="<?php echo 'collapse-' . $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php echo 'faq-' . $key;  ?>">
              <div class="panel-body">
                <?php echo $each_content['content']; ?>
              </div>
            </div>
          </div>
          <?php 
          endforeach; ?>
        </div>
      </div>            
    </div>
  </div>
</div>

<?php 
endif; ?>
