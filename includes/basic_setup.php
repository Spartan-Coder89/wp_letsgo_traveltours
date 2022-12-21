<?php

define('ASSETS_DIR', get_template_directory_uri() .'/assets');
define('ADMIN_ASSETS_DIR', get_template_directory_uri() .'/admin_assets');
define('ADMIN_CSS_DIR', ADMIN_ASSETS_DIR .'/css');
define('ADMIN_JS_DIR', ADMIN_ASSETS_DIR .'/js');
define('CSS_DIR', ASSETS_DIR .'/css');
define('IMAGES_DIR', ASSETS_DIR .'/images');
define('JS_DIR', ASSETS_DIR .'/js');
define('VIDEO_DIR', ASSETS_DIR .'/video');
define('VENDOR_DIR', ASSETS_DIR .'/vendor');

/**
 * 1. Theme Support
 * 2. Create menus
 */
add_action('init', function() {

  //  1.
  add_theme_support('menus');
  add_theme_support('post-thumbnails');

  //  2.
  if (empty(wp_get_nav_menu_object('Main Navigation'))) {

    $menu_id = wp_create_nav_menu('Main Navigation');

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title'   =>  __('Home', 'textdomain'),
      'menu-item-classes' => 'home',
      'menu-item-url'     => site_url('/'), 
      'menu-item-status'  => 'publish'
    ));

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title'   =>  __('Destinations', 'textdomain'),
      'menu-item-classes' => 'destinations',
      'menu-item-url'     => site_url('/destinations/'), 
      'menu-item-status'  => 'publish'
    ));

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title'   =>  __('Contact Us', 'textdomain'),
      'menu-item-classes' => 'contact_us',
      'menu-item-url'     => site_url('/contact-us/'), 
      'menu-item-status'  => 'publish'
    ));

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title'   =>  __('About Us', 'textdomain'),
      'menu-item-classes' => 'about_us',
      'menu-item-url'     => site_url('/about-us/'), 
      'menu-item-status'  => 'publish'
    ));

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title'   =>  __('Blog', 'textdomain'),
      'menu-item-classes' => 'blog',
      'menu-item-url'     => site_url('/blog/'), 
      'menu-item-status'  => 'publish'
    ));
  }
});

/**
 * Enqueue styles and scripts
 */
add_action('wp_enqueue_scripts', function() {

  wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Yeseva+One&display=swap');
  wp_enqueue_style( 'normalize_css', CSS_DIR .'/normalize.css');
  wp_enqueue_style( 'common_css', CSS_DIR .'/common.css');
  wp_enqueue_script( 'common_js', JS_DIR .'/common.js', null, 0.1, true );

  if (is_page('home')) {
    wp_enqueue_style( 'slick_css', VENDOR_DIR .'/slick/slick.css');
    wp_enqueue_style( 'slick_css', VENDOR_DIR .'/slick/slick-theme.css');
    wp_enqueue_style( 'home_css', CSS_DIR .'/home.css');

    wp_enqueue_script( 'jquery_js', JS_DIR .'/jquery.js', null, 0.1, true );
    wp_enqueue_script( 'slick_js', VENDOR_DIR .'/slick/slick.min.js', null, 0.1, true );
    wp_enqueue_script( 'home_js', JS_DIR .'/home.js', null, 0.1, true );
  }

  if (is_page('contact-us')) {
    wp_enqueue_style( 'contact_us_css', CSS_DIR .'/contact_us.css');
  }

  if (is_page('about-us')) {
    wp_enqueue_style( 'about_css', CSS_DIR .'/about_us.css');
  }

  if (is_post_type_archive('destinations')) {
    wp_enqueue_style( 'destinations_css', CSS_DIR .'/destinations.css');
  }

  if (is_post_type_archive('post')) {
    wp_enqueue_style( 'blog_css', CSS_DIR .'/blog.css');
  }

  if (is_singular('destinations')) {
    wp_enqueue_style( 'single_destination_css', CSS_DIR .'/single_destination.css');
    wp_enqueue_script( 'destinations_js', JS_DIR .'/single_destinations.js', null, 0.1, true );
  }

  if (is_singular('post')) {
    wp_enqueue_style( 'single_post_css', CSS_DIR .'/single_post.css');
  }
});

/**
 * Enqueue admin styles and scripts
 */
add_action('admin_enqueue_scripts', function($hook) {

  if ($hook == 'post-new.php' or $hook == 'post.php') {

    if (isset( $_GET['post'])) {

      if (get_post_type($_GET['post']) == 'destinations'){
        wp_enqueue_style('destinations_admin_style', ADMIN_CSS_DIR .'/destinations.css');
        wp_enqueue_script('destinations_admin_script', ADMIN_JS_DIR .'/destinations.js', null);
        wp_enqueue_script('mishaupload', ADMIN_JS_DIR .'/video_uploader.js', array('jquery', 'media'));
      }

      if (get_post_type($_GET['post']) == 'testimonials'){
        wp_enqueue_style('testimonials_admin_style', ADMIN_CSS_DIR .'/testimonials.css');
      }

    } else if (isset($_GET['post_type'])) {

      if ($_GET['post_type'] == 'destinations') {
        wp_enqueue_style('destinations_admin_style', ADMIN_CSS_DIR .'/destinations.css');
        wp_enqueue_script('destinations_admin_script', ADMIN_JS_DIR .'/destinations.js', null);
        wp_enqueue_script('mishaupload', ADMIN_JS_DIR .'/video_uploader.js', array('jquery', 'media'));
      }

      if ($_GET['post_type'] == 'testimonials') {
        wp_enqueue_style('testimonials_admin_style', ADMIN_CSS_DIR .'/testimonials.css');
      }

    } else {
      //  Do Nothing
    }
  }

});