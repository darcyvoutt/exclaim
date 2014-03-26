<div class="filters">

    <div class="filters-content">

      <!-- Filters Selected -->
      <div class="filters-selected">
        <ul class="filters-selected-list">
          <li class="filters-selected-item">Arcade Fire</li>
          <li class="filters-selected-item">Bars</li>
          <li class="filters-selected-item">Toronto</li>
        </ul>
        <button class="filters-selected-button">Filter</button>
      </div>
      
      <!-- Filter Options -->
      <h2 class="filters-mobileTitle slide-trigger">Filters</h2>
      <ul class="filters-options">
        <li class="filters-options-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Genre</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="filters-options-search">
              <input type="text" class="typeahead" placeholder="Genre" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="filters-options-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Tags</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="filters-options-search">
              <input type="text" class="typeahead" placeholder="Tags" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="filters-options-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Date</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="filters-options-search">
              <input type="text" class="typeahead" placeholder="Date" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="filters-options-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Order</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="filters-options-search">
              <input type="text" class="typeahead" placeholder="Order" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>
      </ul>

      <script src="assets/js/nav.js"></script>
      <script>
        // Stop dropdown from closing on clicked or keydown (used by typeahead)
        $('.filters-options-search').on("click keydown", function(event) {
          event.stopPropagation();
        });       
      </script>



    </div> <!-- // End of .nav-filters -->

  </div> <!-- // End of .nav -->
</div> <!-- // End of .subHeader -->

<script src="assets/js/filters.js"></script>