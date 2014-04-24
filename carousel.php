<div class="carousel">
  <div class="carousel-item">
    <div class="carousel-image">
      <img src="assets/images/temp/boondocks.jpg" alt="Slide 1" />
    </div>
    <div class="carousel-content">
      <a href="article.php">
        <div class="carousel-category">Interview</div>
        <div class="carousel-title">Fred Eaglesmith on the road again</div>
      </a>
    </div>    
  </div>

  <div class="carousel-item">
    <div class="carousel-image">
      <img src="assets/images/temp/drake.jpg" alt="Slide 2" />
    </div>
    <div class="carousel-content">
      <a href="article.php">
        <div class="carousel-category">Interview</div>
        <div class="carousel-title">Drake is in Toronto</div>
      </a>
    </div>    
  </div>
</div>

<script src="assets/js/libraries/slick.min.js"></script>
<script>
  $(document).ready(function() {
    $('.carousel').slick({
      autoplay: true,
      autoplaySpeed: 5000
    });
  });
</script>