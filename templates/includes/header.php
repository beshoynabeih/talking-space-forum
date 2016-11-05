<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php if(!isset($title)) $title = SITE_TITLE ?>
    <title><?=$title?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=BASE_URL ?>/templates/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=BASE_URL ?>/templates/css/custom.css" rel="stylesheet">

    <script src="<?=BASE_URL ?>/templates/js/ckeditor/ckeditor.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Talking Space</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <?php if(!isLoggedIn()) : ?>
            <li><a href="register.php">Create an acount</a></li>
          <?php endif; ?>
            <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) : ?>
              <li><a href="create.php">create topic</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="main-col">
            <div class="block">
              <H1 CLASS="pull-left"><?=$title?></H1>
              <h4 class="pull-right">a simple php form engine</h4>
              <div class="clearfix"></div>
              <hr>
              <?php displayMessage(); ?>
