//////////////////////////////////////////////////////
// Filtered Options
//////////////////////////////////////////////////////

// Remove filter options
$(document).ready(function() {
  $(".filters-tags-selected-item").click(function() {
    $(this).remove();
  });
});

// Reveal the filtered options
$(document).ready(function () {
  // Clicking on an option in the dropdown
  $('.dropdown-menu li a').on('click', function () {
    $('.filters-tags-selected').fadeIn( '150' , function () {
      $(this).css({display : 'block'});
    });
  });

  // Keypress in the autocomplete
  $('.filters-tags-list-search input').on('keypress', function () {
    $('.filters-tags-selected').fadeIn( '150' , function () {
      $(this).css({display : 'block'});
    });
  });
});

// Remove the filtered options
$(document).ready(function () {
  $('.filters-tags-selected-button').on('click', function () {
    $('.filters-tags-selected').css({display: 'none'});
  });
});


//////////////////////////////////////////////////////
// TEMP FOR TYPEAHEAD TESTING
//////////////////////////////////////////////////////
var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;
 
    // an array that will be populated with substring matches
    matches = [];
 
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
 
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        // the typeahead jQuery plugin expects suggestions to a
        // JavaScript object, refer to typeahead docs for more info
        matches.push({ value: str });
      }
    });
 
    cb(matches);
  };
};
 
var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

// Script to run typeahead
$('.typeahead').typeahead({
  hint: true,
  minLength: 2,
  highlight: true,
},
{
  name: 'states',
  displayKey: 'value',
  source: substringMatcher(states)
});