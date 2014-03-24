<div class="nav">
    
    <div class="nav-menu">
      <ul>
        <li class="nav-menu-item"><a href="#">Menu</a>
          <ul>
            <li><a href="index.php">News</a></li>
            <li><a href="article.php">Article</a></li>
            <li><a href="artist.php">Artist Profile</a></li>
            <li><a href="search.php">Search Results</a></li>
          </ul>
        </li>          
      </ul>      
    </div>

    <div class="nav-filters">

      <!-- Filters Selected -->
      <div class="nav-filters-selected">
        <ul class="nav-filters-selected-list">
          <li class="nav-filters-selected-item">Arcade Fire</li>
          <li class="nav-filters-selected-item">Bars</li>
          <li class="nav-filters-selected-item">Toronto</li>
        </ul>
        <button class="nav-filters-selected-button">Filter</button>
      </div>
      
      <!-- Filter Options -->
      <h2 class="nav-filters-mobileTitle slide-trigger">Filters</h2>
      <ul class="nav-filters-list">
        <li class="nav-filters-list-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Genre</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="nav-filters-list-search">
              <input type="text" class="typeahead" placeholder="Genre" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="nav-filters-list-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Tags</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="nav-filters-list-search">
              <input type="text" class="typeahead" placeholder="Tags" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="nav-filters-list-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Date</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="nav-filters-list-search">
              <input type="text" class="typeahead" placeholder="Date" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="nav-filters-list-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Order</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="nav-filters-list-search">
              <input type="text" class="typeahead" placeholder="Order" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>
      </ul>

      <script src="assets/js/nav.js"></script>
      <script src="assets/js/bootstrap/bootstrap.js"></script>
      <script>
        // Stop dropdown from closing on clicked or keydown (used by typeahead)
        $('.nav-filters-list-search').on("click keydown", function(event) {
          event.stopPropagation();
        });       
      </script>



    </div> <!-- // End of .nav-filters -->

  </div> <!-- // End of .nav -->
</div> <!-- // End of .subHeader -->

<script src="assets/js/filters.js"></script>