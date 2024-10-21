<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cseven
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

  <header id="masthead" class="site-header">

    <div class="container">

      <div class="header-wrp">

        <div class="site-branding">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_field('logo_dark', 'options');?>" class="logo">
          </a>
        </div>

        <div class="main-menu-wrp">

          <div class="menu-wrp">

            <?php
              wp_nav_menu( array(
                'theme_location' => 'menu-1',
              ) );
            ?>
            
          </div>

          <div class="social-links">

            <a href="<?php echo get_field('linkedin_link', 'options'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Icon-LinkedIn.svg"></a>

            <a href="mailto:<?php echo get_field('contact_email', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Icon-Mail.svg"></a>
            
          </div>
          
        </div>

      </div>

    </div>

    <div class="hamburger-menu">
      <img class="hamburger-btn" src="<?php echo get_template_directory_uri(); ?>/images/hamburger.svg">
      <img class="close-btn" src="<?php echo get_template_directory_uri(); ?>/images/close.svg">
    </div>

    <div class="mobile-menu">

      <div class="menu-wrp">

        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
          ) );
        ?>
        
      </div>

      <div class="social-links">

        <a href="<?php echo get_field('linkedin_link', 'options'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-blue.svg"></a>

        <a href="mailto:<?php echo get_field('contact_email', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/email-blue.svg"></a>
        
      </div>

    </div>

  </header><!-- #masthead -->

  <div id="content" class="site-content">
