<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  
  <title>Exclaim HTML Markup</title>

  <!-- Less -->
  <script type="text/javascript">
    less = { env: "development" }; 
  </script>
  <link rel="stylesheet/less" href="assets/less/style.less" />

  <!-- Scripts -->
  <script src="assets/js/libraries/less-1.7.0.min.js"></script>
  <script src="assets/js/libraries/jquery-1.11.0.min.js"></script>
  <script src="assets/js/nav.js"></script>
  <script src="assets/js/bootstrap/typeahead.js"></script>
</head>
  
<body>

<div class="header">
</div> <!-- // End of .header -->

<div class="subHeader">

  <div class="ad-leaderboard">
    <a href="#">
      <img src="assets/images/banner-ad.jpg" alt="Ad Test" />
    </a>    
  </div>  <!-- // End of .ad-leaderboard -->

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

      <div class="nav-filters-selected">
        <ul>
          <li class="nav-filters-selected-item">Arcade Fire</li>
          <li class="nav-filters-selected-item">Bars</li>
          <li class="nav-filters-selected-item">Toronto</li>
        </ul>
      </div>
      
      <h2 class="nav-filters-mobileTitle slide-trigger">Filters</h2>

      <ul class="nav-filters-list">
        <li class="nav-filters-list-item"><a href="#">Genre</a>
          <ul>
            <li class="nav-filters-list-search">
              <input type="text" class="typeahead" placeholder="Genre" />
            </li>
            <li><a href="#">Genre Option</a></li>
            <li><a href="#">Genre Option</a></li>
          </ul>
        </li>

        <li class="nav-filters-list-item"><a href="#">Tags</a>
          <ul>
            <li class="nav-filters-list-search">
              <input type="text" class="typeahead" placeholder="Tags" />
            </li>
            <li><a href="#">Tag Option</a></li>
            <li><a href="#">Tag Option</a></li>
          </ul>
        </li>

        <li class="nav-filters-list-item"><a href="#">Date</a>
          <ul>
            <li class="nav-filters-list-search">
              <input type="text" class="typeahead" placeholder="Date" />
            </li>
            <li><a href="#">Date Option</a></li>
            <li><a href="#">Date Option</a></li>
          </ul>
        </li>

        <li class="nav-filters-list-item"><a href="#">Order</a>
          <ul>
            <li class="nav-filters-list-search">
              <input type="text" class="typeahead" placeholder="Order" />
            </li>
            <li><a href="#">Order Option</a></li>
            <li><a href="#">Order Option</a></li>
          </ul>
        </li>
      </ul> <!-- // End of .nav-filters-list -->

    </div> <!-- // End of .nav-filters -->

  </div> <!-- // End of .nav -->
</div> <!-- // End of .subHeader -->

<script src="assets/js/filters.js"></script>

<div class="main">