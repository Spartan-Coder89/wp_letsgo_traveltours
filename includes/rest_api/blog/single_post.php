<?php

function single_post() {

  register_rest_route('blog/v1', '/single/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'single_post_callback',
    'permission_callback' => '__return_true'
  ));

  function single_post_callback( WP_REST_Request $request ) {

    $post_id = $request['id'];
    $data = array();

    $post = get_post($post_id);
    
    $data['post_title'] = $post->post_title;
    $data['featured_image'] = get_the_post_thumbnail_url($post_id);
    $data['post_content'] = $post->post_content;

    return $data;
  }
}

single_post();