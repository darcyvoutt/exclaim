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
  <script src="assets/js/bootstrap/typeahead.js"></script>
  <script src="assets/js/bootstrap/bootstrap.js"></script>

</head>
  
<body>

<div class="header">
  <div class="header-content">
  
    <h1 class="logo">
      <a href="index.php">Exclaim!</a>
    </h1> <!-- // End of .logo -->

    <div class="navigation">
      <div class="navigation-search">
        <div class="search">
          <input type="text" />
        </div>
        <div class="social">
          <ul>
            <li><a href="#"><img src="http://bit.ly/1pum0Nr" alt="Social Link" /></a></li>
            <li><a href="#"><img src="http://bit.ly/1pum0Nr" alt="Social Link" /></a></li>
            <li><a href="#"><img src="http://bit.ly/1pum0Nr" alt="Social Link" /></a></li>
            <li><a href="#"><img src="http://bit.ly/1pum0Nr" alt="Social Link" /></a></li>
            <li><a href="#"><img src="http://bit.ly/1pum0Nr" alt="Social Link" /></a></li>
          </ul>
        </div>        
      </div>
      
      <ul class="menu-dropdown">
        <li class="menu-dropdown-list">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Music</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="#">Videogames</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Art</a></li>
          </ul>
        </li>
      </ul>

      .

    </div> <!-- // End of .navigation -->

  </div> <!-- // End of .header-content -->
</div> <!-- // End of .header -->

<div class="subHeader">

  <div class="ad-leaderboard">
    <a href="#">
      <img src="assets/images/banner-ad.jpg" alt="Ad Test" />
    </a>    
  </div>  <!-- // End of .ad-leaderboard -->

  <?php include('nav.php'); ?>

<div class="main">