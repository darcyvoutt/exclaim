//////////////////////////////////////////////////////
// Stop dropdown from closing on clicked or keydown (used by typeahead)
//////////////////////////////////////////////////////

$('.filters-options-search').on("click keydown", function(event) {
  event.stopPropagation();
});   

//////////////////////////////////////////////////////
// Filtered Options
//////////////////////////////////////////////////////

// Remove filter options
$(document).ready(function() {
  $(".filters-selected-item").click(function() {
    $(this).remove();
  });
});

// Reveal the filtered options
$(document).ready(function () {
  // Clicking on an option in the dropdown
  $('.filters-options-item ul li a').on('click', function () {
    $('.filters-selected').fadeIn( '150' , function () {
      $(this).css({display : 'block'});
    });
  });

  // Keypress in the autocomplete
  $('.filters-options-search input').on('keypress', function () {
    $('.filters-selected').fadeIn( '150' , function () {
      $(this).css({display : 'block'});
    });
  });
});

// Remove the filtered options
$(document).ready(function () {
  $('.filters-selected-button').on('click', function () {
    $('.filters-selected').css({display: 'none'});
  });
});