// ANCHOR

$(document).ready(function() {
    $('.header-nav-link').click(function() {
      
      var elementClick = $(this).attr("href")
      var destination = $(elementClick).offset().top - 80;
      $("html:not(:animated),body:not(:animated)").animate({
        scrollTop: destination
      }, 800);
      return false; 
    });
    $('.burger-menu_link').click(function() {
      
      var elementClick = $(this).attr("href")
      var destination = $(elementClick).offset().top - 80;
      $("html:not(:animated),body:not(:animated)").animate({
        scrollTop: destination
      }, 800);
      return false; 
    });
  });
  