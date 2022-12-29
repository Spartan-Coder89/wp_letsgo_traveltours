<?php

function customizer_homepage() {

  register_rest_route('customizer/v1', '/homepage', array(
    'methods' => 'GET',
    'callback' => 'customizer_homepage_callback',
    'permission_callback' => '__return_true'
  ));

  function customizer_homepage_callback() {
    $data = array();
    $data['banner']['background'] = wp_get_attachment_image_url(get_theme_mod('letsgo_banner_bg_setting'));
    $data['banner']['headline'] = get_theme_mod('letsgo_banner_headline_setting');
    $data['banner']['subheadline'] = get_theme_mod('letsgo_banner_subheadline_setting');
    $data['below_banner']['image'] = wp_get_attachment_image_url(get_theme_mod('letsgo_below_banner_img_setting'));
    $data['below_banner']['headline'] = get_theme_mod('letsgo_below_banner_headline_setting');
    $data['below_banner']['description'] = get_theme_mod('letsgo_below_banner_description_setting');
    $data['assurance1']['icon'] = wp_get_attachment_image_url(get_theme_mod('letsgo_assurance1_icon_setting'));
    $data['assurance1']['headline'] = get_theme_mod('letsgo_assurance1_headline_setting');
    $data['assurance1']['description'] = get_theme_mod('letsgo_assurance1_description_setting');
    $data['assurance2']['icon'] = wp_get_attachment_image_url(get_theme_mod('letsgo_assurance2_icon_setting'));
    $data['assurance2']['headline'] = get_theme_mod('letsgo_assurance2_headline_setting');
    $data['assurance2']['description'] = get_theme_mod('letsgo_assurance2_description_setting');
    $data['assurance3']['icon'] = wp_get_attachment_image_url(get_theme_mod('letsgo_assurance3_icon_setting'));
    $data['assurance3']['headline'] = get_theme_mod('letsgo_assurance3_headline_setting');
    $data['assurance3']['description'] = get_theme_mod('letsgo_assurance3_description_setting');
    $data['around_the_world']['headline'] = get_theme_mod('letsgo_around_the_world_headline_setting');
    $data['around_the_world']['description'] = get_theme_mod('letsgo_around_the_world_description_setting');
    
    return $data;
  }
}

customizer_homepage();