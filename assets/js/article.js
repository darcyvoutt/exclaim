$(document).ready(function() {
  var speed = 200;

  // Open Share div
  $(".share-options").on("click", function() {

    if($('.article-share-channels').is(':visible')){
        $('.article-share-channels').hide( speed );
      }else{
          $('.article-share-channels').show( speed );
      }    
  });


  // Scroll to comments
  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();

    var target = this.hash,
    $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top - 75
    }, 900, 'swing', function () {
        window.location.hash = target;
    });
  });

});