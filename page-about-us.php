<?php get_header(); ?>

<main>
  <?php get_template_part('/temp_parts/inner_page_banner'); ?>

  <div id="content" class="main_wrap">
    <div class="featured_img" style="background-image: url('<?php echo about_banner_img(); ?>');"></div>
    <div class="inner_wrap">
      <section>
        <h2>Mission</h2>
        <?php echo wpautop(get_theme_mod('letsgo_mission_setting')); ?>
      </section>
      <section>
        <h2>Vision</h2>
        <?php echo wpautop(get_theme_mod('letsgo_vision_setting')); ?>
      </section>
      <section class="history">
        <h2>History</h2>
        <?php echo wpautop(get_theme_mod('letsgo_history_setting')); ?>
      </section>
    </div>
    <div class="images">
      <?php echo about_us_images(); ?>
    </div>
    <section class="accreditations">
      <h2>Accreditations</h2>
      <div class="inner_wrap">
        <?php echo about_us_accreditation_images(); ?>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>