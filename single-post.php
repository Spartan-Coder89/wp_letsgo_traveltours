<?php 
  get_header(); 

  $post_thumbnail = get_the_post_thumbnail_url($post->ID); 
  $featured_img = !empty($post_thumbnail) ? $post_thumbnail : IMAGES_DIR .'/img_placeholder.jpg';
?>

<main>
  <?php get_template_part('temp_parts/inner_page_banner'); ?>

  <div id="featured_img" class="fade_in_upwards" style="background-image: url(<?php echo $featured_img; ?>);"></div>

  <section id="content" class="main_wrap fade_in_upwards">
    <?php echo get_the_content(null, false, $post->ID); ?>
  </section>
</main>

<?php get_footer(); ?>