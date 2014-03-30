<?php include ('header.php') ?>

<?php include('relatedArticles.php'); ?>

<div class="content">

  <div class="article">

    <div class="breadcrumbs">Music > Music News > Mar 28, 2014</div>

    <h2>The Red Hot Chilli Pepers are back in Toronto May 24</h2>

    <div class="author">By Joseph Hose</div>

    <img src="http://audioinkradio.com/wp-content/uploads/2012/01/Red-Hot-Chili-Peppers.jpg" alt="Red Hot" />

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis dui malesuada, imperdiet purus sed, fringilla velit. Ut id feugiat erat. Duis purus dui, vehicula eget erat eu, hendrerit dictum erat. Vivamus laoreet condimentum dapibus. Sed imperdiet eros id nunc pharetra, vel luctus sapien posuere. Curabitur venenatis odio sem, non fringilla orci lacinia non. Aliquam erat volutpat. Suspendisse interdum ipsum augue, in imperdiet nulla aliquam vel. Vestibulum vel elit eget augue iaculis semper. Maecenas sodales purus ullamcorper suscipit fringilla. Suspendisse a eleifend sapien.</p>

    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum sed tortor lobortis, convallis ligula sit amet, tincidunt nibh. Vestibulum rutrum lacus et mauris feugiat, vel imperdiet leo lobortis. In fermentum arcu sed tortor bibendum, eu aliquet dolor semper. Morbi ac blandit neque. Nullam ut facilisis lacus. Duis et blandit massa, eget ultricies lectus. Nulla ultricies odio sit amet turpis tincidunt, id congue mi laoreet.</p>
  </div>

  <div class="comments">
    <div class="comments-title">
      <h3>Comments</h3>
      <span class="comments-number">35</span>
    </div>
    <ul>
      <li class="comment"><?php include('comment.php') ?></li>
      <li class="comment"><?php include('comment_replies.php') ?>
        <ul>
          <li class="comment-reply"><?php include('comment.php') ?></li>
          <li class="comment-reply"><?php include('comment.php') ?></li>
        </ul>
      </li>
      <li class="comment"><?php include('comment.php') ?></li>
    </ul>

    <div class="comments-form">
      <ul class="comments-login">
        <li class="comments-login-item"><span>Login</span></li>
        <li class="comments-login-item"><button>Facebook</button></li>
        <li class="comments-login-item"><button>Twitter</button></li>
        <li class="comments-login-item"><button>Exclaim</button></li>
      </ul>
      <div class="formRow">
        <div class="formRow-label"><label for="username">Name:</label></div>
        <div class="formRow-input">
          <input id="username" name="username" type="text" placeholder="Your Name" />
        </div>
      </div>
      <div class="formRow">
        <div class="formRow-label"><label for="email">Email:</label></div>
        <div class="formRow-input">
          <input id="email" name="email" type="text" placeholder="example@email.com" />
        </div>
      </div>
      <div class="formRow">
        <div class="formRow-label"><label for="website">Website:</label></div>
        <div class="formRow-input">
          <input id="website" name="website" type="text" placeholder="www.example.com" />
        </div>
      </div>
      <div class="formRow">
        <div class="formRow-textarea">
          <textarea name="message" id="message" placeholder="Join the conversation..."></textarea>
        </div>
      </div>
      <div class="formRow">
        <div class="formRow-submit">
          <input type="submit" class="submit" name="Submit" />
        </div>
      </div>
    </div>
  </div>

</div>

<?php include ('sidebar.php') ?>

<?php include ('footer.php') ?>