window.addEventListener('DOMContentLoaded', function() {
  
  document.querySelectorAll('#tabs .tabs_nav .day').forEach(function(day) {

    day.addEventListener('click', function() {
      let this_element = this;
      let day = this_element.dataset.day;

      if (document.querySelector('#tabs .tabs_nav .day.active')) {
        document.querySelector('#tabs .tabs_nav .day.active').classList.remove('active');
      }
      
      this_element.classList.add('active');

      if (document.querySelector('#tabs .itenerary_list ol')) {
        document.querySelector('#tabs .itenerary_list ol.show').classList.remove('show');
      }

      document.getElementById('day_'+ day).classList.add('show');
    });
  });

  function set_visible_class(element, timeout) {
    setTimeout(() => {
      element.classList.add('visible');
    }, timeout);
  }

  function is_in_viewport(element, relative_top) {
    const rect = element.getBoundingClientRect();
    return ( rect.top <= relative_top );
  }

  function set_visible_class_by_vp_visbility(element, relative_top, time) {
    if (is_in_viewport(element, relative_top)) {
      if (!element.classList.contains('visible')) {
        set_visible_class(element, time);
      }
    }
  }
  
  let timecounter = 150;
  document.querySelectorAll('#details .to_fade').forEach( (element) => {
    set_visible_class(element, timecounter);
    timecounter += 250;
  });

  set_visible_class_by_vp_visbility(document.querySelector('#video_promotion'), window.innerHeight - 100, 150);
  set_visible_class_by_vp_visbility(document.querySelector('#key_highlights'), window.innerHeight - 100, 150);
  set_visible_class_by_vp_visbility(document.querySelector('#itenerary'), window.innerHeight - 100, 150);
  set_visible_class_by_vp_visbility(document.querySelector('#call_to_action section'), window.innerHeight - 200, 100);
  set_visible_class_by_vp_visbility(document.querySelector('#call_to_action .cta_btn'), window.innerHeight - 200, 100);

  window.addEventListener('scroll', function() {
    set_visible_class_by_vp_visbility(document.querySelector('#video_promotion'), window.innerHeight - 100, 150);
    set_visible_class_by_vp_visbility(document.querySelector('#key_highlights'), window.innerHeight - 100, 150);
    set_visible_class_by_vp_visbility(document.querySelector('#itenerary'), window.innerHeight - 100, 150);
    set_visible_class_by_vp_visbility(document.querySelector('#call_to_action section'), window.innerHeight - 200, 100);
    set_visible_class_by_vp_visbility(document.querySelector('#call_to_action .cta_btn'), window.innerHeight - 200, 100);
  });

});