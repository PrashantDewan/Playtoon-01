$(document).ready(function() {

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#nav').addClass('bg-header');
      $('.navbar .container-fluid').addClass('scrolled');
    } else {
      $('#nav').removeClass('bg-header');
      $('.navbar .container-fluid').removeClass('scrolled');
    }


  });
$('.nav-link').click(function() {
  $('.nav-link img').removeClass('active-nav-link'); // Remove the class from other nav-link images
  $(this).find('img').addClass('active-nav-link'); // Add the class to the clicked nav-link image
});

      $(".navbar-toggler").click(function() {
         $('#nav').addClass('bg-header');
    });






});
