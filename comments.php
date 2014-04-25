 <div class="comments">
    <div class="comments-title">
      <h3>Comments</h3>
      <span class="comments-title-number">99+</span>
      <b class="icon-arrowDown"></b>
    </div>        

  <!-- If over 99 comments should change to "99+" due to size of comment bubble. -->

  <div class="comments-content">

    <ul>
      <li class="comment"><?php include('comment.php') ?></li>
      <li class="comment"><?php include('comment_replies.php') ?>
        <ul>
          <li class="comment-reply"><?php include('comment.php') ?></li>
          <li class="comment-reply"><?php include('comment.php') ?></li>
          <li class="comment-reply"><?php include('comment.php') ?></li>
          <li class="comment-reply"><?php include('comment.php') ?></li>
        </ul>
      </li>
      <li class="comment"><?php include('comment.php') ?></li>
    </ul>

    <div class="comments-form">
      <ul class="comments-login">
        <li class="comments-login-item"><span>Login</span></li>
        <li class="comments-login-item"><button data-social="facebook-lg">Facebook</button></li>
        <li class="comments-login-item"><button data-social="twitter-lg">Twitter</button></li>
        <li class="comments-login-item"><button data-social="exclaim-lg">Exclaim</button></li>
      </ul>

    <div class="comments-writing">
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
</div>

<script src="assets/js/comments.js"></script>