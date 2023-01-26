    <footer id="footer"> 
      <div class="main_wrap">
        <div class="col1">
          <a class=" footer_logo" href="">
            <img src="<?php echo footer_logo_url(); ?>" alt="">
          </a>
          <p class="description"><?php echo footer_description(); ?></p>
          <p class="copyright">Copyright by Simon Jiloma</p>
        </div>
        <div class="col2">
          <div class="quick_links">
            <p class="label">Quick Links</p>
            <nav><?php output_menu('Main Navigation') ?></nav>
          </div>
          <div class="contact_us">
            <p class="label">Contact Us</p>
            <div>
              <a href="tel:<?php echo contact_info()['phone']; ?>"><?php echo contact_info()['phone']; ?></a>
              <span class="border"></span>
              <a href="mailto:<?php echo contact_info()['email']; ?>"><?php echo contact_info()['email']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>

    <?php if (!empty($_GET['prompt'])) { ?>
      <div id="prompt">
        <div class="prompt_wrap">
          <div class="prompt_content">
            <img id="prompt_close" src="<?php echo IMAGES_DIR ?>/ico_close.png" alt="">
            <img src="<?php echo IMAGES_DIR ?>/ico_info.png" alt="">
            <p><?php echo $_GET['prompt']; ?></p>
          </div>
        </div>

        <?php
          global $wp;
          $current_page = home_url( $wp->request );
        ?>

        <input type="hidden" id="current_page_url" value="<?php echo $current_page ?>">
      </div>
    <?php } ?>

  </body>

</html>