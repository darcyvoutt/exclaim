var slideSpeed = 70;

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

$(document).ready(function() {
  $( '.nav-menu-item a' ).click(function() {
    $( '.nav-menu-item ul' ).slideToggle( slideSpeed );
  });
});