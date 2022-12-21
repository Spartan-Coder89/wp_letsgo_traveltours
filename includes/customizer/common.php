<?php

$wp_customize->add_panel('letsgo_common_panel', array(
  'title' => 'Common'
));

/**
 * Header Section
 */
$wp_customize->add_section('letsgo_header_section', array(
  'title' => 'Header',
  'panel' => 'letsgo_common_panel'
));

//  Header logo for transparent background
$wp_customize->add_setting('letsgo_header_logo_trans_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_header_logo_trans_control', array(
  'label' => 'Header Logo For Transparent Background',
  'section' => 'letsgo_header_section',
  'settings' => 'letsgo_header_logo_trans_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Header logo for transparent 
$wp_customize->add_setting('letsgo_header_logo_white_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_header_logo_white_control', array(
  'label' => 'Header Logo For White Background',
  'section' => 'letsgo_header_section',
  'settings' => 'letsgo_header_logo_white_setting',
  'flex_width' => true,
  'flex_height' => true
)));

/**
 * Footer Section
 */
$wp_customize->add_section('letsgo_footer_section', array(
  'title' => 'Footer',
  'panel' => 'letsgo_common_panel'
));

//  Footer logo
$wp_customize->add_setting('letsgo_footer_logo_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_footer_logo_control', array(
  'label' => 'Footer Logo',
  'section' => 'letsgo_footer_section',
  'settings' => 'letsgo_footer_logo_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Footer description
$wp_customize->add_setting('letsgo_footer_description_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_footer_description_control', array(
  'label' => 'Footer Company Short Description',
  'section' => 'letsgo_footer_section',
  'settings' => 'letsgo_footer_description_setting',
  'type' => 'textarea',
  'input_attrs' => array(
    'style' => 'height: 200px;'
   )
)));

/**
 * Footer Section
 */
$wp_customize->add_section('letsgo_contact_section', array(
  'title' => 'Contact',
  'panel' => 'letsgo_common_panel'
));

//  Phone Number
$wp_customize->add_setting('letsgo_phone_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_phone_control', array(
  'label' => 'Phone Number',
  'section' => 'letsgo_contact_section',
  'settings' => 'letsgo_phone_setting',
  'type' => 'text'
)));

//  Email Address
$wp_customize->add_setting('letsgo_email_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_email_control', array(
  'label' => 'Email Address',
  'section' => 'letsgo_contact_section',
  'settings' => 'letsgo_email_setting',
  'type' => 'text'
)));