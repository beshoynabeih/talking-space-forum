<?php
  include_once('core/ini.php');
  if(isset($_POST['dologout'])){
    unset($_SESSION['is_logged_in']);
    unset($_SESSION['username']);
    unset($_SESSION['name']);
    unset($_SESSION['user_id']);
    redirect('index.php');
  }

 ?>
