<?php

$wp_customize->add_panel('letsgo_homepage_panel', array(
  'title' => 'Homepage'
));

/**
 * Banner Section
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
$wp_customize->add_setting('letsgo_banner_subheadline_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_banner_subheadline_control', array(
  'label' => 'Banner Subheadline',
  'section' => 'letsgo_banner_section',
  'settings' => 'letsgo_banner_subheadline_setting',
  'type' => 'text'
)));

/**
 * Below Banner Section
 */
$wp_customize->add_section('letsgo_below_banner_section', array(
  'title' => 'Below Banner',
  'panel' => 'letsgo_homepage_panel'
));

//  Banner background image
$wp_customize->add_setting('letsgo_below_banner_img_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_below_banner_img_control', array(
  'label' => 'Below Banner Image',
  'section' => 'letsgo_below_banner_section',
  'settings' => 'letsgo_below_banner_img_setting',
  'flex_width' => true,
  'flex_height' => true
)));

//  Below banner headline
$wp_customize->add_setting( 'letsgo_below_banner_headline_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_below_banner_headline_control', array(
  'label' => 'Below Banner Headline',
  'section' => 'letsgo_below_banner_section',
  'settings' => 'letsgo_below_banner_headline_setting',
  'type' => 'text'
)));

//  Below banner description
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


/**
 * Assurance Section
 */
$wp_customize->add_section('letsgo_assurance_section', array(
  'title' => 'Assurance',
  'panel' => 'letsgo_homepage_panel'
));

//  Assurance 1 icon
$wp_customize->add_setting('letsgo_assurance1_icon_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_assurance1_icon_control', array(
  'label' => 'Assurance 1 Icon',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance1_icon_setting',
  'width' => 60,
  'height' => 60
)));

//  Assurance 1 Headline
$wp_customize->add_setting('letsgo_assurance1_headline_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_assurance1_headline_control', array(
  'label' => 'Assurance 1 Headline',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance1_headline_setting',
  'type' => 'text'
)));

//  Assurance 1 description
$wp_customize->add_setting('letsgo_assurance1_description_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_assurance1_description_control', array(
  'label' => 'Assurance 1 Description',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance1_description_setting',
  'type' => 'textarea'
)));

//  Assurance 2 icon
$wp_customize->add_setting('letsgo_assurance2_icon_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_assurance2_icon_control', array(
  'label' => 'Assurance 2 Icon',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance2_icon_setting',
  'width' => 60,
  'height' => 60
)));

//  Assurance 2 Headline
$wp_customize->add_setting('letsgo_assurance2_headline_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_assurance2_headline_control', array(
  'label' => 'Assurance 2 Headline',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance2_headline_setting',
  'type' => 'text'
)));

//  Assurance 2 description
$wp_customize->add_setting('letsgo_assurance2_description_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_assurance2_description_control', array(
  'label' => 'Assurance 2 Description',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance2_description_setting',
  'type' => 'textarea'
)));

//  Assurance 3 icon
$wp_customize->add_setting('letsgo_assurance3_icon_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'letsgo_assurance3_icon_control', array(
  'label' => 'Assurance 3 Icon',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance3_icon_setting',
  'width' => 60,
  'height' => 60
)));

//  Assurance 2 Headline
$wp_customize->add_setting('letsgo_assurance3_headline_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_assurance3_headline_control', array(
  'label' => 'Assurance 3 Headline',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance3_headline_setting',
  'type' => 'text'
)));

//  Assurance 2 description
$wp_customize->add_setting('letsgo_assurance3_description_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_assurance3_description_control', array(
  'label' => 'Assurance 3 Description',
  'section' => 'letsgo_assurance_section',
  'settings' => 'letsgo_assurance3_description_setting',
  'type' => 'textarea'
)));


/**
 * Around the World Section
 */
$wp_customize->add_section('letsgo_around_the_world_section', array(
  'title' => 'Around The World',
  'panel' => 'letsgo_homepage_panel'
));

//  Around the world headline
$wp_customize->add_setting('letsgo_around_the_world_headline_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_around_the_world_headline_control', array(
  'label' => 'Around The World Headline',
  'section' => 'letsgo_around_the_world_section',
  'settings' => 'letsgo_around_the_world_headline_setting',
  'type' => 'text'
)));

//  Around the world description
$wp_customize->add_setting('letsgo_around_the_world_description_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'letsgo_around_the_world_description_control', array(
  'label' => 'Around The World Description',
  'section' => 'letsgo_around_the_world_section',
  'settings' => 'letsgo_around_the_world_description_setting',
  'type' => 'textarea',
  'input_attrs' => array(
    'style' => 'height: 200px;'
   )
)));