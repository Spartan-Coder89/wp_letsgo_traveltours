<?php

function single_destination() {

  register_rest_route('destinations/v1', '/single/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'single_destination_callback',
    'permission_callback' => '__return_true'
  ));

  function single_destination_callback( WP_REST_Request $request ) {
    $post_id = $request['id'];
    $data = array();

    $destination = get_post($post_id);
    
    $data['post_title'] = $destination->post_title;
    $data['general_details'] = get_post_meta($destination->ID, '_general_details', true);
    $data['description'] = get_the_content($destination->ID);
    $data['video'] = wp_get_attachment_url(get_post_meta($destination->ID, '_video_attachment', true));
    $data['key_highlights'] = get_post_meta($destination->ID, '_key_highlights', true);
    $data['itenerary'] = get_post_meta($destination->ID, '_itenerary', true);

    return $data;
  }
}

single_destination();