<?php
/**
 * simpleblogily functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package simpleblogily
 */

if ( ! function_exists( 'simpleblogily_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function simpleblogily_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on simpleblogily, use a find and replace
	 * to change 'simpleblogily' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'simpleblogily', get_template_directory() . '/languages' );

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
	add_image_size( 'simpleblogily-full-thumb', 768, 0, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'simpleblogily' ),
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
	add_theme_support( 'custom-background', apply_filters( 'simpleblogily_custom_background_args', array(
		'default-color' => 'eeeeee',
		'default-image' => '',
	) ) );

}
endif;
add_action( 'after_setup_theme', 'simpleblogily_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function simpleblogily_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'simpleblogily_content_width', 640 );
}
add_action( 'after_setup_theme', 'simpleblogily_content_width', 0 );

/**
 *
 * Add Custom editor styles
 *
 */
function simpleblogily_add_editor_styles() {
    add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'admin_init', 'simpleblogily_add_editor_styles' );

/**
 *
 * Load Google Fonts
 *
 */
function simpleblogily_google_fonts_url(){

    $fonts_url  = '';
    $Lato = _x( 'on', 'Lato font: on or off', 'simpleblogily' );
    $Montserrat      = _x( 'on', 'Montserrat font: on or off', 'simpleblogily' );
 
    if ( 'off' !== $Lato || 'off' !== $Montserrat ){

        $font_families = array();
 
        if ( 'off' !== $Lato ) {

            $font_families[] = 'Lato:300,400,400i,700';

        }
 
        if ( 'off' !== $Montserrat ) {

            $font_families[] = 'Montserrat:400,400i,500,600,700';

        }
        
 
        $query_args = array(

            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

    }
 
    return esc_url_raw( $fonts_url );
}

function simpleblogily_enqueue_googlefonts() {

    wp_enqueue_style( 'simpleblogily-googlefonts', simpleblogily_google_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'simpleblogily_enqueue_googlefonts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function simpleblogily_widgets_init() {

	register_sidebar( array(
		'name' => esc_html__('Footer Widget One', 'simpleblogily'),
		'id' => 'footer_widget_left',
		'before_widget' => '<div class="footer-widgets">',
		'description'   => esc_html__( 'Widgets here will appear in the footer', 'simpleblogily' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

		register_sidebar( array(
		'name' => esc_html__('Footer Widget Two', 'simpleblogily'),
		'id' => 'footer_widget_middle',
		'description'   => esc_html__( 'Widgets here will appear in the footer', 'simpleblogily' ),
		'before_widget' => '<div class="footer-widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

		register_sidebar( array(
		'name' => esc_html__('Footer Widget Three', 'simpleblogily'),
		'id' => 'footer_widget_right',
		'before_widget' => '<div class="footer-widgets">',
		'after_widget' => '</div>',
		'description'   => esc_html__( 'Widgets here will appear in the footer', 'simpleblogily' ),
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );


}
add_action( 'widgets_init', 'simpleblogily_widgets_init' );

/**
 * Filter the except length to 75 words.
*
 * REMOVE THIS PART TO STOP AUTO EXCERPT LENGTH
 *
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function simpleblogily_custom_excerpt_length( $length ) {
    return 75;
}
add_filter( 'excerpt_length', 'simpleblogily_custom_excerpt_length', 999 );


/**
 * Enqueue scripts and styles.
 */
function simpleblogily_scripts() {
	wp_enqueue_style( 'simpleblogily-style', get_stylesheet_uri() );
	wp_enqueue_style( 'simpleblogily-font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css');

	wp_enqueue_script( 'simpleblogily-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'simpleblogily-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'simpleblogily-script', get_template_directory_uri() . '/js/simpleblogily.js', array('jquery'), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'simpleblogily_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/**
 * Copyright and License for Upsell button by Justin Tadlock - 2016 © Justin Tadlock. customizer button https://github.com/justintadlock/trt-customizer-pro
 */
require_once( trailingslashit( get_template_directory() ) . 'justinadlock-customizer-button/class-customize.php' );







// Theme page start

add_action('admin_menu', 'simpleblogily_themepage');
function simpleblogily_themepage()
{
  $option = get_option('simpleblogily_themepage_seen');
  $awaiting = !$option ? ' <span class="awaiting-mod">1</span>' : '';
  $theme_info = add_theme_page(__('Theme Settings', 'simpleblogily'), __('Theme Settings', 'simpleblogily').$awaiting, 'manage_options', 'simpleblogily-info.php', 'simpleblogily_info_page', 1);
}
function simpleblogily_info_page()
{
  $user = wp_get_current_user();
  $theme = wp_get_theme();
  $parent_name = is_child_theme() ? wp_get_theme($theme->Template) : '';
  $theme_name = is_child_theme() ? $theme." ".__("and", "simpleblogily")." ".$parent_name : $theme;
  $demo_text = is_child_theme() ? sprintf(__("Need inspiration? Take a moment to view our theme demo for the %s parent theme %s!", "simpleblogily"), $theme, $parent_name) : __("Need inspiration? Take a moment to view our theme demo!", "simpleblogily");
  $premium_text = is_child_theme() ? sprintf(__("Unlock all features by upgrading to the premium edition of %s and its parent theme %s.", "simpleblogily"), $theme, $parent_name) : sprintf(__("Unlock all features by upgrading to the premium edition of %s.", "simpleblogily"),$theme);
  $option_name = 'simpleblogily_themepage_seen';
  $option = get_option($option_name, null);
  if (is_null($option)) {
    add_option($option_name, true);
  } elseif (!$option) {
    update_option($option_name, true);
  } ?>
  <div class="wrap">

    <div class="spt-theme-settings-wrapper">
      <div class="spt-theme-settings-wrapper-main-content">
        <div class="spt-theme-settings-tabs">

         <div class="spt-theme-settings-tab">
           <input type="radio" id="tab-1" name="tab-group-1">



           <label class="spt-theme-settings-label" for="tab-1"><?php esc_html_e("Get started with", "simpleblogily"); ?> <?php echo esc_html($theme_name); ?></label>

           <div class="spt-theme-settings-content">

            <div class="spt-theme-settings-content-getting-started-wrapper">
              <div class="spt-theme-settings-content-item">
                <div class="spt-theme-settings-content-item-header">
                  <?php esc_html_e("Add Menus", "simpleblogily"); ?>
                </div>
                <div class="spt-theme-settings-content-item-content">
                 <a href="<?php echo esc_url(admin_url('nav-menus.php'))  ?>"><?php esc_html_e("Go to Menus", "simpleblogily"); ?></a>
               </div>
             </div>

             <div class="spt-theme-settings-content-item">
              <div class="spt-theme-settings-content-item-header">
               <?php esc_html_e("Add Widgets", "simpleblogily"); ?>
             </div>
             <div class="spt-theme-settings-content-item-content">
              <a href="<?php echo esc_url(admin_url('widgets.php'))  ?>"><?php esc_html_e("Go to Widgets", "simpleblogily"); ?></a>
            </div>
          </div>


        <div class="spt-theme-settings-content-item">
          <div class="spt-theme-settings-content-item-header">
           <?php esc_html_e("Upload Logo", "simpleblogily"); ?>
         </div>
         <div class="spt-theme-settings-content-item-content">
          <a href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></a>
        </div>
      </div>

      <div class="spt-theme-settings-content-item">
        <div class="spt-theme-settings-content-item-header">
         <?php esc_html_e("Change Background Color / Image", "simpleblogily"); ?>
       </div>
       <div class="spt-theme-settings-content-item-content">
        <a href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></a>
      </div>
    </div>


    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Customize All Fonts", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Customize All Colors", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Import Demo Content", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Demo Import", "simpleblogily"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Contact Premium Support", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Unlock Full SEO Optimization", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Unlock Elementor Compatibility", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Install Elementor", "simpleblogily"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Access All Child Themes", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("View Child Themes", "simpleblogily"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Add Recent Posts Widget", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Widgets", "simpleblogily"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Custom Copyright Text", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Remove 'Tag' from tag page title", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Remove 'Author' from author page title", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/simpleblogily/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Remove 'Category' from author page title", "simpleblogily"); ?></span> <span><?php esc_html_e("Premium", "simpleblogily"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "simpleblogily"); ?></span>
      </div>
    </a>

  </div>
</div> 
</div>


</div>      
</div>

<div class="spt-theme-settings-wrapper-sidebar">

  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Additional Resources", "simpleblogily"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <ul>
        <li>
          <a target="_blank" href="https://wordpress.org/support/forums/"><span class="dashicons dashicons-wordpress"></span><?php esc_html_e("WordPress.org Support Forum", "simpleblogily"); ?></a>
        </li>
        <li>
          <a target="_blank" href="https://www.facebook.com/superbthemescom/"><span class="dashicons dashicons-facebook-alt"></span><?php esc_html_e("Find us on Facebook", "simpleblogily"); ?></a>
        </li>
        <li>
          <a target="_blank" href="https://twitter.com/superbthemescom"><span class="dashicons dashicons-twitter"></span><?php esc_html_e("Find us on Twitter", "simpleblogily"); ?></a>
        </li>
        <li>
          <a target="_blank" href="https://www.instagram.com/superbthemes/"><span class="dashicons dashicons-instagram"></span><?php esc_html_e("Find us on Instagram", "simpleblogily"); ?></a>
        </li>

      </ul>
    </div>
  </div>


  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("View Demo", "simpleblogily"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <p><?php echo esc_html($demo_text); ?></p>
      <a href="https://superbthemes.com/demo/simpleblogily/" target="_blank" class="button button-primary"><?php esc_html_e("View Demo", "simpleblogily"); ?></a>
    </div>
  </div>

  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Upgrade to Premium", "simpleblogily"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <p><?php echo esc_html($premium_text); ?></p>
      <a href="https://superbthemes.com/simpleblogily/" target="_blank" class="button button-primary"><?php esc_html_e("View Premium Version", "simpleblogily"); ?></a>
    </div>
  </div>

  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Helpdesk", "simpleblogily"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <p><?php esc_html_e("If you have issues with", "simpleblogily"); ?> <?php echo esc_html($theme); ?> <?php esc_html_e("then send us an email through our website!", "simpleblogily"); ?></p>
      <a href="https://superbthemes.com/customer-support/" target="_blank" class="button"><?php esc_html_e("Contact Support", "simpleblogily"); ?></a>
    </div>
  </div>

  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Review the Theme", "simpleblogily"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <p><?php esc_html_e("Do you enjoy using", "simpleblogily"); ?> <?php echo esc_html($theme); ?><?php esc_html_e("? Support us by reviewing us on WordPress.org!", "simpleblogily"); ?></p>
      <a href="https://wordpress.org/support/theme/<?php echo esc_attr(get_stylesheet()); ?>/reviews/#new-post" target="_blank" class="button"><?php esc_html_e("Leave a Review", "simpleblogily"); ?></a>
    </div>
  </div>



</div>

</div>
</div>


<?php
}

function simpleblogily_comparepage_css($hook) {
  if ('appearance_page_simpleblogily-info' != $hook) {
    return;
  }
  wp_enqueue_style('simpleblogily-custom-style', get_template_directory_uri() . '/css/compare.css');
}
add_action('admin_enqueue_scripts', 'simpleblogily_comparepage_css');

// Theme page end



/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Simpleblogily for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/tgm/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/tgm/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/tgm/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'simpleblogily_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function simpleblogily_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

			array(
			'name'      => 'Superb Helper',
			'slug'      => 'superb-helper',
			'required'  => false,
		),


	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'simpleblogily',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	
	);

	tgmpa( $plugins, $config );
}



add_action('admin_init', 'simpleblogily_spbThemesNotification', 8);

function simpleblogily_spbThemesNotification(){
	$notifications = include('inc/admin_notification/Autoload.php');
	$notifications->Add("simpleblogily_notification", "Unlock All Features with Simple Blogily Premium – Limited Time Offer", "
		
		Take advantage of the up to <span style='font-weight:bold;'>40% discount</span> and unlock all features with Simple Blogily Premium. 
		The discount is only available for a limited time.

		<div>
		<a style='margin-bottom:15px;' class='button button-large button-secondary' target='_blank' href='https://superbthemes.com/simpleblogily/'>Read More</a> <a style='margin-bottom:15px;' class='button button-large button-primary' target='_blank' href='https://superbthemes.com/simpleblogily/'>Upgrade Now</a>
		</div>

		", "info");
	


  $options_notification_start = array("delay"=> "-1 seconds", "wpautop" => false);
  $notifications->Add("simpleblogily_notification_start", "Let's get you started with Simple Blogily!", '
    <span class="st-notification-wrapper">
    <span class="st-notification-column-wrapper">
      <span class="st-notification-column">
        <img src="'. esc_url( get_template_directory_uri() . '/inc/admin_notification/src/preview.png' ).'" width="150" height="177" />
      </span>

      <span class="st-notification-column">
        <h2>Why Simple Blogily</h2>
        <ul class="st-notification-column-list">
        <li>Easy to Use & Customize</li>
        <li>Search Engine Optimized</li>
        <li>Lightweight and Fast</li>
        <li>Top-notch Customer Support</li>
        </ul>
        <a href="https://superbthemes.com/demo/simpleblogily/" target="_blank" class="button">View Simple Blogily Demo <span aria-hidden="true" class="dashicons dashicons-external"></span></a> 

      </span>
        <span class="st-notification-column">
        <h2>Customize Simple Blogily</h2>
        <ul>
          <li><a href="'. esc_url( admin_url( 'customize.php' ) ) .'" class="button button-primary">Customize The Design</a></li>
          <li><a href="'. esc_url( admin_url( 'widgets.php' ) ) .'" class="button button-primary">Add/Edit Widgets</a></li>
          <li><a href="https://superbthemes.com/customer-support/" target="_blank" class="button">Contact Support <span aria-hidden="true" class="dashicons dashicons-external"></span></a> </li>
        </ul>
      </span>
      </span>
      <span class="st-notification-footer">
        Simple Blogily is created by SuperbThemes. We have 100.000+ users and are rated <strong>Excellent</strong> on Trustpilot <img src="'. esc_url( get_template_directory_uri() . '/inc/admin_notification/src/stars.svg' ).'" width="87" height="16" />
      </span>
    </span>

<style>.st-notification-column-wrapper{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;border-top:1px solid #eee;padding-top:20px;margin-top:3px}.st-notification-column-wrapper h2{margin:0}.st-notification-footer img{margin-bottom:-3px;margin-left:10px}.st-notification-column-wrapper .button{min-width:180px;text-align:center;margin-top:10px}.st-notification-column{margin-right:10px;padding:0 10px;max-width:250px;width:100%}.st-notification-column img{border:1px solid #eee}.st-notification-footer{display:inline-block;width:100%;padding:15px 0;border-top:1px solid #eee;margin-top:10px}.st-notification-column:first-of-type{padding-left:0;max-width:160px}.st-notification-column-list li{list-style-type:circle;margin-left:15px;font-size:14px}@media only screen and (max-width:1000px){.st-notification-column{max-width:33%}}@media only screen and (max-width:800px){.st-notification-column{max-width:50%}.st-notification-column:first-of-type{display:none}}@media only screen and (max-width:600px){.st-notification-column-wrapper{display:block}.st-notification-column{width:100%;max-width:100%;display:inline-block;padding:0;margin:0}span.st-notification-column:last-of-type{margin-top:30px}}</style>

    ', "info", $options_notification_start);
  $notifications->Boot();
}

