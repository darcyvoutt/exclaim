<div class="filters">
    
    <div class="filters-menu">
      <ul>
        <li class="filters-menu-item"><a href="#">Menu</a>
          <ul>
            <li><a href="index.php">News</a></li>
            <li><a href="article.php">Article</a></li>
            <li><a href="artist.php">Artist Profile</a></li>
            <li><a href="search.php">Search Results</a></li>
          </ul>
        </li>          
      </ul>      
    </div>

    <div class="filters-tags">

      <!-- Filters Selected -->
      <div class="filters-tags-selected">
        <ul class="filters-tags-selected-list">
          <li class="filters-tags-selected-item">Arcade Fire</li>
          <li class="filters-tags-selected-item">Bars</li>
          <li class="filters-tags-selected-item">Toronto</li>
        </ul>
        <button class="filters-tags-selected-button">Filter</button>
      </div>
      
      <!-- Filter Options -->
      <h2 class="filters-tags-mobileTitle slide-trigger">Filters</h2>
      <ul class="filters-tags-list">
        <li class="filters-tags-list-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Genre</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="filters-tags-list-search">
              <input type="text" class="typeahead" placeholder="Genre" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="filters-tags-list-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Tags</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="filters-tags-list-search">
              <input type="text" class="typeahead" placeholder="Tags" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="filters-tags-list-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Date</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="filters-tags-list-search">
              <input type="text" class="typeahead" placeholder="Date" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>

        <li class="filters-tags-list-item">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Order</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="filters-tags-list-search">
              <input type="text" class="typeahead" placeholder="Order" />
            </li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Option</a></li>
          </ul>
        </li>
      </ul>

      <script src="assets/js/filters.js"></script>
      <script src="assets/js/bootstrap/bootstrap.js"></script>
      <script>
        // Stop dropdown from closing on clicked or keydown (used by typeahead)
        $('.filters-tags-list-search').on("click keydown", function(event) {
          event.stopPropagation();
        });       
      </script>



    </div> <!-- // End of .filters-tags -->

  </div> <!-- // End of .filters -->

<script src="assets/js/filters.js"></script>