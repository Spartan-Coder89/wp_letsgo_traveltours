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

  if (is_page('contact-us')) {
    $page_title = 'Contact Us';
  }

  if (is_page('about-us')) {
    $page_title = 'Get To Know Us';
  }

  return $page_title;
}