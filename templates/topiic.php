<?php include_once 'includes/header.php'; ?>

<ul id="topics">
  <li class="topic" id="main-topic">
    <div class="row">
      <div class="col-md-2">
        <div class="user-info">
          <img class="avatar pull-left" src="images/avatars/<?=$topic->avatar?>"/>
          <ul>
            <li><strong><?=$topic->username?></strong></li>
          </li><?php echo userPostCount($topic->user_id); ?> Posts</li>
          <li><a href="profile.php">Profile</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-10">
        <div class="topic-content pull-right">
          <p><?=$topic->body?></p>
        </div>
      </div>
    </div>
  </li>
<?php if($replies) : ?>
  <?php foreach($replies as $reply) : ?>
    <li class="topic">
      <div class="row">
        <div class="col-md-2">
          <div class="user-info">
            <img class="avatar pull-left" src="images/avatars/<?=$reply->avatar?>"/>
            <ul>
              <li><strong><?=$reply->username?></strong></li>
            </li><?php echo userPostCount($reply->user_id); ?> Posts</li>
            <li><a href="profile.php">Profile</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-10">
          <div class="topic-content pull-right">
            <p><?=$reply->body?></p>
          </div>
        </div>
      </div>
    </li>
  <?php endforeach; ?>

<?php else : ?>
<div class="alarm">There are no replies to been shown.</div>
<?php endif; ?>

</ul>
  <?php if(isLoggedIn()) : ?>
  <h3>Reply to topic</h3>
  <form role="form" method="POST" action="topic.php?t=<?=$topic->id?>">
    <div class="form-group">
      <textarea id="reply" rows="10" cols="80" class="form-control" name="replybody" ></textarea>
      <script>CKEDITOR.replace('reply');</script>
    </div>
    <button name="replybtn" type="submit" class="btn btn-default">Submit</button>
  </form>
<?php else: ?>
  <h3>Please Login to reply this topic.</h3>
<?php endif; ?>
<?php include_once 'includes/footer.php'; ?>
