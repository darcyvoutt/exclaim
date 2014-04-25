$(document).ready(function() {
  $(".comments-title").click(function() {
    $(".comments-content").slideToggle("200", function() {

      var url = "assets/images/icons/";

      if($(".comments-content").is(':visible')){
          $('.comments-title b').css('background-image','url(' + url + 'icon-arrowUp.svg)');
      } else {
          $('.comments-title b').css('background-image','url(' + url + 'icon-arrowDown.svg)');
      }

    });  
  });
});