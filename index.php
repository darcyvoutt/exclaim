<?php include ('header.php') ?>

<div class="content">

  <?php include('carousel.php') ?>  

  <div class="streams-buttons">

    <div class="stream-button"><a href="#">Concert Listings</a></div>
    <div class="stream-button"><a href="#">Release Dates</a></div>
    <div class="stream-button"><a href="#">Top 20</a></div>

  </div>

  <?php include('filters.php'); ?>

  <div class="streams">
   
    <!-- Stream -->
    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>

      <?php include("streamitem.php") ?>
      <?php include("streamitem.php") ?>
      <?php include("streamitem.php") ?>
      
    </div> 
   
    <!-- Stream -->
    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>
      
      <?php include("streamitem.php") ?>
      <?php include("streamitem.php") ?>
      
    </div>

    <!-- Stream -->
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