<div class="carousel">
  <div class="carousel-item">
    <div class="carousel-image">
      <img src="assets/images/temp/boondocks.jpg" alt="Slide 1" />
    </div>
    <div class="carousel-content">
      <a href="article.php">
        <div class="carousel-category">Album Stream</div>
        <div class="carousel-title">Mongogrenade <span class="carousel-emphasis">Composite</span></div>
      </a>
    </div>    
  </div>

  <div class="carousel-item">
    <div class="carousel-image">
      <img src="assets/images/temp/drake.jpg" alt="Slide 2" />
    </div>
    <div class="carousel-content">
      <a href="article.php">
        <div class="carousel-category">Music Video</div>
        <div class="carousel-title">Drake <span class="carousel-emphasis">Headlines</span></div>
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