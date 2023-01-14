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
        <h2><?php echo $banner_customizer_values['banner_headline']; ?></h2>
        <p><?php echo $banner_customizer_values['banner_subheadline']; ?></p>
        <a class="cta" href="<?php echo get_site_url() .'/booking' ?>">Book Your Trip Now</a>
      </section>
      <div class="social">
        <a href="<?php echo $social_customizer_values['facebook']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_fb_banner.png" alt="">
        </a>
        <a href="<?php echo $social_customizer_values['twitter']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_twit_banner.png" alt="">
        </a>
        <a href="<?php echo $social_customizer_values['youtube']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_yt_banner.png" alt="">
        </a>
        <a href="<?php echo $social_customizer_values['instagram']; ?>" class="inst">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_inst_banner.png" alt="">
        </a>
      </div>
    </div>
    <div class="overlay"></div>
  </div>

  <div id="below_banner">
    <div class="top">
      <section>
        <h2><?php echo $below_banner_customizer_values['below_banner_headline']; ?></h2>
        <?php echo wpautop($below_banner_customizer_values['below_banner_description']); ?>
      </section>
      <div class="featured_img" style="background-image: url('<?php echo $below_banner_customizer_values['below_banner_img']; ?>');">
        <img class="push_pin" src="<?php echo IMAGES_DIR; ?>/home/ico_push_pin.png" alt="" />
      </div>
    </div>
    <ul class="bottom">
      <li>
        <img src="<?php echo $assurance_customizer_values['assurance1_icon']; ?>" alt="">
        <div>
          <p class="label"><?php echo $assurance_customizer_values['assurance1_headline']; ?></p>
          <p><?php echo $assurance_customizer_values['assurance1_description']; ?></p>
        </div>
      </li>
      <li>
        <img src="<?php echo $assurance_customizer_values['assurance2_icon']; ?>" alt="">
        <div>
          <p class="label"><?php echo $assurance_customizer_values['assurance2_headline']; ?></p>
          <p><?php echo $assurance_customizer_values['assurance2_description']; ?></p>
        </div>
      </li>
      <li>
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
      <div class="featured_img" style="background-image: url(<?php echo $featured_destination_details['featured_img']; ?>);"></div>
      <div class="details">
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

  <div id="explore">
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
        <a href="<?php echo $social_customizer_values['facebook']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_fb_world.png" alt="">
        </a>
        <a href="<?php echo $social_customizer_values['twitter']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_twit_world.png" alt="">
        </a>
        <a href="<?php echo $social_customizer_values['youtube']; ?>">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_yt_world.png" alt="">
        </a>
        <a href="<?php echo $social_customizer_values['instagram']; ?>" class="inst">
          <img src="<?php echo IMAGES_DIR; ?>/home/ico_inst_world.png" alt="">
        </a>
      </div>
      <section>
        <h2><?php echo $around_the_world_customizer_values['headline']; ?></h2>
        <?php echo wpautop($around_the_world_customizer_values['description']); ?>
        <a class="cta" href="<?php echo get_site_url() .'/booking'; ?>">Book Your Trip Now</a>
      </section>
    </div>
  </div>

  <div id="testimonial">
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
      <div class="left">
        <div class="shadow"></div>
        <div class="img" style="background-image: url(<?php echo IMAGES_DIR; ?>/home/contact_img.png);"></div>
      </div>
      <form class="right" action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
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