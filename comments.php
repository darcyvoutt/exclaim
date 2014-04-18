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