<?php

/**
 * Get homepage banner customizer values
 */
function banner_customizer_values() {

  if (empty(get_theme_mod('letsgo_banner_bg_setting'))) {
    $banner_bg = IMAGES_DIR .'/home/bg_banner.jpg';
  } else {
    $banner_bg = wp_get_attachment_image_url(get_theme_mod('letsgo_banner_bg_setting'), [1366,1366]);
  }

  return array(
    'banner_bg' => $banner_bg,
    'banner_headline' => get_theme_mod('letsgo_banner_headline_setting'),
    'banner_subheadline' => get_theme_mod('letsgo_banner_subheadline_setting')
  );
}

/**
 * Get homepage below banner customizer values
 */
function below_banner_customizer_values() {

  if (empty(get_theme_mod('letsgo_below_banner_img_setting'))) {
    $below_banner_img = IMAGES_DIR .'/img_placeholder.jpg';
  } else {
    $below_banner_img = wp_get_attachment_image_url(get_theme_mod('letsgo_below_banner_img_setting'), [565, 450]);
  }

  return array(
    'below_banner_img' => $below_banner_img,
    'below_banner_headline' => get_theme_mod('letsgo_below_banner_headline_setting'),
    'below_banner_description' => get_theme_mod('letsgo_below_banner_description_setting')
  );
}

/**
 * Get homepage below banner customizer values
 */
function assurance_customizer_values() {

  if (empty(get_theme_mod('letsgo_assurance1_icon_setting'))) {
    $assurance1_icon = IMAGES_DIR .'/home/ico_below_banner1.png';
  } else {
    $assurance1_icon = wp_get_attachment_image_url(get_theme_mod('letsgo_assurance1_icon_setting'), [60, 60]);
  }

  if (empty(get_theme_mod('letsgo_assurance2_icon_setting'))) {
    $assurance2_icon = IMAGES_DIR .'/home/ico_below_banner2.png';
  } else {
    $assurance2_icon = wp_get_attachment_image_url(get_theme_mod('letsgo_assurance2_icon_setting'), [60, 60]);
  }

  if (empty(get_theme_mod('letsgo_assurance3_icon_setting'))) {
    $assurance3_icon = IMAGES_DIR .'/home/ico_below_banner1.png';
  } else {
    $assurance3_icon = wp_get_attachment_image_url(get_theme_mod('letsgo_assurance3_icon_setting'), [60, 60]);
  }

  return array(
    'assurance1_icon' => $assurance1_icon,
    'assurance2_icon' => $assurance1_icon,
    'assurance3_icon' => $assurance1_icon,
    'assurance1_headline' => get_theme_mod('letsgo_assurance1_headline_setting'),
    'assurance2_headline' => get_theme_mod('letsgo_assurance2_headline_setting'),
    'assurance3_headline' => get_theme_mod('letsgo_assurance3_headline_setting'),
    'assurance1_description' => get_theme_mod('letsgo_assurance1_description_setting'),
    'assurance2_description' => get_theme_mod('letsgo_assurance2_description_setting'),
    'assurance3_description' => get_theme_mod('letsgo_assurance3_description_setting')
  );
}

/**
 * Around the world
 */
function around_the_world_customizer_values() {

  return array(
    'headline' => get_theme_mod('letsgo_around_the_world_headline_setting'),
    'description' => get_theme_mod('letsgo_around_the_world_description_setting')
  );
}

/**
 * Output banner image for about us
 */
function about_banner_img() {

  if (!empty(get_theme_mod('letsgo_banner_img_setting'))) {
    $banner_img = wp_get_attachment_image_url(get_theme_mod('letsgo_banner_img_setting'), 'large');
  } else {
    $banner_img = IMAGES_DIR .'/img_placeholder.jpg';
  }

  return $banner_img;
}

/**
 * Output images for about us
 * Returns string markup
 */
function about_us_images() {

  $images_markup = '';

  if (!empty(get_theme_mod('letsgo_image1_setting'))) {
    $images_markup .= '<div class="image" style="background-image: url('. wp_get_attachment_image_url(get_theme_mod('letsgo_image1_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="image" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }

  if (!empty(get_theme_mod('letsgo_image2_setting'))) {
    $images_markup .= '<div class="image" style="background-image: url('. wp_get_attachment_image_url(get_theme_mod('letsgo_image2_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="image" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }

  if (!empty(get_theme_mod('letsgo_image3_setting'))) {
    $images_markup .= '<div class="image" style="background-image: url('. wp_get_attachment_image_url(get_theme_mod('letsgo_image3_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="image" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }

  return $images_markup;
}

/**
 * Output accreditation images for about us
 * Returns string markup
 */
function about_us_accreditation_images() {

  $images_markup = '';

  if (!empty(get_theme_mod('letsgo_accreditation1_setting'))) {
    $images_markup .= '<div class="logo" style="background-image:url('. wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation1_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="logo" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }

  if (!empty(get_theme_mod('letsgo_accreditation2_setting'))) {
    $images_markup .= '<div class="logo" style="background-image:url('. wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation2_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="logo" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }
  
  if (!empty(get_theme_mod('letsgo_accreditation3_setting'))) {
    $images_markup .= '<div class="logo" style="background-image:url('. wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation3_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="logo" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }

  if (!empty(get_theme_mod('letsgo_accreditation4_setting'))) {
    $images_markup .= '<div class="logo" style="background-image:url('. wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation4_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="logo" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }

  if (!empty(get_theme_mod('letsgo_accreditation5_setting'))) {
    $images_markup .= '<div class="logo" style="background-image:url('. wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation5_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="logo" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }

  if (!empty(get_theme_mod('letsgo_accreditation6_setting'))) {
    $images_markup .= '<div class="logo" style="background-image:url('. wp_get_attachment_image_url(get_theme_mod('letsgo_accreditation1_setting'), 'large') .');"></div>';
  } else {
    $images_markup .= '<div class="logo" style="background-image: url('. IMAGES_DIR .'/img_placeholder.jpg);"></div>';
  }

  return $images_markup;
}

/**
 * Get homepage banner customizer values
 */
function social_customizer_values() {

  return array(
    'facebook' => get_theme_mod('letsgo_social_facebook_setting'),
    'twitter' => get_theme_mod('letsgo_social_twitter_setting'),
    'youtube' => get_theme_mod('letsgo_social_youtube_setting'),
    'instagram' => get_theme_mod('letsgo_social_instagram_setting')
  );
}

