<?php
/**
* Mytheme functions and definitions
*/

if(! function_exists('mytheme_setup')):
  /**
   *Sets up theme defaults and registers support for various WordPress features. 
   * Note that this function is hooked into the after_setup_theme hook, which runs before the init hook.
   * The init hook is too late for some features, such as indicating support for post thumbnails.
   */

  function mytheme_setup(){
    /**
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Crafty Press, use a find and replace
     * to change 'mytheme' to the nmae of your theme in all the template files.
     */
    load_theme_textdomain('mytheme', get_template_directory(). '/languages');
    
    //Add default posts and comments RSS feed links to head.
    add_theme_support('automatic_feed_links');

    /**
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a hard-coded <title> tag in the document head, and expect WordPress to provide it for us.
     */
    add_theme_support('title-tag');

    /**
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support('post-thumbnails');

    //Set up the WordPress core custom background features.
    add_theme_support('custom-background', apply_filters('mytheme_custom_background_args',[
      'default-color' => 'ffffff',
      'default-image' => ''
    ]));

    /**
     * Switch default core markup for search form, comment form and comments
     * to output valid HTML5.
     */
    add_theme_support('html5',[
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    ]);

    //Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     */
    add_theme_support('custom-logo',[
      'height' => 250,
      'width' => 250,
      'flex-width' => true,
      'flex-height' => true
    ]);

    //Add support for Custom Page Header
    add_theme_support('custom-header',[
      'flex-width' => true,
      'width' => 1600,
      'flex-height' => true,
      'height' => 450,
      'default-image' => ''
    ]);

    //Add Post Type Support
    add_theme_support('post-formats',['aside','gallery','link','image','quote','video','audio']);

    //This theme uses wp_nav_menu() in one location.
    register_nav_menus([
      'primary' => esc_html__('Primary','mytheme')
    ]);
  }
endif;
add_action('after_setup_theme','mytheme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * 
 * Priority 0 to make it available to these priority callbacks.
 * 
 * @global int $content_width 
 */
function mytheme_content_width(){
  //This variable is intended to be overruled from themes.
  $GLOBALS['content_width'] = apply_filters('mytheme_content_width',1170);
}
add_action('after_setup_theme','mytheme_content_width',0);

/**
 * Register Sidebar widget area
 * 
 * @since 1.0.0
 */
function mytheme_sidebar_widgets_init(){
  //Default sidebar
  register_sidebar( [
    'name' => esc_html__( 'Sidebar', 'mytheme' ),
    'id' => 'default-sidebar',
    'description' => esc_html__( 'Add widgets here.', 'mytheme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ] );
}
add_action('widgets_init','mytheme_sidebar_widgets_init');

/**
 * Enqueue public scripts and styles.
 */
function mytheme_public_scripts() {
  //Styles
  wp_enqueue_style('default', get_template_directory_uri(). '/assets/css/default.css' , [], wp_rand(), 'all');
  wp_enqueue_style('main', get_template_directory_uri(). '/assets/css/main.css' , [], wp_rand(), 'all');

  //Scripts
  wp_enqueue_script('main', get_template_directory_uri(). '/assets/js/main.js' , ['jquery'], wp_rand(), true);
}
add_action('wp_enqueue_scripts','mytheme_public_scripts');

/**
 * Enqueue admin scripts and styles.
 */
function mytheme_admin_scripts(){

}
add_action('admin_enqueue_scripts','mytheme_admin_scripts');