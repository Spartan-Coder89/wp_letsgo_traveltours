<?php get_header(); ?>

<main>
  <?php get_template_part('/temp_parts/inner_page_banner'); ?>
  
  <div class="main_wrap">
    <div id="latest_blog">

      <?php 
        $blog_query = new WP_Query(array(
          'posts_per_page' => 12,
          'post_type' => 'post',
          'tag' => get_query_var('tag'),
          'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        ));

        if ($blog_query->have_posts()) {

          while ($blog_query->have_posts()) {
            
            $blog_query->the_post();
            $featured_img = !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : IMAGES_DIR .'/img_placeholder.jpg';
            
            echo
            '<article class="post">
              <div class="featured_img" style="background-image: url('. $featured_img .');"></div>
              <h2>'. get_the_title() .'</h2>
              <p>'. get_the_excerpt() .'</p>
              <a href="'. get_the_permalink() .'">Read More..</a>
            </article>';
          }

        }

        wp_reset_postdata();
      ?>
      
    </div>

    <?php $tag_slug = get_query_var('tag'); ?>

    <div id="pagination">
      <?php prev_pagination(get_query_var('paged'), get_site_url() .'/tag/'. $tag_slug); ?>
      <div class="page_list">
        <?php post_pagination($blog_query->max_num_pages, get_query_var('paged'), get_site_url() .'/tag/'. $tag_slug); ?>
      </div>
      <?php next_pagination(get_query_var('paged'), $blog_query->max_num_pages, get_site_url() .'/tag/'. $tag_slug); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>