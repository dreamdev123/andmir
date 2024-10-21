<?php
/**
 * cseven functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cseven
 */

if ( ! function_exists( 'cseven_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cseven_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cseven, use a find and replace
		 * to change 'cseven' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cseven', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1'      => esc_html__( 'Primary', 'cseven' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'cseven' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cseven_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cseven_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cseven_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cseven_content_width', 640 );
}
add_action( 'after_setup_theme', 'cseven_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cseven_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cseven' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cseven' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cseven_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cseven_scripts() {
	wp_enqueue_style( 'cseven-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cseven-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cseven-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'cseven-slickslider-main', get_stylesheet_directory_uri() . '/lib/slick/slick.css' );
 	wp_enqueue_style( 'cseven-slickslider-theme', get_stylesheet_directory_uri() . '/lib/slick/slick-theme.css' );
	wp_enqueue_style( 'cseven-bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap/bootstrap.css', array(), false );	
	wp_enqueue_script( 'cseven-font-awesome-5',  'https://use.fontawesome.com/releases/v5.3.1/js/all.js', array(), '2018928', true );	
	wp_enqueue_style( 'cseven-meanmenu-style', get_stylesheet_directory_uri() . '/css/meanmenu.min.css', array(), false );
	wp_enqueue_style( 'cseven-global-style', get_stylesheet_directory_uri() . '/css/global-style.css', array(), date("dmdYGi") );
	wp_enqueue_style( 'cseven-main-style', get_stylesheet_directory_uri() . '/css/main.css', array(), date("dmdYGi") );

	wp_enqueue_script( 'cseven-slickslider', get_template_directory_uri() . '/lib/slick/slick.min.js', array('jquery'));	
	wp_enqueue_script( 'cseven-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'cseven-fancybox-js', get_stylesheet_directory_uri() . '/lib/fancybox/jquery.fancybox.pack.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_style( 'cseven-fancybox-css', get_stylesheet_directory_uri() . '/lib/fancybox/jquery.fancybox.css', array(), false );
	wp_enqueue_script( 'cseven-lightbox-js', get_stylesheet_directory_uri() . '/lib/html5lightbox/html5lightbox.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'cseven-doughnutchart', get_template_directory_uri() . '/js/doughnutchart.js', array('jquery'));
	wp_enqueue_script( 'cseven-meanmenu-js', get_template_directory_uri() . '/js/jquery.meanmenu.min.js', array('jquery'));
	wp_enqueue_script( 'cseven-main-script', get_template_directory_uri() . '/js/main.js', array('jquery', 'cseven-slickslider', 'cseven-font-awesome-5', 'cseven-fancybox-js', 'cseven-doughnutchart')); 
}
add_action( 'wp_enqueue_scripts', 'cseven_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add Options page for global options
 */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();	
}


/**
 * Creating shortcode for CTA
 */
function cta_function($attr) {
	$args = shortcode_atts( array(
		'id' => 'auto',
		'style' => 'square',
		'background-color' => '#2E82FC'
	), $attr );

	$id = $args['id'];
	$style = $args['style'];
	$bg_color = $args['background-color'];

	if ( getContrastColor($bg_color) == '#FFFFFF' ) {
		$bg_class = 'bg_black';
	} else {
		$bg_class = 'bg_white';
	}

	if ( $id == 'auto' ) {

		$arg = array(
			'post_type' => 'cta',
			'post_status' => 'publish',
			'posts_per_page' => 1,
			'orderby' => 'rand',
		);

	} else {
		$arg = array(
			'post_type' => 'cta',
			'post_status' => 'publish',
			'post__in' => array($id),
		);
	}


	$query = new WP_Query($arg);

	ob_start();

	if ( $query->have_posts() ) :

		while( $query->have_posts() ): $query->the_post(); ?>

			<?php 

				$transparency = get_field('transparency');
				if( $transparency ) {
					$transparency_class = "transparency-bg";
				} else {
					$transparency_class = "";
				}

				$image = get_field('image');

			?>

			<?php if ( !empty( $image ) ) :?>

				<div class="cta <?php echo $style; ?> <?php echo $bg_class; ?> <?php echo $transparency_class; ?>" style="background-image: url(<?php echo $image; ?>);">

			<?php else: ?>

				<div class="cta <?php echo $style; ?> <?php echo $bg_class; ?> <?php echo $transparency_class; ?>" style="background-color: <?php echo $bg_color; ?>;">

			<?php endif; ?>

				<div class="content-wrp">
				
					<?php if ( !empty(get_field('title_text')) ) :?>
						<div class="title-part">
							<h2><?php echo get_field('title_text'); ?></h2>
						</div>
					<?php endif; ?>

					<?php if ( !empty(get_field('body_text')) ) :?>
						<div class="body-part">
							<?php echo get_field('body_text'); ?>
						</div>
					<?php endif; ?>

					<?php if ( !empty(get_field('button_text')) ) :?>
						<div class="btn-wrp">
							<a href="<?php echo get_field('button_link'); ?>"><?php echo get_field('button_text'); ?></a>
						</div>
					<?php endif; ?>

				</div>

			</div>

		<?php endwhile;

	endif;

	wp_reset_query();

	$results = ob_get_contents();

	ob_end_clean();

	return $results;

}

add_shortcode( 'cta', 'cta_function' );


// Get Contrast Color
function getContrastColor($hexColor) {
  // hexColor RGB
  $R1 = hexdec(substr($hexColor, 1, 2));
  $G1 = hexdec(substr($hexColor, 3, 2));
  $B1 = hexdec(substr($hexColor, 5, 2));

  // Black RGB
  $blackColor = "#000000";
  $R2BlackColor = hexdec(substr($blackColor, 1, 2));
  $G2BlackColor = hexdec(substr($blackColor, 3, 2));
  $B2BlackColor = hexdec(substr($blackColor, 5, 2));

   // Calc contrast ratio
   $L1 = 0.2126 * pow($R1 / 255, 2.2) +
         0.7152 * pow($G1 / 255, 2.2) +
         0.0722 * pow($B1 / 255, 2.2);

  $L2 = 0.2126 * pow($R2BlackColor / 255, 2.2) +
        0.7152 * pow($G2BlackColor / 255, 2.2) +
        0.0722 * pow($B2BlackColor / 255, 2.2);

  $contrastRatio = 0;
  if ($L1 > $L2) {
      $contrastRatio = (int)(($L1 + 0.05) / ($L2 + 0.05));
  } else {
      $contrastRatio = (int)(($L2 + 0.05) / ($L1 + 0.05));
  }

  // If contrast is more than 5, return black color
  if ($contrastRatio > 5) {
      return '#333333';
  } else { 
      // if not, return white color.
      return '#FFFFFF';
  }
}

// get youtube embed Id from url
function getYoutubeEmbedVideoId($url)
{
  $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
  $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

  if (preg_match($longUrlRegex, $url, $matches)) {
      $youtube_id = $matches[count($matches) - 1];
  }

  if (preg_match($shortUrlRegex, $url, $matches)) {
      $youtube_id = $matches[count($matches) - 1];
  }
  return $youtube_id ;
}

add_action('add_meta_boxes', 'c7_default_page_template', 1);

function c7_default_page_template() {
  global $post;
  if ( 'page' == $post->post_type && 0 != count( get_page_templates( $post ) ) && get_option( 'page_for_posts' ) != $post->ID ) {
    $post->page_template = "templates/template-default-page.php";
  }
}
