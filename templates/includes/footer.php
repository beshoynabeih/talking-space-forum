</div>
</div>
</div>
<div class="col-md-4">
<div class="sidebar">
<div class="block">
  <h3>Login form</h3>
  <?php if(isLoggedIn()) : ?>
    <div class="userdata">  <?php echo 'Welcome '.$_SESSION['username']; ?> </div>
    <form method="POST" action="logout.php">
      <input type="submit" class="btn btn-default" value="Logout" name="dologout"/>
    </form>

    <?php else : ?>
    <form role="form" method="Post" action="login.php">
      <div class="form-group">
        <label for="exampleinputemail">Username</lable>
        <input type="text" class="form-control" name="username" placeholder="Enter username" />
      </div>
      <div class="form-group">
        <label for="exampleinputpassword">Password</lable>
        <input type="password" class="form-control" name="password" placeholder="Enter password" />
      </div>
      <button name="dologin" type="submit" class="btn btn-primary">Login</button><a href="register.php" class="btn btn-default">Create an account</a>
    </form>
  <?php endif; ?>
</div>
<div class="block">
  <h3>Categories</h3>
    <div class="list-group">
      <?php $cats = getcategories(); ?>
      <a href="topics.php" class="list-group-item <?php if(!isset($_GET['cat_id'])) echo "active-item"?>">All topics<span class="badge pull-right"><?= count($cats) + 1; ?></span></a>
      <?php foreach ($cats as $cat) : ?>
      <a href="topics.php?cat_id=<?=$cat->id?>" class="list-group-item <?php if(isset($_GET['cat_id']) && $_GET['cat_id'] == $cat->id) echo "active-item"?>"><?=$cat->name?><span class="badge pull-right"><?= getCategoryCount($cat->id); ?></span></a>
    <?php endforeach; ?>
    </div>
</div>
</div>
</div>
</div>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="<?=BASE_URL ?>/templates/js/jquery 1.12.4.js"></script>
<script src="<?=BASE_URL ?>/templates/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="js/ie10-viewport-bug-workaround.js"></script>-->
<!-- JS For hover an element-->
<script src="<?=BASE_URL ?>/templates/js/hover.js"></script>
</body>
</html>
