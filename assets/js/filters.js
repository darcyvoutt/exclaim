// Removal of selected list items
$(document).ready(function() {
  $(".nav-filters-selected-item").click(function() {
    $(this).remove();
  });
});