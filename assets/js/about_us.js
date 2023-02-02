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

  set_visible_class('featured_img', 100);
  set_visible_class_by_vp_visbility('mission', window.innerHeight, 0);
  set_visible_class_by_vp_visbility('vision', window.innerHeight, 0);
  set_visible_class_by_vp_visbility('history', window.innerHeight, 0);
  set_visible_class_by_vp_visbility('images', window.innerHeight, 150);
  set_visible_class_by_vp_visbility('accreditations', window.innerHeight, 200);

  window.addEventListener('scroll', function() {
    set_visible_class_by_vp_visbility('mission', window.innerHeight, 0);
    set_visible_class_by_vp_visbility('vision', window.innerHeight, 0);
    set_visible_class_by_vp_visbility('history', window.innerHeight, 0);
    set_visible_class_by_vp_visbility('images', window.innerHeight, 150);
    set_visible_class_by_vp_visbility('accreditations', window.innerHeight, 200);
  });

});