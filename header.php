<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php get_bloginfo('description'); ?>">
  <title>Lets Go Travel and Tours</title>
  <link rel="icon" type="image/x-icon" href="<?php echo get_site_icon_url('512'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_site_icon_url('180'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="header">
    <div class="bg"></div>
    <div class="main_wrap pc_layout">
      <a class="header_logo_wrap" href="./">
        <h1>
          <img id="bg_not_white" class="header_logo" src="<?php echo header_logo_url()['logo_white_url']; ?>" alt="">
          <img id="bg_white" class="header_logo show" src="<?php echo header_logo_url()['logo_trans_url']; ?>" alt="">
        </h1>
      </a>
      <nav class="main_nav">
        <?php output_menu('Main Navigation'); ?>
      </nav>
      <a class="cta" href="">Book Here</a>
    </div>

    <div class="main_wrap sp_layout">
      <div class="top">
        <a class="header_logo_wrap" href="./">
          <h1>
            <img class="header_logo" src="<?php echo IMAGES_DIR; ?>/header_logo_black.png" alt="">
          </h1>
        </a>
        <svg id="open_mobile_menu" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 22.5H25C25.6875 22.5 26.25 21.9375 26.25 21.25C26.25 20.5625 25.6875 20 25 20H5C4.3125 20 3.75 20.5625 3.75 21.25C3.75 21.9375 4.3125 22.5 5 22.5ZM5 16.25H25C25.6875 16.25 26.25 15.6875 26.25 15C26.25 14.3125 25.6875 13.75 25 13.75H5C4.3125 13.75 3.75 14.3125 3.75 15C3.75 15.6875 4.3125 16.25 5 16.25ZM3.75 8.75C3.75 9.4375 4.3125 10 5 10H25C25.6875 10 26.25 9.4375 26.25 8.75C26.25 8.0625 25.6875 7.5 25 7.5H5C4.3125 7.5 3.75 8.0625 3.75 8.75Z" fill="white"/>
        </svg>
        <a class="cta" href="">Book Here</a>
      </div>
      <nav id="mobile_nav" class="main_nav"> 
        <?php output_menu('Main Navigation'); ?>
      </nav>
    </div>
  </header>