//////////////////////////////////////////////////////
// Variable for the speed of the menus
//////////////////////////////////////////////////////
var slideSpeed = 0;
var tabletSize = 768;


//////////////////////////////////////////////////////
// Resizing of filters and turn into dropdown
//////////////////////////////////////////////////////
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
        if ( $(window).width() <= tabletSize ) { tree.attr('style',''); };
      });
    });
  };
})(jQuery);

// Run the script
$(document).ready(function(){
  $('.slide-trigger').collapsable();
});


//////////////////////////////////////////////////////
// Nav Menu Dropdown
//////////////////////////////////////////////////////
$(document).ready(function() {
  $( '.nav-menu-item a' ).click(function() {
    $( '.nav-menu-item ul' ).slideToggle( slideSpeed );
  });
});