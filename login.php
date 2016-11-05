<?php
include_once('core/ini.php');


if(isset($_POST['dologin'])){
  //get vars
  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = new user;
  if($user->login($username, $password)){
    $v = $_SESSION['user_id'];
    redirect('index.php',"You have been logged in $v",'success');
  }else {
    redirect('index.php','login is not valid','error');
  }
 }else {
  redirect("index.php");
}
 ?>
