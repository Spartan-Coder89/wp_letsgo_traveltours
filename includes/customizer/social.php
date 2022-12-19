<?php

$wp_customize->add_panel('letsgo_social_panel', array(
  'title' => 'Social'
));

/**
 * Banner section
 */
$wp_customize->add_section('letsgo_social_section', array(
  'title' => 'Social Section',
  'panel' => 'letsgo_social_panel'
));

//  Facebook
$wp_customize->add_setting( 'letsgo_social_facebook_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_social_facebook_control', array(
  'label' => 'Facebook',
  'section' => 'letsgo_social_section',
  'settings' => 'letsgo_social_facebook_setting',
  'type' => 'text'
)));

//  Twitter
$wp_customize->add_setting( 'letsgo_social_twitter_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_social_twitter_control', array(
  'label' => 'Twitter',
  'section' => 'letsgo_social_section',
  'settings' => 'letsgo_social_twitter_setting',
  'type' => 'text'
)));

//  Youtube
$wp_customize->add_setting( 'letsgo_social_youtube_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_social_youtube_control', array(
  'label' => 'Youtube',
  'section' => 'letsgo_social_section',
  'settings' => 'letsgo_social_youtube_setting',
  'type' => 'text'
)));

//  Instagram
$wp_customize->add_setting( 'letsgo_social_instagram_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'letsgo_social_instagram_control', array(
  'label' => 'Instagram',
  'section' => 'letsgo_social_section',
  'settings' => 'letsgo_social_instagram_setting',
  'type' => 'text'
)));