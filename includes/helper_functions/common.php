<?php

/**
 * Receives nav menu name as parameter
 * Outputs the the menu items in html format
 */
function output_menu($menu_name) {

  if (!empty(wp_get_nav_menu_object($menu_name))) {

    $main_nav_menu = wp_get_nav_menu_object($menu_name);
    $main_nav_menu_items = wp_get_nav_menu_items($main_nav_menu);

    foreach ($main_nav_menu_items as $key => $menu_item) {
      if (($key + 1) <= 5) {
        echo '<a href="'. $menu_item->url .'">'. $menu_item->post_title .'</a>';
      } else {
        break;
      }
    }
  }
}

/**
 * Get the inner page title
 */
function get_inner_title() {

  $page_title = '';

  if (is_post_type_archive('destinations')) {
    $page_title = 'Destinations to Explore';
  }

  if (is_singular('destinations')) {
    $page_title = '';
  }

  if (is_page('booking')) {
    $page_title = 'Book Your Destination';
  }

  if (is_post_type_archive('post')) {
    $page_title = 'Know what’s the latest';
  }

  if (is_singular('post')) {
    $page_title = '';
  }

  if (is_singular('destinations')) {
    global $post;
    $page_title = get_the_title($post->ID);
  }

  if (is_page('contact-us')) {
    $page_title = 'Contact Us';
  }

  if (is_page('about-us')) {
    $page_title = 'Get To Know Us';
  }

  return $page_title;
}

/**
 * Output post pagination
 */
function post_pagination($max_num_pages, $current_page, $base_url) {

  $start_page = ($current_page < 5) ? 1 : $current_page - 4;
  $end_page = 8 + $start_page;
  $end_page = ($max_num_pages < $end_page) ? $max_num_pages : $end_page;
  $diff = $start_page - $end_page + 8;
  $start_page -= ($start_page - $diff > 0) ? $diff : 0;
  
  global $post; 
  $current_page = $current_page == 0 ? $current_page + 1 : $current_page;

  for($i=$start_page; $i<=$end_page; $i++) {
    
    $active_class = $current_page == $i ? 'class="active"' : '';
    $page_url = $base_url .'/page/'. $i;

    echo '<div '. $active_class .'><a href="'. $page_url .'">'. $i .'</a></div>';
  }

}

/**
 * Output previous arrow on pagination
 */
function prev_pagination($current_page, $base_url) {

  $current_page = $current_page == 0 ? $current_page + 1 : $current_page;
  $page_number = ($current_page - 1) < 1 ? 1 : $current_page - 1;
  $page_url = $base_url .'/page/'. $page_number;

  echo
  '<div class="prev">
    <a href="'. $page_url .'">
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18.25 22.5L20 20.75L14.25 15L20 9.25L18.25 7.5L10.75 15L18.25 22.5Z" fill="#131313"/>
      </svg>
    </a>
  </div>';
}

/**
 * Output next arrow on pagination
 */
function next_pagination($current_page, $max_pages, $base_url) {

  $current_page = $current_page == 0 ? $current_page + 1 : $current_page;
  $page_number = ($current_page + 1) > $max_pages ? $current_page : $current_page + 1;
  $page_url = $base_url .'/page/'. $page_number;

  echo
  '<div class="next">
    <a href="'. $page_url .'">
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.75 22.5L10 20.75L15.75 15L10 9.25L11.75 7.5L19.25 15L11.75 22.5Z" fill="#131313"/>
      </svg>
    </a>
  </div>';
}

/**
 * Query all posts
 * Returns a markup string
 */
function get_all_posts() {

  $posts = get_posts(array(
    'posts_per_page' => 3,
    'post_type' => 'post'
  ));

  $posts_markup = '';

  if (!empty($posts)) {

    foreach ($posts as $key => $post) {

      if (!empty(get_the_post_thumbnail_url($post->ID))) {
        $featured_img = get_the_post_thumbnail_url($post->ID);
      } else {
        $featured_img = IMAGES_DIR .'/img_placeholder.jpg';
      }
      
      $posts_markup .=
      '<article class="post">
        <div class="featured_img" style="background-image: url('. $featured_img .');"></div>
        <h2>'. $post->post_title .'</h2>
        <p>'. $post->post_excerpt .'</p>
        <a href="'. get_the_permalink($post->ID) .'">Read More..</a>
      </article>';
    }
  
    return $posts_markup;
  }
}

/**
 * Output header logo urls
 */
function header_logo_url() {

  $logo_trans_url = '';
  $logo_white_url = '';

  if (!empty(get_theme_mod('letsgo_header_logo_trans_setting'))) {
    $logo_trans_id = get_theme_mod('letsgo_header_logo_trans_setting');
    $logo_trans_url = wp_get_attachment_image_url($logo_trans_id);
  }

  if (!empty(get_theme_mod('letsgo_header_logo_white_setting'))) {
    $logo_white_id = get_theme_mod('letsgo_header_logo_white_setting');
    $logo_white_url = wp_get_attachment_image_url($logo_white_id);
  }

  return array(
    'logo_trans_url' => $logo_trans_url,
    'logo_white_url' => $logo_white_url
  );
}

/**
 * Output footer logo
 */
function footer_logo_url() {

  $footer_logo_url = '';

  if (!empty(get_theme_mod('letsgo_footer_logo_setting'))) {
    $footer_logo_id = get_theme_mod('letsgo_footer_logo_setting');
    $footer_logo_url = wp_get_attachment_image_url($footer_logo_id, 'large');
  }

  return $footer_logo_url;
}

/**
 * Footer description
 */
function footer_description() {
  return get_theme_mod('letsgo_footer_description_setting');
}

/**
 * Get contact details
 */
function contact_info() {
  return array(
    'phone' => get_theme_mod('letsgo_phone_setting'),
    'email' => get_theme_mod('letsgo_email_setting')
  );
}