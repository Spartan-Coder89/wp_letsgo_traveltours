window.addEventListener('DOMContentLoaded', function() {

  function set_visible_class(element, time) {
    setTimeout(() => {
      element.classList.add('visible');
    }, time);
  }

  let timecounter = 100;
  document.querySelectorAll('#destination_list .destination').forEach( function(destination) {
    set_visible_class(destination, timecounter);
    timecounter += 250;
  });
});