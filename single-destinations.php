<?php get_header(); ?>

<main>
    <?php get_template_part('temp_parts/inner_page_banner'); ?>

    <div id="details" class="single_wrap">
      <div class="top">
        <div 
          class="featured_img" 
          <?php $featured_img = get_the_post_thumbnail_url($post->ID, 'large'); ?>
          style="background-image: url('<?php echo !empty($featured_img) ? $featured_img : IMAGES_DIR .'/img_placeholder.jpg'; ?>');"></div>
        <ul class="detail_list">
          <?php destination_general_details_frontend($post->ID); ?>
        </ul>
      </div>
      <div class="description">
        <p class="label">Description</p>
        <?php echo wpautop(get_the_content($post->ID)); ?>
      </div>
    </div>

    <div id="video_promotion" class="main_wrap">
      <?php output_video_attachment_frontend($post); ?>
    </div>

    <section id="key_highlights" class="single_wrap">
      <h2>Key Highlights</h2>
      <ul class="highlights">
        <?php destination_key_highlights_frontend($post->ID); ?>
      </ul>
    </section>

    <section id="itenerary" class="single_wrap">
      <h2>Itenerary</h2>
      <div id="tabs">
        <div class="tabs_nav">
          <?php itenerary_days_tabs($post->ID); ?>
        </div>
        <div class="itenerary_list">
          <?php destination_itenerary_frontend($post->ID); ?>
        </div>
      </div>
    </section>

    <div id="call_to_action">
      <div class="single_wrap">
        <section>
          <h2>Ready To Go?</h2>
          <p>Click the button to book your destination</p>
        </section>
        <a href="<?php echo get_site_url() .'/booking'; ?>" class="cta_btn">BOOK YOUR TRIP NOW</a>
      </div>
    </div>
  </main>

<?php get_footer(); ?>