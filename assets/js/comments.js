$(document).ready(function() {
  $(".comments-title").click(function() {
    $(".comments-content").slideToggle("200", function() {

      if($(".comments-content").is(':visible')){
          $('b.icon-arrowUp').css('background-image','url(assets/images/icons/icon-arrowDown.svg)');
      } else {
          $('b.icon-arrowUp').css('background-image','url(assets/images/icons/icon-arrowUp.svg)');
      }

    });  
  });
});