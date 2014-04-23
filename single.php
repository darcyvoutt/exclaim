<?php include ('header.php') ?>

<div class="content">

  <div id="articleCarousel">
    <?php include('carousel.php'); ?>
  </div>

  <div class="streams-buttons">

    <div class="stream-button"><a href="#">Concert Listings</a></div>
    <div class="stream-button"><a href="#">Release Dates</a></div>
    <div class="stream-button"><a href="#">Top 20</a></div>

  </div>

  <?php include('filters.php'); ?>

  <div class="streams">
    
    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>

      <ul class="streamSingle">

        <!-- List Item -->
        <li class="streamSingle-item">          
          <a href="#">

            <img src="assets/images/temp/stream2.jpg" alt="">

            <div class="streamSingle-item-content">            
              <h4 class="streamSingle-item-title">The Afghan Whigs / Crocodiles </h4> 
              <span class="streamSingle-item-details">
                Forest Swords Virgin Mod Club, Toronto ON, March 29
              </span>
              <p class="streamSingle-item-excerpt">
                While Beck is preparing to release his album Morning Phase later this month, the songwriter has also promised that he has other projects in the works...
              </p>
            </div>

          </a>
        </li>

        <!-- List Item -->
        <li class="streamSingle-item">          
          <a href="#">

            <img src="assets/images/temp/stream1.jpg" alt="">

            <div class="streamSingle-item-content">            
              <h4 class="streamSingle-item-title">The Afghan Whigs / Crocodiles</h4> 
              <span class="streamSingle-item-details">
                Forest Swords Virgin Mod Club, Toronto ON, March 29
              </span>
              <p class="streamSingle-item-excerpt">
                While Beck is preparing to release his album Morning Phase later this month, the songwriter has also promised that he has other projects in the works...
              </p>
            </div>

          </a>
        </li>

        <!-- List Item -->
        <li class="streamSingle-item">          
          <a href="#">

            <img src="assets/images/temp/stream2.jpg" alt="">

            <div class="streamSingle-item-content">            
              <h4 class="streamSingle-item-title">The Afghan Whigs / Crocodiles</h4> 
              <span class="streamSingle-item-details">
                Forest Swords Virgin Mod Club, Toronto ON, March 29
              </span>
              <p class="streamSingle-item-excerpt">
                While Beck is preparing to release his album Morning Phase later this month, the songwriter has also promised that he has other projects in the works...
              </p>
            </div>

          </a>
        </li>

      </ul>


    </div>

  </div>

  <!-- <script src="assets/js/streams.js"></script> -->

</div>

<?php include ('sidebar.php') ?>

<?php include ('footer.php') ?>