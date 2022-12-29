<?php

function customizer_common() {

  register_rest_route('customizer/v1', '/common', array(
    'methods' => 'GET',
    'callback' => 'customizer_common_callback',
    'permission_callback' => '__return_true'
  ));

  function customizer_common_callback() {
    $data = array();
    $data['header']['header_logo_trans_bg'] = wp_get_attachment_image_url(get_theme_mod('letsgo_header_logo_trans_setting'));
    $data['header']['header_logo_white_bg'] = wp_get_attachment_image_url(get_theme_mod('letsgo_header_logo_white_setting'));
    $data['footer']['footer_logo'] = wp_get_attachment_image_url(get_theme_mod('letsgo_footer_logo_setting'));
    $data['footer']['company_short_description'] = get_theme_mod('letsgo_footer_description_setting');
    $data['contact']['phone_number'] = get_theme_mod('letsgo_phone_setting');
    $data['contact']['email_address'] = get_theme_mod('letsgo_email_setting');
  
    return $data;
  }
}

customizer_common();