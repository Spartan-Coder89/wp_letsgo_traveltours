window.onpageshow = function() {
  
  if (window.scrollY >= 80) {
    document.getElementById('header').classList.add('scrolled');
  } else {
    document.getElementById('header').classList.remove('scrolled');
  }

  window.addEventListener('scroll', function() {
    if (window.scrollY >= 80) {
      document.getElementById('header').classList.add('scrolled');
    } else {
      document.getElementById('header').classList.remove('scrolled');
    }
  });

  if (document.getElementById('open_mobile_menu')) {

    document.getElementById('open_mobile_menu').addEventListener('click', function() {
      document.querySelector('#header .sp_layout .main_nav').classList.toggle('open');
    });
  }
}