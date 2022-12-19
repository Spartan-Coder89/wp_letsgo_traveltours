<?php

if (is_null( get_page_by_path('contact-us') )) {
  $post_details   = array(
    'post_title'    => 'Contact Us',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'contact-us'
  );
  wp_insert_post( $post_details );
}