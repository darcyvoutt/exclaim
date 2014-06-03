<?php include ('header.php') ?>

<div class="content">

  <?php include('carousel.php') ?>  

  <div class="streams">
   
    <!-- Stream -->
    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
        <a href="single.php"><b class="icon-arrowRight"></b></a>
      </div>

      <?php include("streamitem.php") ?>
      <?php include("streamitem.php") ?>
      <?php include("streamitem.php") ?>

      <div class="stream-more">
        <a href="article.php">More news</a>
      </div>
      
    </div> 
   
    <!-- Stream -->
    <div class="stream">
      <div class="stream-title">
        <h3>Streams</h3>
        <a href="single.php"><b class="icon-arrowRight"></b></a>
      </div>
      
      <?php include("streamitem.php") ?>
      <?php include("streamitem.php") ?>

      <div class="stream-more">
        <a href="article.php">More streams</a>
      </div>      
      
    </div>

    <!-- Stream -->
    <div class="stream">
      <div class="stream-title">
        <h3>Reviews</h3>
        <a href="single.php"><b class="icon-arrowRight"></b></a>
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