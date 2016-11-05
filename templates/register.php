<?php include('includes/header.php');?>
<form role="form" enctype="multipart/form-data" method="POST" action="register.php">
  <div class="form-group">
    <label>Name*</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" />
  </div>
  <div class="form-group">
    <label>Email Address*</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
  </div>
  <div class="form-group">
    <label>Choose Username*</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label>Password*</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label>Confirm Password*</label>
    <input type="password" class="form-control" name="cpassword" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label>Upload Avatar</label>
    <input type="file" class="form-control" name="avatar" placeholder="Enter Your Name">
    <p class="help_block"></p>
  </div>
  <div class="form-group">
    <label>About Me*</label>
    <textarea id="about" rows="6" cols="80" class="form-control" name="about" placeholder="Tell us about yourself"></textarea>
  </div>
  <input name="register" type="submit" class="btn btn-default" value="register"/>
</form>
<?php include('includes/footer.php');?>
