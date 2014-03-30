<?php include ('header.php') ?>

<?php include('filters.php'); ?>

<?php include('relatedArticles.php'); ?>

<div class="content">

  <div id="articleCarousel">
    <?php include('carousel.php'); ?>
  </div>

  <div class="streams">

    <div class="stream-header is-active"><h2>Concert Listings</h2></div>
    <div class="stream-header"><h2>Release Dates</h2></div>
    <div class="stream-header"><h2>Top 20</h2></div>

  </div>

  <div class="streams">
    
    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies est id urna venenatis 
      posuere vel eget metus. Fusce tincidunt nisl nisi, ut pulvinar elit ullamcorper nec. Quisque sagittis 
      metus vitae sapien placerat, quis blandit sem accumsan. Duis in lacinia arcu. Etiam sodales dignissim 
      sapien vel ultricies.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies est id urna venenatis 
      posuere vel eget metus. Fusce tincidunt nisl nisi, ut pulvinar elit ullamcorper nec. Quisque sagittis 
      metus vitae sapien placerat, quis blandit sem accumsan. Duis in lacinia arcu. Etiam sodales dignissim 
      sapien vel ultricies.</p>
    </div>

    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies est id urna venenatis 
      posuere vel eget metus. Fusce tincidunt nisl nisi, ut pulvinar elit ullamcorper nec. Quisque sagittis 
      metus vitae sapien placerat.</p>
    </div>

    <div class="stream">
      <div class="stream-title">
        <h3>News</h3>
      </div>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies est id urna venenatis 
      posuere vel eget metus.</p>
    </div>

  </div>

  <script src="assets/js/streams.js"></script>

</div>

<?php include ('sidebar.php') ?>

<?php include ('footer.php') ?>