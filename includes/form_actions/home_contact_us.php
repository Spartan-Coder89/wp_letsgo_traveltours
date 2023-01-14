<?php

add_action('admin_post_nopriv_home_contact', 'home_contact');
add_action('admin_post_home_contact', 'home_contact');

function home_contact() {

  if (!isset($_POST['home_contact_nonce'])) {
    return;
  }

  if (!wp_verify_nonce($_POST['home_contact_nonce'], 'home_contact_nonce')) {
    return;
  }

  if ($_POST['fullname']) {
    $fullname = htmlspecialchars(strip_tags($_POST['fullname']));
  }

  if ($_POST['email']) {
    $email = htmlspecialchars(strip_tags($_POST['email']));
  }

  if ($_POST['message']) {
    $message = htmlspecialchars(strip_tags($_POST['message']));
  }

  $to = get_option('admin_email');
  $subject = $fullname .' sent a message';
  $headers = array('Content-Type: text/html; charset=UTF-8');

  $body = 
  '<div style="background-color: #ececec; width: 100%; height: 100%; padding: 50px 20px;">
    <table style="width: 600px; margin: 0 auto;">
      <thead>
          <tr style="border: 0; background-color: #fff;">
            <td style="padding: 30px 10px 20px 10px; text-align: center;" colspan="2">
              <img style="width:100%; max-width:180px;" src="'. wp_get_attachment_image_url(get_theme_mod('letsgo_header_logo_white_setting')) .'" />
            </td>
          </tr>
      </thead>
      <tbody>
        <tr style="background-color: #fff;">
          <td style="padding: 20px;" colspan="2">
            Hi admin, someone sent you a message.
            Please see details below:
          </td>
        </tr>
        <tr style="background-color: #fff;">
          <td style="padding: 10px 20px; width: 200px;">Full Name:</td>
          <td style="padding: 10px 10px;">'. $fullname .'</td>
        </tr>
        <tr style="background-color: #fff;">
          <td style="padding: 10px 20px;">Email Address:</td>
          <td style="padding: 10px 10px;">'. $email .'</td>
        </tr>
        <tr style="background-color: #fff;">
          <td style="padding: 10px 20px;">Message:</td>
          <td style="padding: 10px 10px;">'. $message .'</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td style="text-align: center; padding: 10px; font-size: 12px; background: #FF9F1C; color: #fff;" colspan="2">'. get_bloginfo('name') .' - '. date('Y') .'</td>
        </tr>
      </tfoot>
    </table>
  </div>';

  if (wp_mail( $to, $subject, $body, $headers )) {
    wp_safe_redirect(get_site_url() .'?prompt='. urlencode('Your message was successfully sent.'));
    exit;
  } else {
    wp_safe_redirect(get_site_url() .'?prompt='. urlencode('Something went wrong with sending your message.'));
    exit;
  }

}