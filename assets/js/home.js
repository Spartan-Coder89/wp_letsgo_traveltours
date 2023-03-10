window.onpageshow = function() {
  
  if (jQuery('#explore_carousel')) {
    
    jQuery('#explore_carousel').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      dots: false,
      prevArrow: '<svg id="explore_carousel_prev" class="explore_carousel_arrow" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5156 22.349C16.783 22.6164 17.1175 22.7438 17.519 22.7311C17.9195 22.7195 18.2535 22.5799 18.5209 22.3126C18.7882 22.0452 18.9219 21.7049 18.9219 21.2918C18.9219 20.8786 18.7882 20.5383 18.5209 20.2709L17.2084 18.9584H21.9115C22.3247 18.9584 22.665 18.8184 22.9323 18.5384C23.1997 18.2594 23.3334 17.9133 23.3334 17.5001C23.3334 17.0869 23.1938 16.7403 22.9148 16.4603C22.6348 16.1813 22.2882 16.0418 21.875 16.0418H17.2084L18.5573 14.6928C18.8247 14.4254 18.9525 14.091 18.9409 13.6895C18.9282 13.2889 18.7882 12.9549 18.5209 12.6876C18.2535 12.4202 17.9132 12.2865 17.5 12.2865C17.0868 12.2865 16.7466 12.4202 16.4792 12.6876L12.6875 16.4793C12.3959 16.7709 12.25 17.1112 12.25 17.5001C12.25 17.889 12.3959 18.2293 12.6875 18.5209L16.5156 22.349ZM17.5 32.0834C15.4827 32.0834 13.5868 31.7004 11.8125 30.9343C10.0382 30.1691 8.49481 29.1303 7.18231 27.8178C5.86981 26.5053 4.83099 24.9619 4.06585 23.1876C3.29974 21.4133 2.91669 19.5174 2.91669 17.5001C2.91669 15.4827 3.29974 13.5869 4.06585 11.8126C4.83099 10.0383 5.86981 8.49487 7.18231 7.18237C8.49481 5.86987 10.0382 4.83057 11.8125 4.06446C13.5868 3.29932 15.4827 2.91675 17.5 2.91675C19.5174 2.91675 21.4132 3.29932 23.1875 4.06446C24.9618 4.83057 26.5052 5.86987 27.8177 7.18237C29.1302 8.49487 30.1691 10.0383 30.9342 11.8126C31.7003 13.5869 32.0834 15.4827 32.0834 17.5001C32.0834 19.5174 31.7003 21.4133 30.9342 23.1876C30.1691 24.9619 29.1302 26.5053 27.8177 27.8178C26.5052 29.1303 24.9618 30.1691 23.1875 30.9343C21.4132 31.7004 19.5174 32.0834 17.5 32.0834ZM17.5 29.1668C20.7327 29.1668 23.4855 28.0307 25.7586 25.7586C28.0307 23.4856 29.1667 20.7327 29.1667 17.5001C29.1667 14.2674 28.0307 11.5146 25.7586 9.24154C23.4855 6.96946 20.7327 5.83342 17.5 5.83342C14.2674 5.83342 11.515 6.96946 9.24294 9.24154C6.96988 11.5146 5.83335 14.2674 5.83335 17.5001C5.83335 20.7327 6.96988 23.4856 9.24294 25.7586C11.515 28.0307 14.2674 29.1668 17.5 29.1668Z" fill="#636363"/></svg>',
      nextArrow: '<svg id="explore_carousel_next" class="explore_carousel_arrow" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5209 22.3126L22.3125 18.5209C22.6042 18.2293 22.75 17.889 22.75 17.5001C22.75 17.1112 22.6042 16.7709 22.3125 16.4793L18.4844 12.6511C18.217 12.3838 17.8831 12.2559 17.4825 12.2676C17.081 12.2802 16.7466 12.4202 16.4792 12.6876C16.2118 12.9549 16.0781 13.2952 16.0781 13.7084C16.0781 14.1216 16.2118 14.4619 16.4792 14.7293L17.7917 16.0418H13.0886C12.6754 16.0418 12.3351 16.1813 12.0677 16.4603C11.8004 16.7403 11.6667 17.0869 11.6667 17.5001C11.6667 17.9133 11.8067 18.2594 12.0867 18.5384C12.3657 18.8184 12.7118 18.9584 13.125 18.9584H17.7917L16.4427 20.3074C16.1754 20.5747 16.0475 20.9092 16.0592 21.3107C16.0718 21.7113 16.2118 22.0452 16.4792 22.3126C16.7466 22.5799 17.0868 22.7136 17.5 22.7136C17.9132 22.7136 18.2535 22.5799 18.5209 22.3126ZM17.5 32.0834C15.4827 32.0834 13.5868 31.7004 11.8125 30.9343C10.0382 30.1691 8.49481 29.1303 7.18231 27.8178C5.86981 26.5053 4.83099 24.9619 4.06585 23.1876C3.29974 21.4133 2.91669 19.5174 2.91669 17.5001C2.91669 15.4827 3.29974 13.5869 4.06585 11.8126C4.83099 10.0383 5.86981 8.49487 7.18231 7.18237C8.49481 5.86987 10.0382 4.83057 11.8125 4.06446C13.5868 3.29932 15.4827 2.91675 17.5 2.91675C19.5174 2.91675 21.4132 3.29932 23.1875 4.06446C24.9618 4.83057 26.5052 5.86987 27.8177 7.18237C29.1302 8.49487 30.1691 10.0383 30.9342 11.8126C31.7003 13.5869 32.0834 15.4827 32.0834 17.5001C32.0834 19.5174 31.7003 21.4133 30.9342 23.1876C30.1691 24.9619 29.1302 26.5053 27.8177 27.8178C26.5052 29.1303 24.9618 30.1691 23.1875 30.9343C21.4132 31.7004 19.5174 32.0834 17.5 32.0834ZM17.5 29.1668C20.7327 29.1668 23.4855 28.0307 25.7586 25.7586C28.0307 23.4856 29.1667 20.7327 29.1667 17.5001C29.1667 14.2674 28.0307 11.5146 25.7586 9.24154C23.4855 6.96946 20.7327 5.83342 17.5 5.83342C14.2674 5.83342 11.515 6.96946 9.24294 9.24154C6.96988 11.5146 5.83335 14.2674 5.83335 17.5001C5.83335 20.7327 6.96988 23.4856 9.24294 25.7586C11.515 28.0307 14.2674 29.1668 17.5 29.1668Z" fill="#636363"/></svg>',
      responsive: [
        {
          breakpoint: 781,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  }

  if (jQuery('#clients_carousel')) {
    
    jQuery('#clients_carousel').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      prevArrow: '<svg id="clients_carousel_prev" class="clients_carousel_arrow" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5156 22.349C16.783 22.6164 17.1175 22.7438 17.519 22.7311C17.9195 22.7195 18.2535 22.5799 18.5209 22.3126C18.7882 22.0452 18.9219 21.7049 18.9219 21.2918C18.9219 20.8786 18.7882 20.5383 18.5209 20.2709L17.2084 18.9584H21.9115C22.3247 18.9584 22.665 18.8184 22.9323 18.5384C23.1997 18.2594 23.3334 17.9133 23.3334 17.5001C23.3334 17.0869 23.1938 16.7403 22.9148 16.4603C22.6348 16.1813 22.2882 16.0418 21.875 16.0418H17.2084L18.5573 14.6928C18.8247 14.4254 18.9525 14.091 18.9409 13.6895C18.9282 13.2889 18.7882 12.9549 18.5209 12.6876C18.2535 12.4202 17.9132 12.2865 17.5 12.2865C17.0868 12.2865 16.7466 12.4202 16.4792 12.6876L12.6875 16.4793C12.3959 16.7709 12.25 17.1112 12.25 17.5001C12.25 17.889 12.3959 18.2293 12.6875 18.5209L16.5156 22.349ZM17.5 32.0834C15.4827 32.0834 13.5868 31.7004 11.8125 30.9343C10.0382 30.1691 8.49481 29.1303 7.18231 27.8178C5.86981 26.5053 4.83099 24.9619 4.06585 23.1876C3.29974 21.4133 2.91669 19.5174 2.91669 17.5001C2.91669 15.4827 3.29974 13.5869 4.06585 11.8126C4.83099 10.0383 5.86981 8.49487 7.18231 7.18237C8.49481 5.86987 10.0382 4.83057 11.8125 4.06446C13.5868 3.29932 15.4827 2.91675 17.5 2.91675C19.5174 2.91675 21.4132 3.29932 23.1875 4.06446C24.9618 4.83057 26.5052 5.86987 27.8177 7.18237C29.1302 8.49487 30.1691 10.0383 30.9342 11.8126C31.7003 13.5869 32.0834 15.4827 32.0834 17.5001C32.0834 19.5174 31.7003 21.4133 30.9342 23.1876C30.1691 24.9619 29.1302 26.5053 27.8177 27.8178C26.5052 29.1303 24.9618 30.1691 23.1875 30.9343C21.4132 31.7004 19.5174 32.0834 17.5 32.0834ZM17.5 29.1668C20.7327 29.1668 23.4855 28.0307 25.7586 25.7586C28.0307 23.4856 29.1667 20.7327 29.1667 17.5001C29.1667 14.2674 28.0307 11.5146 25.7586 9.24154C23.4855 6.96946 20.7327 5.83342 17.5 5.83342C14.2674 5.83342 11.515 6.96946 9.24294 9.24154C6.96988 11.5146 5.83335 14.2674 5.83335 17.5001C5.83335 20.7327 6.96988 23.4856 9.24294 25.7586C11.515 28.0307 14.2674 29.1668 17.5 29.1668Z" fill="#636363"/></svg>',
      nextArrow: '<svg id="clients_carousel_next" class="clients_carousel_arrow" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5209 22.3126L22.3125 18.5209C22.6042 18.2293 22.75 17.889 22.75 17.5001C22.75 17.1112 22.6042 16.7709 22.3125 16.4793L18.4844 12.6511C18.217 12.3838 17.8831 12.2559 17.4825 12.2676C17.081 12.2802 16.7466 12.4202 16.4792 12.6876C16.2118 12.9549 16.0781 13.2952 16.0781 13.7084C16.0781 14.1216 16.2118 14.4619 16.4792 14.7293L17.7917 16.0418H13.0886C12.6754 16.0418 12.3351 16.1813 12.0677 16.4603C11.8004 16.7403 11.6667 17.0869 11.6667 17.5001C11.6667 17.9133 11.8067 18.2594 12.0867 18.5384C12.3657 18.8184 12.7118 18.9584 13.125 18.9584H17.7917L16.4427 20.3074C16.1754 20.5747 16.0475 20.9092 16.0592 21.3107C16.0718 21.7113 16.2118 22.0452 16.4792 22.3126C16.7466 22.5799 17.0868 22.7136 17.5 22.7136C17.9132 22.7136 18.2535 22.5799 18.5209 22.3126ZM17.5 32.0834C15.4827 32.0834 13.5868 31.7004 11.8125 30.9343C10.0382 30.1691 8.49481 29.1303 7.18231 27.8178C5.86981 26.5053 4.83099 24.9619 4.06585 23.1876C3.29974 21.4133 2.91669 19.5174 2.91669 17.5001C2.91669 15.4827 3.29974 13.5869 4.06585 11.8126C4.83099 10.0383 5.86981 8.49487 7.18231 7.18237C8.49481 5.86987 10.0382 4.83057 11.8125 4.06446C13.5868 3.29932 15.4827 2.91675 17.5 2.91675C19.5174 2.91675 21.4132 3.29932 23.1875 4.06446C24.9618 4.83057 26.5052 5.86987 27.8177 7.18237C29.1302 8.49487 30.1691 10.0383 30.9342 11.8126C31.7003 13.5869 32.0834 15.4827 32.0834 17.5001C32.0834 19.5174 31.7003 21.4133 30.9342 23.1876C30.1691 24.9619 29.1302 26.5053 27.8177 27.8178C26.5052 29.1303 24.9618 30.1691 23.1875 30.9343C21.4132 31.7004 19.5174 32.0834 17.5 32.0834ZM17.5 29.1668C20.7327 29.1668 23.4855 28.0307 25.7586 25.7586C28.0307 23.4856 29.1667 20.7327 29.1667 17.5001C29.1667 14.2674 28.0307 11.5146 25.7586 9.24154C23.4855 6.96946 20.7327 5.83342 17.5 5.83342C14.2674 5.83342 11.515 6.96946 9.24294 9.24154C6.96988 11.5146 5.83335 14.2674 5.83335 17.5001C5.83335 20.7327 6.96988 23.4856 9.24294 25.7586C11.515 28.0307 14.2674 29.1668 17.5 29.1668Z" fill="#636363"/></svg>'
    });
  }

  if (document.getElementById('contact_us')) {
    
    document.querySelectorAll('.check_input').forEach(function(element) {

      element.addEventListener('keyup', function() {
  
        let fullname = document.getElementById('fullname').value;
        let email = document.getElementById('email').value;
        let message = document.getElementById('message').value;
  
        if (fullname != '' && email != '' && message != '') {
          document.getElementById('submit').removeAttribute('disabled');
        } else {
          document.getElementById('submit').setAttribute('disabled', '');
        }
      });
    });

  }
}


window.addEventListener('DOMContentLoaded', function() {

  function set_visible_class(id, time) {
    setTimeout(() => {
      document.getElementById(id).classList.add('visible');
    }, time);
  }

  function is_in_viewport(element, relative_top) {
    const rect = element.getBoundingClientRect();
    return ( rect.top <= relative_top );
  }

  function set_visible_class_by_vp_visbility(id, relative_top, time) {
    if (is_in_viewport(document.getElementById(id), relative_top)) {
      if (!document.getElementById(id).classList.contains('visible')) {
        set_visible_class(id, time);
      }
    }
  }

  set_visible_class('banner_headline', 200);
  set_visible_class('banner_subheadline', 500);
  set_visible_class('banner_cta', 800);
  set_visible_class('social_fb', 2000);
  set_visible_class('social_twitter', 1700);
  set_visible_class('social_youtube', 1400);
  set_visible_class('social_instagram', 1100);

  set_visible_class_by_vp_visbility('below_banner', window.innerHeight - 100, 200);
  set_visible_class_by_vp_visbility('below_banner_heading_section', window.innerHeight, 300);
  set_visible_class_by_vp_visbility('below_banner_featured_img', window.innerHeight, 800);
  set_visible_class_by_vp_visbility('below_banner_push_pin', window.innerHeight, 800);

  set_visible_class_by_vp_visbility('assurance1', window.innerHeight, 100);
  set_visible_class_by_vp_visbility('assurance2', window.innerHeight, 350);
  set_visible_class_by_vp_visbility('assurance3', window.innerHeight, 550);

  set_visible_class_by_vp_visbility('featured_destination_img', window.innerHeight - 150, 100);
  set_visible_class_by_vp_visbility('featured_destination_details', window.innerHeight - 150, 300);

  set_visible_class_by_vp_visbility('explore', window.innerHeight - 150, 0);
  
  set_visible_class_by_vp_visbility('around_the_world_details', window.innerHeight, 0);
  set_visible_class_by_vp_visbility('around_the_world_fb', window.innerHeight, 0);
  set_visible_class_by_vp_visbility('around_the_world_twit', window.innerHeight, 0);
  set_visible_class_by_vp_visbility('around_the_world_yt', window.innerHeight, 0);
  set_visible_class_by_vp_visbility('around_the_world_inst', window.innerHeight, 0);

  set_visible_class_by_vp_visbility('testimonial', window.innerHeight, 0);

  set_visible_class_by_vp_visbility('contact_us_left', window.innerHeight - 150, 0);
  set_visible_class_by_vp_visbility('contact_us_right', window.innerHeight - 150, 0);

  set_visible_class_by_vp_visbility('latest_blog_post_1', window.innerHeight, 100);
  set_visible_class_by_vp_visbility('latest_blog_post_2', window.innerHeight, 350);
  set_visible_class_by_vp_visbility('latest_blog_post_3', window.innerHeight, 550);

  window.addEventListener('scroll', function() {

    set_visible_class_by_vp_visbility('below_banner', window.innerHeight - 100, 200);
    set_visible_class_by_vp_visbility('below_banner_heading_section', window.innerHeight, 300);
    set_visible_class_by_vp_visbility('below_banner_featured_img', window.innerHeight, 800);
    set_visible_class_by_vp_visbility('below_banner_push_pin', window.innerHeight, 800);
  
    set_visible_class_by_vp_visbility('assurance1', window.innerHeight, 100);
    set_visible_class_by_vp_visbility('assurance2', window.innerHeight, 350);
    set_visible_class_by_vp_visbility('assurance3', window.innerHeight, 550);
  
    set_visible_class_by_vp_visbility('featured_destination_img', window.innerHeight - 150, 100);
    set_visible_class_by_vp_visbility('featured_destination_details', window.innerHeight - 150, 300);

    set_visible_class_by_vp_visbility('explore', window.innerHeight, 0);

    set_visible_class_by_vp_visbility('around_the_world_details', window.innerHeight, 0);
    set_visible_class_by_vp_visbility('around_the_world_fb', window.innerHeight, 0);
    set_visible_class_by_vp_visbility('around_the_world_twit', window.innerHeight, 0);
    set_visible_class_by_vp_visbility('around_the_world_yt', window.innerHeight, 0);
    set_visible_class_by_vp_visbility('around_the_world_inst', window.innerHeight, 0);

    set_visible_class_by_vp_visbility('testimonial', window.innerHeight - 150, 0);

    set_visible_class_by_vp_visbility('contact_us_left', window.innerHeight - 150, 0);
    set_visible_class_by_vp_visbility('contact_us_right', window.innerHeight - 150, 0);

    set_visible_class_by_vp_visbility('latest_blog_post_1', window.innerHeight, 100);
    set_visible_class_by_vp_visbility('latest_blog_post_2', window.innerHeight, 350);
    set_visible_class_by_vp_visbility('latest_blog_post_3', window.innerHeight, 550);
  });

});