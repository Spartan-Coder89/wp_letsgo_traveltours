window.addEventListener('DOMContentLoaded', function() {
  
  function check_inputs() {
    let meeting_date = document.getElementById('meeting_date').value;
    let meeting_time = document.getElementById('meeting_time').value;
    let fname = document.getElementById('fname').value;
    let email = document.getElementById('email').value;
    let agree = document.getElementById('agree');

    if (meeting_date != '' && meeting_time != '' && fname != '' && email != '' && agree.checked) {
      document.getElementById('submit').removeAttribute('disabled');
    } else {
      document.getElementById('submit').setAttribute('disabled', '');
    }
  }

  document.querySelectorAll('.check_input_change').forEach(function(element) {
    element.addEventListener('change', function() {
      check_inputs();
    });
  });

  document.querySelectorAll('.check_input').forEach(function(element) {
    element.addEventListener('keyup', function() {
      check_inputs();
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

  set_visible_class(document.querySelector('.booking_conditions'), timecounter + 100);
  set_visible_class(document.querySelector('.agree'), timecounter + 100);
  set_visible_class(document.querySelector('.submit'), timecounter + 100);
});