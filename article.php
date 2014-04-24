<?php include ('header.php') ?>

<?php include('relatedArticles.php'); ?>

<div class="content">

  <div class="article">    

    <ul class="article-breadcrumbs">
      <li><a href="#">Music</a></li>
      <li><a href="#">Music News</a></li>
      <li>Mar 28, 2014</li>
    </ul>

    <h1 class="article-title">Freddie Gibbs & Madlib</h1>

    <h2 class="article-subtitle">‘Piñata’</h2>

    <div class="article-author">By Joseph Hose</div>

    <div class="article-image">
      <img src="assets/images/temp/boondocks.jpg" alt="Red Hot" width="100%" />
    </div>

    <div class="article-rating">7</div>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis 
    dui malesuada, imperdiet purus sed, fringilla velit. Ut id feugiat erat.
    Duis purus dui, vehicula eget erat eu, hendrerit dictum erat. Vivamus 
    laoreet condimentum dapibus. Sed imperdiet eros id nunc pharetra, vel
    luctus sapien posuere. Curabitur <a href="#">venenatis odio sem</a>, non 
    fringilla orci lacinia non. Aliquam erat volutpat. Suspendisse interdum 
    ipsum augue, in imperdiet nulla aliquam vel. Vestibulum vel elit ege augue 
    iaculis semper. Maecenas sodales purus ullamcorper suscipit fringilla. 
    Suspendisse a eleifend sapien.</p>

    <img src="assets/images/temp/drake.jpg" />

    <blockquote>Viral mumblecore pour-over sartorial. Cardigan fashion axe Thundercats, 
    pickled freegan +1 pork belly master cleanse Helvetica.
    </blockquote>

    <ul>
      <li>Viral mumblecore pour-over sartorial.</li>
      <li>Viral mumblecore pour-over sartorial.</li>
      <li>Viral mumblecore pour-over sartorial.</li>
    </ul>

    <ol>
      <li>Viral mumblecore pour-over sartorial.</li>
      <li>Viral mumblecore pour-over sartorial.</li>
      <li>Viral mumblecore pour-over sartorial.</li>
    </ol>

    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur 
    ridiculus mus. Vestibulum sed tortor lobortis, convallis ligula sit amet, 
    tincidunt nibh. Vestibulum rutrum lacus et mauris feugiat, vel imperdiet 
    leo lobortis. In fermentum arcu sed tortor bibendum, eu aliquet dolor 
    semper. Morbi ac blandit neque. Nullam ut facilisis lacus. Duis et 
    <a href="#">blandit massa</a>, eget ultricies lectus. Nulla ultricies odio 
    sit amet turpis tincidunt, id congue mi laoreet.</p>

    <div class="article-subscribe">
      <span class="article-subscribe-label">Get It</span>
      <ul class="article-subscribe-social">
        <li data-social="email" data-tooltip="Join the Mailing List"><a href="#"></a></li>
        <li data-social="rss" data-tooltip="Follow our Feed"><a href="#"></a></li>
      </ul>
    </div>

    <div class="article-share">
      <a href=""><b class="icon-share"></b></a>      
      <a href=""><b class="icon-comments"></b></a>
    </div>

    <script>
      $(document).ready(function() {
        var jump_speed = 200;

        function toggleShareIt(){
            if($('.article-share').is(':visible')){
                $('.article-share').hide();
            }else{
                $('.article-share').show();
            }
        }

        function goToComments(){
            var scroll_to = ($('.comments-title').offset().top) - 50;            
            $('html,body').animate({scrollTop: scroll_to}, jump_speed);
        }
      });
    </script>

  </div> <!-- // End of .article -->

  <?php include('comments.php') ?>

</div>

<?php include ('sidebar.php') ?>

<?php include ('footer.php') ?>