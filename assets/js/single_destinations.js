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
});