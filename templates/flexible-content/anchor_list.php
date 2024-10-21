<style> 
	/* anchor list section */
  .anchor_list-sc {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem; 
  }
  .anchor_list-sc .anchor_detail_section {
    padding-top: 2rem;
    word-wrap: break-word;
  }
  .anchor_list-sc .anchor_detail_section .anchor_content {
    padding-bottom: 1rem;
    word-wrap: break-word;
  }
  .logo-list-wrp {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -ms-align-items: center;
    align-items: center;
    justify-content: flex-start;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -o-flex-wrap: wrap;
    flex-wrap: wrap;
  }

  .anchor_list-sc .anchor_title_section ul {
    margin: 0;
    padding:  0;
    /*list-style:  none;*/
    padding-left:  25px;
  }
</style>

 <? 
        $anchor_list = get_sub_field('anchor_list');
        if(!empty($anchor_list)): ?>
        <div class="anchor_list-sc">
          <div class="container">
            <div class="anchor_title_section">
              <ul>          
                <?php
                foreach ($anchor_list as $anchor):?>
                  <li><a href="#<?php echo $anchor['anchor_name']; ?>" ><?php echo $anchor['anchor_title']; ?></a></li>
                <?php
                endforeach; ?>
              </ul>
            </div>
            <div class="anchor_detail_section">
              <?php
              foreach ($anchor_list as $anchor):?>
                <div class="anchor_content" id="<?php echo $anchor['anchor_name']; ?>">
                  <a href="<?php echo $anchor['anchor_link']; ?>" ><?php echo $anchor['anchor_title']; ?></a>
                  <?php echo $anchor['body_text']; ?>
                  <hr>
                </div>
              <?php
              endforeach; ?>
            </div>
          </div>
        </div>
        <?php
        endif; ?>


