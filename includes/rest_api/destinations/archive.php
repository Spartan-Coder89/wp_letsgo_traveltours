<?php

function destinations_archive() {

  register_rest_route('destinations/v1', '/archive', array(
    'methods' => 'GET',
    'callback' => 'destinations_archive_callback',
    'permission_callback' => '__return_true'
  ));

  function destinations_archive_callback() {
    $data = array();
    $destinations = get_posts(array(
      'posts_per_page' => -1,
      'post_type' => 'destinations'
    ));
    
    foreach ($destinations as $key => $destination) {

      $general_details = get_post_meta($destination->ID, '_general_details', true);

      $data[$destination->ID]['post_title'] = $destination->post_title;
      $data[$destination->ID]['featured_image'] = get_the_post_thumbnail_url($destination->ID);
      $data[$destination->ID]['location'] = $general_details['location'];
      $data[$destination->ID]['permalink'] = get_the_permalink($destination->ID);
      $data[$destination->ID]['starting_price'] = get_post_meta($destination->ID, '_starting_price', true);
    }

    return $data;
  }
}

destinations_archive();