$(document).ready(function() {
  var numberStreams = $('.streams').length;

  $('.output').text("There are " + numberStreams + " streams.")

  // if (numberStreams == 3) {
  //   $(.streams).css('max-width','185px');
  // } else if (numberStreams == 2) {
  //   $(.streams).css('width','45%');
  // } else {
  //   $(.streams).css('width','100%');
  // }
});