window.addEventListener('DOMContentLoaded', function() {

  function set_visible_class(element, timeout) {
    setTimeout(() => {
      element.classList.add('visible');
    }, timeout);
  }

  set_visible_class(document.getElementById('featured_img'), 150);
  set_visible_class(document.getElementById('content'), 300);
});