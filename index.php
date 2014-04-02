<?php include ('header.php') ?>

<div class="content">

  <div id="articleCarousel">
    <?php include('carousel.php'); ?>
  </div>


  <div class="streams">

    <div class="stream-header is-active"><h2>Concert Listings</h2></div>
    <div class="stream-header"><h2>Release Dates</h2></div>
    <div class="stream-header"><h2>Top 20</h2></div>

  </div>

  <?php include('filters.php'); ?>

  <div class="streams">
    
   

    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>

      <!-- Stream Item -->
      <div class="streamItem">
        <img src="assets/images/stream2.jpg" alt="Image" />
        <div class="streamItem-content">
          <span class="streamItem-category">Video</span>
          <div class="streamItem-title">Angel Haze</div>
          <span class="streamItem-subtitle">Drunk in Love</span>
          <span class="streamItem-meta">(Beyonce cover) (live in-studio)</span>
        </div>
      </div>

      <!-- Stream Item -->
      <div class="streamItem">
        <img src="assets/images/stream2.jpg" alt="Image" />
        <div class="streamItem-content">
          <span class="streamItem-category">Video</span>
          <div class="streamItem-title">Angel Haze</div>
          <span class="streamItem-subtitle">Drunk in Love</span>
          <span class="streamItem-meta">(Beyonce cover) (live in-studio)</span>
        </div>
      </div>
    </div>

    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>
       
      <div class="streamItem">
        <div class="streamItem-noContent">
          <p>There is no content available based on your current filters.</p>
        </div>
      </div>
    </div>

  </div>

  <!-- <script src="assets/js/streams.js"></script> -->

</div>

<?php include ('sidebar.php') ?>

<?php include ('footer.php') ?>