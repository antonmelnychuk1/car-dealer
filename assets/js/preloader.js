// PRELOADER

$(document).ready(function() {
    $('.preloader').delay(1000).fadeOut('slow', function() {
      $(this).attr('style', 'display: none !important');
    });
  });