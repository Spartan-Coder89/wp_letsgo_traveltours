<?php

function letsgo_create_testimonials_metabox() {

  add_meta_box(
    'meta_details',
    'Meta Details',
    'letsgo_create_testimonials_metabox_callback',
    'testimonials', 
    'normal'
  );

  function letsgo_create_testimonials_metabox_callback($post) { ?>

    <div id="meta_details_wrap">
      <div class="content_box">
        <label>Company Position</label>
        <input type="text" name="company_position" value="<?php echo get_post_meta($post->ID, '_company_position', true); ?>" />
      </div>
    </div>

    <input type="hidden" name="testimonials_post_nonce" value="<?php echo wp_create_nonce('testimonials_post_nonce'); ?>">
  <?php  
  }
}

letsgo_create_testimonials_metabox();