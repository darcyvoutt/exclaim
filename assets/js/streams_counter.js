$(document).ready(function() {
  var numberStreams = $('.stream').length;

  if (numberStreams == 1) {
    $('.stream').css('max-width','100%');
  } else if (numberStreams == 2) {
    $('.stream').css('max-width','48.5%');
  } else {
    $('.stream').css('max-width','182px');
  }
});