// $(document).ready(function() {
//   var jump_speed = 200;

//   function toggleShareIt(){
//       if($('.article-share').is(':visible')){
//           $('.article-share').hide();
//       }else{
//           $('.article-share').show();
//       }
//   }

//   function goToComments(){
//       var scroll_to = ($('.comments-title').offset().top) - 50;            
//       $('html,body').animate({scrollTop: scroll_to}, jump_speed);
//   }
// });


$(document).ready(function() {
  var speed = 200;

  $(".share-options").on("click", function() {

    if($('.article-share-channels').is(':visible')){
        $('.article-share-channels').hide();
      }else{
          $('.article-share-channels').show();
      }    
  });
});