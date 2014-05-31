<div class="filters">

    <!-- Filters Selected -->
    <div class="filters-selected">
      <ul class="filters-selected-list">
        <li class="filters-selected-item">Arcade Fire</li>
        <li class="filters-selected-item">Bars</li>
        <li class="filters-selected-item">Toronto</li>
        <li class="filters-selected-item">Downtown</li>
        <li class="filters-selected-item">Rock</li>
        <li class="filters-selected-item">Music</li>
        <li class="filters-selected-item">Concerts</li>
        <li class="filters-selected-item">Events</li>
      </ul>
      <button class="filters-selected-button">Go</button>
    </div>


    <!-- Filter Options -->
    <div class="filters-content">
      <nav class="navbar" role="filters">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" 
                    data-target="#filters">
            </button>
            <span class="filters-label">Filters</span>
          </div>

          <div class="collapse navbar-collapse" id="filters">
  
            <ul class="nav navbar-nav navbar-right filters-options">
              
              <!-- Filter List Option | Genre -->
              <li class="dropdown filters-options-item">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">Genre</a>
                <ul class="dropdown-menu" role="filter-option">
                  <li><a href="#">Options</a></li>
                  <li><a href="#">Options</a></li>
                  <li><a href="#">Options</a></li>
                </ul>
              </li>

              <!-- Filter List Option | Tags -->
              <li class="dropdown filters-options-item">
                <a class="dropdown-toggle tags" href="#" data-toggle="dropdown">Tags</a>
                <ul class="dropdown-menu" role="filter-option">
                  <li class="filters-options-search">
                    <input type="text" class="typeahead" placeholder="Tags" />
                  </li>
                  <li><a href="#">Options</a></li>
                  <li><a href="#">Options</a></li>
                  <li><a href="#">Options</a></li>
                </ul>
              </li>
          
            </ul>

          </div>
        </div>
      </nav>
    </div>

</div>

<!-- Scripts -->
<script src="assets/js/filters.js"></script>
<script src="assets/js/typeahead.js"></script>