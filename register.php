<?php
  require_once 'core/ini.php';
 ?>
<?php
  $topic = new topic;
  $user = new user;
  if(isset($_POST['register'])){
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];
    $data['cpassword'] = $_POST['cpassword'];
    $data['about'] = $_POST['about'];
    $data['last_activity'] = date('Y-m-d H:j:s');
    $required_fields = array('name', 'email', 'username', 'password', 'cpassword');
    if(validator::isRequired($required_fields)){
        if(validator::isValidEmail($data['email'])){
          if(validator::checkPasswordMatch($data['password'], $data['cpassword'])){
            if($user->uploadAvatar()){
              $data['avatar'] = $_FILES['avatar']['name'];
            }else
              $data['avatar'] = 'avatar1.png';

            if($user->register($data)){
              redirect("index.php","You are registered successfully",'success');
            }else {
              redirect("index.php","Something is wrong",'error');
            }
          }else{
            redirect('register.php','Passwords Do not match','error');
          }
        }else {
          redirect('register.php','Please write a valid email','error');
        }
    }else {
      redirect('register.php','Please Fill in all required fields','error');
    }

/*
    if($user->uploadAvatar()){
      $data['avatar'] = $_FILES['avatar']['name'];
    }else
      $data['avatar'] = 'avatar1.png';

    if($user->register($data)){
      redirect("index.php","You are registered successfully",'success');
    }else {
      redirect("index.php","Something is wrong",'error');
    }*/
  }

  $template = new template('templates/register.php');
  //$template->heading = "This is a template heading";
  echo $template;
 ?>
