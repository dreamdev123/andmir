<style> 
	/* Team section */
  .team-section {
    /*padding-top: 2rem;*/
    padding-bottom: 2rem;
  }
  .team-section .title h3 {
    padding-bottom: 30px;
    text-align: center;
    margin: 0;
  }

  .team-section .each {
    padding-bottom: 30px;
  } 
  .team-section .each .inner-col .img-wrapper {
    width: 100%;
    max-width: 300px;
    margin-left: auto;
    margin-right: auto;
  }
  .team-section .each .inner-col .img-wrp {
    display: block;
    width: 100%;
    height: 0;
    padding-bottom: 100%;
    position: relative;
    /*border-radius: 50%;*/
    border-color: #b196c6;
    border-width: 4px;
    border-style: solid;
    transition: all 0.5s ease;
  }
  .team-section .each .inner-col .img-wrp:hover {
    transform: scale(1.03);
    cursor: pointer;
  }
  .team-section .each .inner-col .img-wrp  img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    /*border-radius: 50%;*/
    filter: grayscale(100%);
    transition: all 0.5s ease;
  }
  .team-section .each .inner-col .img-wrp  img:hover {
    filter: grayscale(0%);              
  }


  @media (max-width: 576px) {
    .team-section .each .inner-col .img-wrp {
      width: 240px;
      padding-bottom: 240px;
      margin-left: auto;
      margin-right: auto;
    }
  }

  .team-section .each .inner-col .detail {
    padding-left: 15px;
  }
  .team-section .each .inner-col .name {
    padding-top: 15px;
    font-size: 22px;
    font-weight: bold;
  }
  .team-section .each .inner-col .organization {
    padding-top: 15px;
    font-size: 16px;
    font-weight: bold;
  }
  .team-section .each .inner-col .social-links {
    padding-top: 15px;
  }
  .team-section .each .inner-col .social-links a {
    font-size: 24px;
    color: #000;
    padding-right: 5px;
  }
  .team-section .each .inner-col .description {
    display: none;
  }
  .team-section .each .inner-col .phone-number {
    padding-top: 10px;
  }
  .team-section .each .inner-col .phone-number a {
    font-size: 24px;
    color: #000;
    text-decoration: none;
    display: flex;
    align-items: center;
  }
  .team-section .each .inner-col .phone-number a:hover {
    text-decoration: none;
  }
  .team-section .each .inner-col .phone-number a span {
    font-size: 16px;
    padding-left: 10px;
  }

  .team-section .modal .modal-dialog {
    display: flex;
  }
  .team-section .modal:before {
    display: none;
  }
  .team-section .modal .modal-header {
    border: none;
  }
  .team-section .modal .modal-body {
    padding: 10px 30px 30px 30px;
  }
  .team-section .modal .modal-content {
    border-radius: 20px;
    border: none;
    background-color: lightgray;
    color: #000 !important;
  }
  .team-section .modal .modal-close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    width: 24px;
    height: 24px;
    border: none;
    background: none;
    z-index: 1000;
  }
  .team-section .modal .modal-close:hover {
    cursor: pointer;
  }
  .team-section .modal .modal-close:before
  {
    content: '';
    position: absolute;
    height: 1px;
    width: 24px;
    top: 10px;
    left: 0;
    background: #000;
    transform: rotate(45deg);
  }
  .team-section .modal .modal-close:after
  {
    content: '';
    position: absolute;
    height: 1px;
    width: 24px;
    top: 10px;
    left: 0;
    background: #000;
    transform: rotate(-45deg);
  }
  .team-section .modal .modal-close:focus {
    outline: none;
    border: none;
  }

  .team-section .modal .name {
    padding-top: 15px;
    font-size: 18px;
    font-weight: bold;
  }
  .team-section .modal .organization {
    padding-top: 15px;
    font-size: 18px;
    font-weight: bold;
  }
  .team-section .modal .social-links {
    padding-top: 15px;
  }
  .team-section .modal .social-links a {
    font-size: 24px;
    color: #fff;
    padding-right: 5px;
  }
  .team-section .modal .description {
    display: block;
  }

  @media (max-width: 992px) {
    .team-section .modal {
      text-align: left !important;
    }
  }
  @media (max-width: 992px) {
    .team-section .modal .modal-dialog {
      margin-left: auto;
      margin-right: auto;
    }
  }

  .modal-backdrop {
    background-color: unset;
  }
  .team-section .modal form label {
    font-size: 12px;
    margin: 0 !important;
    padding: 0 !important;
  }
  .team-section .modal form li {
    margin: 0 !important;
    padding: 0 !important;
  }
  .team-section .modal form .gform_footer {
    padding: 0 !important;
    text-align: center;
  }
  .team-section .modal form .gform_footer .button {
    background-color: #333;
    color: #fff;
  }
  .team-section .modal form #field_11_5 > label, .team-section .modal form #field_11_6 > label {
    display: none;
  }
  .team-section .modal form #field_11_2 {
    width: 50%;
  }
  .team-section .modal form #field_11_2 input {
    width: calc(100% - 8px);
  }
  .team-section .modal form #field_11_3 {
    width: 50%;
    float: right;
    margin-top: -68px !important;
    padding-left: 8px !important;
  }
  .team-section .modal form #field_11_3 input {
    width: 100%;
  }

  .team-section .each.card-view .inner-col {
    display: flex;
    text-align: left;
    padding: 30px;
    background-color: #f1f1f1; }
    .team-section .each.card-view .inner-col .img-wrapper {
      flex-shrink: 0;
      margin-right: 30px;
      width: 300px;
      margin-left: unset; }
    .team-section .each.card-view .inner-col .detail .name {
      padding-top: 0; }
    .team-section .each.card-view .inner-col .detail .description {
      display: block;
      padding-top: 15px; }
    .team-section .each.card-view .inner-col .detail .social-links {
      padding-top: 0; }
    .team-section .each.card-view .inner-col.right-image-col .img-wrapper {
      display: none; }
      .team-section .each.card-view .inner-col.right-image-col .img-wrapper.right-image {
        display: block;
        margin-left: 30px;
        margin-right: 0; }
</style>

<?php 

$team_member = get_sub_field('team_member');
$columns = get_sub_field('#_of_columns');
$overlay = get_sub_field('overlay');
$display_image = get_sub_field('display_image');

$border_radius = '0px';
if ( $overlay == 'Circles' ) {
  $border_radius = '50%';
} else {
  $border_radius = '0px';
}

if (!empty($team_member)) :?>

  <div class="team-section">
    <div class="container">
     
      <div class="row">
        
        <?php
        $index = 0;
        foreach ($team_member as $each) :
          $color = "#cccccc";
          if (fmod($index, 4) == 0) {
            $color = "#cccccc";
          } elseif (fmod($index, 4) == 1) {
            $color = "#cccccc";
          } elseif (fmod($index, 4) == 2) {
            $color = "#cccccc";
          } elseif (fmod($index, 4) == 3) {
            $color = "#cccccc";
          } else {
            $color = "#cccccc";
          }
          ?>

          <?php if ( $columns == '1 - Card Layout' ) :?>
            <div class="col-md-12 each card-view">
          <?php elseif ( $columns == '2' ) :?>
            <div class="col-md-6 each">
          <?php elseif ( $columns == '3' ) :?>
            <div class="col-md-4 each">
          <?php elseif ( $columns == '4' ) :?>
            <div class="col-md-3 each">
          <?php endif; ?>
            <?php if ( $display_image == 'Right' ) :?>
              <div class="inner-col right-image-col">
            <?php else :?>
              <div class="inner-col">
            <?php endif; ?>
              <div class="img-wrapper">
                <?php if ( $overlay == '4 X 6' ) :?>
                  <div class="img-wrp" style="border-color: <?php echo $color; ?>; border-radius: 0; padding-bottom: 75%;">
                <?php else :?>
                  <div class="img-wrp" style="border-color: <?php echo $color; ?>; border-radius: <?php echo $border_radius; ?>;">
                <?php endif; ?>
                  <?php
                  if (!empty($each['team_member_image'])): ?>
                    <img src="<?php echo $each['team_member_image']; ?>" class="team-member-photo" style="border-radius: <?php echo $border_radius; ?>;">
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nophoto.jpg" class="team-member-photo" style="border-radius: <?php echo $border_radius; ?>;">
                  <?php endif; ?>
                </div>
              </div>
              <div class="detail">
                <div class="name">
                  <?php echo $each['team_member_name']; ?>
                </div>
            
                <div class="position">
                  <?php echo $each['team_member_position']; ?>
                </div>
                <div class="organization">
                  <?php echo $each['team_member_organization']; ?>
                </div>
                <div class="organization-title">
                  <?php echo $each['team_member_organization_title']; ?>
                </div>
                <div class="description">
                  <?php echo $each['team_member_description']; ?>
                </div>
                <div class="social-links">
                  <?php
                  if (!empty($each['team_member_linkedin'])): ?>
                    <a href="<?php echo $each['team_member_linkedin']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                  <?php
                  endif; ?>
                  <?php
                  if (!empty($each['team_member_email'])): ?>
                    <input type="hidden" class="team-member-email-value" value="<?php echo $each['team_member_email']; ?>">
                    <a class="team-member-email" href="javascript:;"><i class="fas fa-envelope-square"></i></i></a>
                  <?php
                  endif; ?>
                  <?php
                  if (!empty($each['team_member_phone_number'])): ?>
                    <input type="hidden" class="team-member-phone-number-value" value="<?php echo $each['team_member_phone_number']; ?>">
                    <a class="team-member-email" title="<?php echo $each['team_member_phone_number']; ?>" href="javascript:;" >
                        <i class="fas fa-phone-square"></i></a>
                  <?php
                  endif; ?>
                </div>
              </div>

              <?php if ( $display_image == 'Right' ) :?>

                <div class="img-wrapper right-image">
                  <?php if ( $overlay == '4 X 6' ) :?>
                    <div class="img-wrp" style="border-color: <?php echo $color; ?>; border-radius: 0; padding-bottom: 75%;">
                  <?php else :?>
                    <div class="img-wrp" style="border-color: <?php echo $color; ?>; border-radius: <?php echo $border_radius; ?>;">
                  <?php endif; ?>
                    <?php
                    if (!empty($each['team_member_image'])): ?>
                      <img src="<?php echo $each['team_member_image']; ?>" class="team-member-photo" style="border-radius: <?php echo $border_radius; ?>;">
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/nophoto.jpg" class="team-member-photo" style="border-radius: <?php echo $border_radius; ?>;">
                    <?php endif; ?>
                  </div>
                </div>

              <?php endif; ?>

            </div>
          </div>
          <?php 
          $index ++;
        endforeach; ?>

      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade team-member-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button class="modal-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade team-member-modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button class="modal-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="description"></div>
            <div class="phone-number"></div>
            <div class="contact-form">
              <?php echo do_shortcode('[gravityform id="11" title="false" description="false" ajax="true"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> 
<?php
endif; ?>
