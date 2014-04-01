<?php include ('header.php') ?>

<?php include('relatedArticles.php'); ?>

<div class="content">

  <div id="articleCarousel">
    <?php include('carousel.php'); ?>
  </div>

  <?php include('filters.php'); ?>

  <div class="streams">

    <div class="stream-header is-active"><h2>Concert Listings</h2></div>

  </div>

  <div class="streams">
    
    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>

      <ul class="streamSingle">

        <!-- List Item -->
        <li class="streamSingle-item">          
          <a href="#">
            <img src="assets/images/stream1.jpg" alt="">
            <div class="streamItem-synopsis-item-category">Reviews</div>
            <p>The Afghan Whigs / Crocodiles 
              <span class="streamSingle-item-details">
                Forest Swords Virgin Mod Club, Toronto ON, March 29
              </span>
            </p>
          </a>
        </li>

        <!-- List Item -->
        <li class="streamSingle-item">          
          <a href="#">
            <img src="assets/images/stream2.jpg" alt="">
            <div class="streamSingle-item-category">Reviews</div>
            <p>The Afghan Whigs / Crocodiles 
              <span class="streamSingle-item-details">
                Forest Swords Virgin Mod Club, Toronto ON, March 29
              </span>
            </p>
          </a>
        </li>

      </ul>


    </div>

  </div>

  <!-- <script src="assets/js/streams.js"></script> -->

</div>

<?php include ('sidebar.php') ?>

<?php include ('footer.php') ?>