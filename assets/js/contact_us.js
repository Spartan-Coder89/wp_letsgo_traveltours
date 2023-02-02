window.addEventListener('DOMContentLoaded', function() {
  
  document.querySelectorAll('.check_input').forEach(function(element) {

    element.addEventListener('keyup', function() {

      let fname = document.getElementById('fname').value;
      let email = document.getElementById('email').value;
      let message = document.getElementById('message').value;

      if (fname != '' && email != '' && message != '') {
        document.getElementById('submit').removeAttribute('disabled');
      } else {
        document.getElementById('submit').setAttribute('disabled', '');
      }
    });
  });

  function set_visible_class(element, time) {
    setTimeout(() => {
      element.classList.add('visible');
    }, time);
  }

  let timecounter = 100;
  document.querySelectorAll('.form_control').forEach( function(form_control) {
    set_visible_class(form_control, timecounter);
    timecounter += 150;
  });

  set_visible_class(document.querySelector('.submit'), timecounter + 150);
});