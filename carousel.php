<div id="carousel-example-generic">
  <div class="carousel slide">
      
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://canyouhearthis.co.uk/wp-content/uploads/2012/09/Band-Of-Horses.jpg" alt="Slide 1" />
        <div class="carousel-caption">
          <h1>Epic band time</h1>
          <p>Slide 1 Description</p>
        </div>
      </div>

      <div class="item">
        <img src="http://www.themeshband.co.uk/images/function-bands-for-hire.jpg" alt="Slide 2" />
        <div class="carousel-caption">
          <h1>Average band</h1>
          <p>Slide to Description</p>
        </div>
      </div>
    </div>
    
    <!-- Controls --> 
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="icon-next"></span>
    </a>

  </div>
</div>


<script type="text/javascript">
  $('.carousel').carousel({
    interval: 3000
  });
</script>