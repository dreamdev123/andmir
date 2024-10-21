<style type="text/css">
  .hero-section {
    padding-top: 6rem;
    padding-bottom: 6rem;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    width: 100%;
    height: 40rem;
    background-color: #548dd4;
  }
  .hero-section.compact-height {
    padding-top: 4rem;
    padding-bottom: 4rem;
    height: unset;
  }
  .hero-section.tall-height {
    height: 36rem;
  }
  .hero-section.full-height {
    height: 100vh;
  }

  .hero-section .container {
    height: 100%;
  }
  .hero-section .container .content {
    height: 100%;
    display: flex;
    align-items: center;
  }

  .hero-section.transparent-on::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.25);
    z-index: 1;
  }
  .hero-section .content {
    position: relative;
    z-index: 2;
  }
  .hero-section .content .title {
    font-size: 64px;
    font-weight: 800;
    color: #fff;
    margin-bottom: 15px;
  }
  @media(max-width: 768px) {
    .hero-section .content .title {
      font-size: 50px;
    }
  }
  @media(max-width: 576px) {
    .hero-section .content .title {
      font-size: 40px;
    }
  }
  .hero-section .content .description {
    font-size: 18px;
    color: #fff;
  }
  .hero-section .content .buttons a {
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-right: 2em;
    color: #fff;
    font-size: 12px;
  }
  .hero-section .content .buttons a span {
    position: relative;
    display: inline-block;
    line-height: 2.285712;
  }
  .hero-section .content .buttons a span:after {
    content: "";
    border-bottom: 1px solid #63b1e5;
    bottom: 0;
    display: block;
    left: 0;
    position: absolute;
    width: 100%;
    transition: all .1s ease;
  }
  .hero-section .content .buttons a:hover span:after {
    width: 12px;
  }

  .hero-section .video-wrp {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    display: flex;
    /*flex-direction: column;*/
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }

  .hero-section .video-wrp video {
    width: 100vw;
    height: calc(100vw * 9 / 16);
  }
  @media (max-width:  1200px) {
    .hero-section .video-wrp video {
      position: absolute;
      top: 0px;
      bottom: 0px;
      height: 42rem;
      width: calc(40rem * 16 / 9 + 60px);
    }
  }

  .hero-section .video-wrp iframe {
    width: 100vw;
    height: calc(100vw * 9 / 16);
  }
  @media (max-width:  1200px) {
    .hero-section .video-wrp iframe {
      position: absolute;
      top: 0px;
      bottom: 0px;
      height: 42rem;
      width: calc(40rem * 16 / 9 + 60px);
    }
  }

</style>

<?php

$background_type = get_sub_field('background_type');
$background_image = get_sub_field('background_image');
$background_video = get_sub_field('background_video');

$title       = get_sub_field('title');
$description = get_sub_field('description');
$buttons     = get_sub_field('buttons'); 

$background_height = get_sub_field('background_height');
$background_width = get_sub_field('background_width');
$background_transparency = get_sub_field('background_transparency');

if ( $background_height == 'Compact' ) {
  $background_height_class = 'compact-height';
} elseif ( $background_height == 'Tall' ) {
  $background_height_class = 'tall-height';
} else {
  $background_height_class = 'full-height';
}

if ( $background_transparency == 'On' ) {
  $background_transparency_class = 'transparent-on';
} elseif ( $background_transparency == 'Off' ) {
  $background_transparency_class = 'transparent-off';
} else {
  $background_transparency_class = 'transparent-only-text';
}

?>

<?php if ( $background_width == 'Full width' ) :?>
  <div class="hero-section <?php echo $background_height_class; ?> <?php echo $background_transparency_class; ?>" style="background-image: url(<?php echo $background_image; ?>);">

    <div class="container">
      <div class="col-md-12 col-lg-10 content">
        <div class="content-wrp">
          <h1 class="title"><?php echo $title; ?></h1>
          <p class="description"><?php echo $description; ?></p>
          <?php if ( !empty($buttons) ): ?>
            <div class="buttons">
              <?php foreach ( $buttons as $button ): ?>
                <a class="hero-link" href="<?php echo $button['link']; ?>"><span><?php echo $button['label']; ?></span></a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>              
      </div>
    </div>

    <?php if ( $background_type == 'Video' ) :?>

      <?php if ( !empty($background_video) ) :?>

        <?php $embed_video_id = getYoutubeEmbedVideoId($background_video); ?>

        <div class="video-wrp"> 
          <iframe src="https://www.youtube.com/embed/<?php echo $embed_video_id; ?>?autoplay=1&autohide=1&cc_load_policy=1&modestbranding=0&fs=0&showinfo=0&rel=0&iv_load_policy=3&mute=1&loop=1&controls=0&playlist=<?php echo $embed_video_id; ?>" title="YouTube video player" frameborder="0" sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation"></iframe>
        </div>

      <?php endif; ?>
    <?php endif; ?>
  </div>
<?php else :?>

  <div class="container">

    <div class="hero-section <?php echo $background_height_class; ?> <?php echo $background_transparency_class; ?>" style="background-image: url(<?php echo $background_image; ?>);">

      <div class="container">
        <div class="col-md-12 col-lg-10 content">
          <div class="content-wrp">
            <h1 class="title"><?php echo $title; ?></h1>
            <p class="description"><?php echo $description; ?></p>
            <?php if ( !empty($buttons) ): ?>
              <div class="buttons">
                <?php foreach ( $buttons as $button ): ?>
                  <a class="hero-link" href="<?php echo $button['link']; ?>"><span><?php echo $button['label']; ?></span></a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>              
        </div>
      </div>

      <?php if ( $background_type == 'Video' ) :?>

        <?php if ( !empty($background_video) ) :?>

          <?php $embed_video_id = getYoutubeEmbedVideoId($background_video); ?>

          <div class="video-wrp"> 
            <iframe src="https://www.youtube.com/embed/<?php echo $embed_video_id; ?>?autoplay=1&autohide=1&cc_load_policy=1&modestbranding=0&fs=0&showinfo=0&rel=0&iv_load_policy=3&mute=1&loop=1&controls=0&playlist=<?php echo $embed_video_id; ?>" title="YouTube video player" frameborder="0" sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation"></iframe>
          </div>

        <?php endif; ?>
      <?php endif; ?>
    </div>

  </div>

<?php endif; ?>
