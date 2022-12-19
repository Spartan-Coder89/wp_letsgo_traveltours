<?php

$wp_customize->add_panel('letsgo_homepage_panel', array(
  'title' => 'Homepage'
));

/**
 * Banner section
 */
$wp_customize->add_section('letsgo_banner_section', array(
  'title' => 'Banner Section',
  'panel' => 'letsgo_homepage_panel'
));

//  Banner background image
$wp_customize->add_setting('letsgo_banner_bg_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_banner_bg_control', array(
  'label' => 'Banner Background',
  'section' => 'letsgo_banner_section',
  'settings' => 'letsgo_banner_bg_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Banner headline
$wp_customize->add_setting( 'letsgo_banner_headline_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_banner_headline_control', array(
  'label' => 'Banner Headline',
  'section' => 'letsgo_banner_section',
  'settings' => 'letsgo_banner_headline_setting',
  'type' => 'text'
)));

//  Banner subheadline
$wp_customize->add_setting( 'letsgo_banner_subheadline_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_banner_subheadline_control', array(
  'label' => 'Banner Subheadline',
  'section' => 'letsgo_banner_section',
  'settings' => 'letsgo_banner_subheadline_setting',
  'type' => 'text'
)));

/**
 * Below banner
 */
$wp_customize->add_section('letsgo_below_banner_section', array(
  'title' => 'Below Banner',
  'panel' => 'letsgo_homepage_panel'
));

//  Below banner headline
$wp_customize->add_setting( 'letsgo_below_banner_headline_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_below_banner_headline_control', array(
  'label' => 'Below Banner Headline',
  'section' => 'letsgo_below_banner_section',
  'settings' => 'letsgo_below_banner_headline_setting',
  'type' => 'text'
)));

//  Below banner headline
$wp_customize->add_setting( 'letsgo_below_banner_description_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_below_banner_description_control', array(
  'label' => 'Below Banner Description',
  'section' => 'letsgo_below_banner_section',
  'settings' => 'letsgo_below_banner_description_setting',
  'type' => 'textarea',
  'input_attrs' => array(
    'style' => 'height: 200px;'
   )
)));