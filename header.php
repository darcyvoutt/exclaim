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
        <li><a href="index.php">News</a></li>
        <li><a href="article.php">Article</a></li>
        <li><a href="artist.php">Artist Profile</a></li>
        <li><a href="search.php">Search Results</a></li>
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

      <script src="assets/js/filters.js"></script>

      <div class="nav-filters-list">

        <label>Filters</label>
        <ul>
          <li>Featured Tags
            <ul>
              <li>New List</li>
            </ul>
          </li>

          <li>Genres
            <ul>
              <li>New List</li>
              <li>Second List</li>
            </ul>
          </li>

          <li>Artists
            <ul>
              <li>New List</li>
            </ul>
          </li>

          <li>Date
            <ul>
              <li>New List</li>
            </ul>
          </li>

          <li>Keyword
            <ul>
              <li>New List</li>
            </ul>
          </li>
        </ul>
      </div> <!-- // End of .nav-filters-list -->

    </div> <!-- // End of .nav-filters -->

  </div> <!-- // End of .nav -->
</div> <!-- // End of .subHeader -->

<div class="main">