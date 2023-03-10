<?php get_header(); ?>

<main>
  <?php get_template_part('/temp_parts/inner_page_banner'); ?>

  <section id="contact_us_wrap">
    <h2>Got some questions? Our 24/7 customer support are always ready to answer.</h2>
    <p class="note">Fields marked with <span class="required">*</span> are required</p>
    <form id="booking_form" class="booking_form" action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
      <div class="form_control fade_in_upwards">
        <label>First name: <span class="required">*</span></label>
        <input type="text" name="fname" id="fname" class="check_input">
      </div>
      <div class="form_control fade_in_upwards">
        <label>Last name:</label>
        <input type="text" name="lname">
      </div>
      <div class="form_control fade_in_upwards">
        <label>Email Address: <span class="required">*</span></label>
        <input type="text" name="email" id="email" class="check_input">
      </div>
      <div class="form_control fade_in_upwards">
        <label>Message: <span class="required">*</span></label>
        <textarea name="message" id="message" class="check_input"></textarea>
      </div>
      <button type="submit" class="submit fade_in_upwards" id="submit" disabled="true">Send Message</button>
      <input type="hidden" name="action" value="contact">
      <input type="hidden" name="contact_us_nonce" value="<?php echo wp_create_nonce('contact_us_nonce'); ?>">
    </form>
  </section>
</main>

<?php get_footer(); ?>