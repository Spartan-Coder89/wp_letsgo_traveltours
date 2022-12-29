<?php

function blog_archive() {

  register_rest_route('blog/v1', '/archive', array(
    'methods' => 'GET',
    'callback' => 'blog_archive_callback',
    'permission_callback' => '__return_true'
  ));

  function blog_archive_callback() {

    $data = array();
    $blog = get_posts(array(
      'posts_per_page' => -1,
      'post_type' => 'post'
    ));
    
    foreach ($blog as $key => $post) {
      $data[$post->ID]['post_title'] = $post->post_title;
      $data[$post->ID]['featured_image'] = get_the_post_thumbnail_url($post->ID);
      $data[$post->ID]['content'] = $post->post_content;
      $data[$post->ID]['permalink'] = get_the_permalink($post->ID);
    }

    return $data;
  }
}

blog_archive();