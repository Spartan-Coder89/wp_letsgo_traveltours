<?php 
  get_header(); 

  $banner_customizer_values = banner_customizer_values();
  $social_customizer_values = social_customizer_values();
  $below_banner_customizer_values = below_banner_customizer_values();
  $assurance_customizer_values = assurance_customizer_values();
  $around_the_world_customizer_values = around_the_world_customizer_values();
  $featured_destination_details = featured_destination_details();
?>

<main>
  <div id="banner" style="background-image: url('<?php echo $banner_customizer_values['banner_bg']; ?>');">
    <div class="main_wrap">
      <section>
        <h2 id="banner_headline" class="fade_in_leftwards"><?php echo $banner_customizer_values['banner_headline']; ?></h2>
        <p id="banner_subheadline" class="fade_in_leftwards"><?php echo $banner_customizer_values['banner_subheadline']; ?></p>
        <a id="banner_cta" class="cta btn fade_in_leftwards" href="<?php echo get_site_url() .'/booking' ?>">
          <span class="text">Book Your Trip Now</span>
          <span class="btn_bg"></span>
        </a>
      </section>
      <div class="social">
        <a id="social_fb" class="fade_in_upwards" href="<?php echo $social_customizer_values['facebook']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_fb_banner.png" alt="">
        </a>
        <a id="social_twitter" class="fade_in_upwards" href="<?php echo $social_customizer_values['twitter']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_twit_banner.png" alt="">
        </a>
        <a id="social_youtube" class="fade_in_upwards" href="<?php echo $social_customizer_values['youtube']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_yt_banner.png" alt="">
        </a>
        <a id="social_instagram" class="fade_in_upwards" href="<?php echo $social_customizer_values['instagram']; ?>" class="inst">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_inst_banner.png" alt="">
        </a>
      </div>
    </div>
    <div class="overlay"></div>
  </div>

  <div id="below_banner" class="fade_in_upwards">
    <div class="top">
      <section id="below_banner_heading_section" class="fade_in_upwards">
        <h2><?php echo $below_banner_customizer_values['below_banner_headline']; ?></h2>
        <?php echo wpautop($below_banner_customizer_values['below_banner_description']); ?>
      </section>
      <div id="below_banner_featured_img" class="featured_img fade_in" style="background-image: url('<?php echo $below_banner_customizer_values['below_banner_img']; ?>');">
        <img id="below_banner_push_pin" class="push_pin fade_in_downwards" src="<?php echo IMAGES_DIR; ?>/home/ico_push_pin.png" alt="" />
      </div>
    </div>
    <ul class="bottom">
      <li id="assurance1" class="fade_in_upwards">
        <img src="<?php echo $assurance_customizer_values['assurance1_icon']; ?>" alt="">
        <div>
          <p class="label"><?php echo $assurance_customizer_values['assurance1_headline']; ?></p>
          <p><?php echo $assurance_customizer_values['assurance1_description']; ?></p>
        </div>
      </li>
      <li id="assurance2" class="fade_in_upwards">
        <img src="<?php echo $assurance_customizer_values['assurance2_icon']; ?>" alt="">
        <div>
          <p class="label"><?php echo $assurance_customizer_values['assurance2_headline']; ?></p>
          <p><?php echo $assurance_customizer_values['assurance2_description']; ?></p>
        </div>
      </li>
      <li id="assurance3" class="fade_in_upwards">
        <img src="<?php echo $assurance_customizer_values['assurance3_icon']; ?>" alt="">
        <div>
          <p class="label"><?php echo $assurance_customizer_values['assurance3_headline']; ?></p>
          <p><?php echo $assurance_customizer_values['assurance3_description']; ?></p>
        </div>
      </li>
    </ul>
  </div>

  <div id="featured_destination">
    <div class="main_wrap">
      <div id="featured_destination_img" class="featured_img fade_in_rightwards" style="background-image: url(<?php echo $featured_destination_details['featured_img']; ?>);"></div>
      <div id="featured_destination_details" class="details fade_in_leftwards">
        <section>
          <h2>
            Featured Destination: <br>
            <?php echo $featured_destination_details['post_title']; ?>
          </h2>
          <?php echo wpautop($featured_destination_details['post_content']); ?>
          <ul>
            <?php echo $featured_destination_details['best_features']; ?>
          </ul>
        </section>
      </div>
    </div>
  </div>

  <div id="explore" class="fade_in">
    <section class="main_wrap">
      <h2>Explore Popular <br> Destination Spots</h2>
      <div id="explore_carousel">
        <?php echo get_all_destinations(); ?>
      </div>
    </section>
  </div>

  <div id="around_the_world">
    <div class="main_wrap">
      <img class="bg" src="<?php echo IMAGES_DIR; ?>/home/bg_world.png" alt="">
      <div class="social">
        <a id="around_the_world_fb" class="fade_in_upwards" href="<?php echo $social_customizer_values['facebook']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_fb_world.png" alt="">
        </a>
        <a id="around_the_world_twit" class="fade_in_upwards" href="<?php echo $social_customizer_values['twitter']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_twit_world.png" alt="">
        </a>
        <a id="around_the_world_yt" class="fade_in_upwards" href="<?php echo $social_customizer_values['youtube']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_yt_world.png" alt="">
        </a>
        <a id="around_the_world_inst" class="fade_in_upwards" href="<?php echo $social_customizer_values['instagram']; ?>" class="inst">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_inst_world.png" alt="">
        </a>
      </div>
      <section id="around_the_world_details" class="fade_in_leftwards">
        <h2><?php echo $around_the_world_customizer_values['headline']; ?></h2>
        <?php echo wpautop($around_the_world_customizer_values['description']); ?>
        <a class="cta btn" href="<?php echo get_site_url() .'/booking'; ?>">
          <span class="text">Book Your Trip Now</span>
          <span class="btn_bg"></span>
        </a>
      </section>
    </div>
  </div>

  <div id="testimonial" class="fade_in">
    <section class="testimonial_wrap">
      <h2>Our Satisfied Clients</h2>
      <p>Here’s what our clients have to say on our rockstar service</p>
      <div id="clients_carousel">
        <?php echo get_all_testimonials(); ?>
      </div>
    </section>
  </div>

  <div id="contact_us">
    <div class="contact_us_wrap">
      <div id="contact_us_left" class="left fade_in_rightwards">
        <div class="shadow"></div>
        <div class="img" style="background-image: url(<?php echo IMAGES_DIR; ?>/home/contact_img.png);"></div>
      </div>
      <form id="contact_us_right" class="right fade_in_leftwards" action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
        <img src="<?php echo IMAGES_DIR; ?>/home/ico_push_pin.png" class="push_pin" alt="">
        <p class="subtitle">Got some questions?</p>
        <p class="form_title">Contact Us Now</p>
        <p class="note">Our 24/7 customer service are always ready to answer </p>
        <input type="text" name="fullname" placeholder="Fullname" id="fullname" class="check_input">
        <input type="email" name="email" placeholder="Email Address" id="email" class="check_input">
        <textarea name="message" placeholder="Message" id="message" class="check_input"></textarea>
        <input type="submit" class="submit" value="Message Now" id="submit" disabled>
        <input type="hidden" name="action" value="home_contact">
        <input type="hidden" name="home_contact_nonce" value="<?php echo wp_create_nonce('home_contact_nonce'); ?>">
      </form>
    </div>
  </div>

  <section id="latest_blog" class="main_wrap">
    <h2>Latest Blog</h2>
    <p>See what’s latest</p>
    <div class="posts">
      <?php echo get_all_posts(); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>