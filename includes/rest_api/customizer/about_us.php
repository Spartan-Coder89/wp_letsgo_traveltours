<?php

function customizer_about_us() {

  register_rest_route('customizer/v1', '/about-us', array(
    'methods' => 'GET',
    'callback' => 'customizer_about_us_callback'
  ));

  function customizer_about_us_callback() {
    $data = array();
    $data['mvh']['mission'] = get_theme_mod('letsgo_mission_setting');
    $data['mvh']['vision'] = get_theme_mod('letsgo_vision_setting');
    $data['mvh']['history'] = get_theme_mod('letsgo_history_setting');
    $data['images']['banner_images'] = wp_get_attachment_image_url(get_theme_mod('letsgo_banner_img_setting'));
    $data['images']['image1'] = wp_get_attachment_image_url(get_theme_mod('letsgo_image1_setting'));
    $data['images']['image2'] = wp_get_attachment_image_url(get_theme_mod('letsgo_image2_setting'));
    $data['images']['image3'] = wp_get_attachment_image_url(get_theme_mod('letsgo_image3_setting'));
    $data['accreditation_img']['image1'] = wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation1_setting'));
    $data['accreditation_img']['image2'] = wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation2_setting'));
    $data['accreditation_img']['image3'] = wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation3_setting'));
    $data['accreditation_img']['image4'] = wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation4_setting'));
    $data['accreditation_img']['image5'] = wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation5_setting'));
    $data['accreditation_img']['image6'] = wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation6_setting'));
    
    return $data;
  }
}

customizer_about_us();