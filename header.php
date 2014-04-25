<!DOCTYPE html>
<!--[if IE 9]><html lang="en" class="ie ie9"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  
  <title>Exclaim HTML Markup</title>  

  <?php

  $production = "no";

  if ($production == "yes") { ?>
  
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">  

  <?php } else { ?>

    <!-- Less -->
    <script type="text/javascript">
      less = {
        env: "development",
        async: false,
        fileAsync: false,
      };
    </script>
    <link rel="stylesheet/less" href="assets/less/styles.less" />
    <script src="assets/js/libraries/less-1.7.0.min.js"></script> 

  <?php } ?>

  <!-- Scripts -->
  <script src="assets/js/libraries/jquery-1.11.0.min.js"></script>  
  <script src="assets/js/bootstrap/typeahead.js"></script>
  <script src="assets/js/bootstrap/bootstrap.js"></script>

</head>
  
<body>

<div class="header">
  <div class="headerBar">
    <div class="headerBar-content">

      <div class="searchBar">
        <form action="search.php">
          <input type="text" placeholder="Search Exclaim..." />
          <a href="search.php"><b class="icon-search"></b></a>
        </form>
      </div>

      <div class="social">      
        <ul>
          <li data-social="email"><a href="#"></a></li>
          <li data-social="sharethis"><a href="#"></a></li>
          <li data-social="instagram"><a href="#"></a></li>
          <li data-social="google"><a href="#"></a></li>
          <li data-social="youtube"><a href="#"></a></li>
          <li data-social="rss"><a href="#"></a></li>
          <li data-social="twitter"><a href="#"></a></li>
          <li data-social="facebook"><a href="#"></a></li>
        </ul>
      </div>

      <div class="links">
        <ul>
          <li><a href="#">Contests</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

    </div>
  </div>     

  <div class="header-content">  
    
    <?php include('nav.php') ?>

</div> <!-- // End of .header -->

<div class="wrap">

<div class="subHeader">

  <div class="ad-wrap">
    
    <a href="#" alt="Ads" class="ad-leaderboard">
      <img src="assets/images/temp/banner-ad.jpg" alt="Ad Test" />
    </a> 

  </div>

</div>

  <div class="main">