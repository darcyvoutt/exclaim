// Variable for the speed of the menus
var slideSpeed = 70;


// Function to do filter resizing and turn into dropdown
(function($) {
  $.fn.collapsable = function(options) {
    // iterate and reformat each matched element
    return this.each(function() {
      // cache this:
      var obj = $(this);
      var tree = obj.next('.nav-filters-list');
      obj.click(function(){
        if( obj.is(':visible') ) { tree.slideToggle( slideSpeed ); }
      });
      $(window).resize(function(){
        if ( $(window).width() <= 768 ) { tree.attr('style',''); };
      });
    });
  };
})(jQuery);


$(document).ready(function(){
  $('.slide-trigger').collapsable();
});


// Nav Menu Dropdown
$(document).ready(function() {
  $( '.nav-menu-item a' ).click(function() {
    $( '.nav-menu-item ul' ).slideToggle( slideSpeed );
  });
});

// Nav Filters Dropdown
$(document).ready(function () {
  if ( $(window).width() >= 768 ) {
    $('.nav-filters-list-item a').on("click", function () {
        $(this).next('ul').slideToggle( slideSpeed );
    });
    // $('.nav-filters-list-item ul').mouseleave(function () {
    //     $(this).slideToggle( slideSpeed );
    // });
  };
});