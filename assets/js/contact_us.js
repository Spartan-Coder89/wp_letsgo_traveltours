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
});