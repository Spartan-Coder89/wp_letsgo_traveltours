<?php

function customizer_social() {

  register_rest_route('customizer/v1', '/social', array(
    'methods' => 'GET',
    'callback' => 'customizer_social_callback',
    'permission_callback' => '__return_true'
  ));

  function customizer_social_callback() {
    $data = array();
    $data['facebook'] = get_theme_mod('letsgo_social_facebook_setting');
    $data['twitter'] = get_theme_mod('letsgo_social_twitter_setting');
    $data['youtube'] = get_theme_mod('letsgo_social_youtube_setting');
    $data['instagram'] = get_theme_mod('letsgo_social_instagram_setting');
    
    return $data;
  }
}

customizer_social();