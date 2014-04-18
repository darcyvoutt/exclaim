<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  
  <title>Exclaim HTML Markup</title>

  <script src="assets/js/libraries/jquery-1.11.0.min.js"></script>

  <!-- Less -->
  <script type="text/javascript">
    less = {
      env: "development",
      async: false,
      fileAsync: false,
    };
  </script>
  <link rel="stylesheet/less" href="assets/less/style.less" />

  <!-- Scripts -->
  <script src="assets/js/libraries/less-1.7.0.min.js"></script>  
  <script src="assets/js/libraries/slick.min.js"></script>
  <script src="assets/js/bootstrap/typeahead.js"></script>
  <script src="assets/js/bootstrap/bootstrap.js"></script>

</head>
  
<body>

<div class="header">
  <div class="headerBar">
    <div class="headerBar-content">
      <div class="search">
        <input type="text" placeholder="Search Exclaim..." />
      </div>
      <!-- // Due to css constraints, this lists needs to be inserted inverted -->
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
    </div>
  </div>     

  <div class="header-content">  
    
    <h1 class="logo">
      <a href="index.php">Exclaim!</a>
    </h1> <!-- // End of .logo -->

    <div class="navigation">
      
      <!-- Main Nav 
      // Due to css constraints, this lists needs to be inserted inverted
      -->
      <ul class="menu">
        <li class="menu-item"><a href="#">Features</a></li>
        <li class="menu-item"><a href="#">Reviews</a></li>        
        <li class="menu-item"><a href="#">Streams</a></li>                
        <li class="menu-item"><a href="#">News</a></li>        
      </ul>
      
      <!-- Sections Select -->
      <ul class="sections">
        <li class="sections-list">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">Music</a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="#">Videogames</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Art</a></li>
          </ul>
        </li>
      </ul>

    </div> <!-- // End of .navigation -->

  </div> <!-- // End of .header-content -->
</div> <!-- // End of .header -->

<div class="wrap">

<div class="subHeader">

  <div class="ad-wrap">
    
    <a href="#" alt="Ads" class="ad-leaderboard">
      <img src="assets/images/banner-ad.jpg" alt="Ad Test" />
    </a> 

  </div>

</div>

  <div class="main">