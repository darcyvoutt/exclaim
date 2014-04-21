<div class="carousel">
  <div class="carousel-item">
    <div class="carousel-image">
      <img src="assets/images/temp/boondocks.jpg" alt="Slide 1" />
    </div>
    <div class="carousel-content">
      <a href="article.php">
        <div class="carousel-category">Category Name</div>
        <div class="carousel-title">Title of the article goes here <span class="carousel-emphasis">Emphasis text</span></div>
        <div class="carousel-meta">by Alex Hudson | January 27, 2014</div>
      </a>
    </div>    
  </div>

  <div class="carousel-item">
    <div class="carousel-image">
      <img src="assets/images/temp/drake.jpg" alt="Slide 2" />
    </div>
    <div class="carousel-content">
      <a href="article.php">
        <div class="carousel-category">Category Name</div>
        <div class="carousel-title">Title of the article goes here <span class="carousel-emphasis">Emphasis text</span></div>
        <div class="carousel-meta">by Alex Hudson | January 27, 2014</div>
      </a>
    </div>    
  </div>
</div>

<script src="assets/js/libraries/slick.min.js"></script>
<script>
  $(document).ready(function() {
    $('.carousel').slick({
      autoplay: true,
      autoplaySpeed: 3000
    });
  });
</script>