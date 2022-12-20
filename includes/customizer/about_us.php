<?php

$wp_customize->add_panel('letsgo_about_us_panel', array(
  'title' => 'About Us'
));

/**
 * Mision, vision and history section
 */
$wp_customize->add_section('letsgo_mvh_section', array(
  'title' => 'Mission, Vision, History',
  'panel' => 'letsgo_about_us_panel'
));

//  Mission
$wp_customize->add_setting( 'letsgo_mission_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_mission_control', array(
  'label' => 'Mission',
  'section' => 'letsgo_mvh_section',
  'settings' => 'letsgo_mission_setting',
  'type' => 'textarea',
  'input_attrs' => array('style' => 'height:200px')
)));

//  Vision
$wp_customize->add_setting( 'letsgo_vision_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_vision_control', array(
  'label' => 'Vision',
  'section' => 'letsgo_mvh_section',
  'settings' => 'letsgo_vision_setting',
  'type' => 'textarea',
  'input_attrs' => array('style' => 'height:200px')
)));

//  History
$wp_customize->add_setting( 'letsgo_history_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_history_control', array(
  'label' => 'History',
  'section' => 'letsgo_mvh_section',
  'settings' => 'letsgo_history_setting',
  'type' => 'textarea',
  'input_attrs' => array('style' => 'height:200px')
)));

/**
 * Images section
 */
$wp_customize->add_section('letsgo_images_section', array(
  'title' => 'Images',
  'panel' => 'letsgo_about_us_panel'
));

//  Featured image
$wp_customize->add_setting('letsgo_banner_img_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_banner_img_control', array(
  'label' => 'Banner Image',
  'section' => 'letsgo_images_section',
  'settings' => 'letsgo_banner_img_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Image 1
$wp_customize->add_setting('letsgo_image1_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_image1_control', array(
  'label' => 'Image 1',
  'section' => 'letsgo_images_section',
  'settings' => 'letsgo_image1_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Image 2
$wp_customize->add_setting('letsgo_image2_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_image2_control', array(
  'label' => 'Image 2',
  'section' => 'letsgo_images_section',
  'settings' => 'letsgo_image2_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Image 3
$wp_customize->add_setting('letsgo_image3_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_image3_control', array(
  'label' => 'Image 3',
  'section' => 'letsgo_images_section',
  'settings' => 'letsgo_image3_setting',
  'flex_width' => true,
  'flex_height' => true
)));

/**
 * Accreditation Images
 */
$wp_customize->add_section('letsgo_accreditation_section', array(
  'title' => 'Accreditation Images',
  'panel' => 'letsgo_about_us_panel'
));

//  Accreditation Image 1
$wp_customize->add_setting('letsgo_accreditation1_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_accreditation1_control', array(
  'label' => 'Accreditation Image 1',
  'section' => 'letsgo_accreditation_section',
  'settings' => 'letsgo_accreditation1_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Accreditation Image 2
$wp_customize->add_setting('letsgo_accreditation2_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_accreditation2_control', array(
  'label' => 'Accreditation Image 2',
  'section' => 'letsgo_accreditation_section',
  'settings' => 'letsgo_accreditation2_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Accreditation Image 3
$wp_customize->add_setting('letsgo_accreditation3_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_accreditation3_control', array(
  'label' => 'Accreditation Image 3',
  'section' => 'letsgo_accreditation_section',
  'settings' => 'letsgo_accreditation3_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Accreditation Image 4
$wp_customize->add_setting('letsgo_accreditation4_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_accreditation4_control', array(
  'label' => 'Accreditation Image 4',
  'section' => 'letsgo_accreditation_section',
  'settings' => 'letsgo_accreditation4_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Accreditation Image 5
$wp_customize->add_setting('letsgo_accreditation5_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_accreditation5_control', array(
  'label' => 'Accreditation Image 5',
  'section' => 'letsgo_accreditation_section',
  'settings' => 'letsgo_accreditation5_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Accreditation Image 6
$wp_customize->add_setting('letsgo_accreditation6_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_accreditation6_control', array(
  'label' => 'Accreditation Image 6',
  'section' => 'letsgo_accreditation_section',
  'settings' => 'letsgo_accreditation6_setting',
  'flex_width' => true,
  'flex_height' => true
)));