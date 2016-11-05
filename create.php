<?php
  require_once 'core/ini.php';
 ?>

<?php
  $topic = new topic;
  if(isset($_POST['doreply'])){
    $res = $topic->writeTopic($_POST['title'], $_POST['category'], $_POST['body']);
    if($res){
      redirect('index.php','Topic has been created', 'success');
    }else{
      redirect('index.php','Unkown Error', 'error');      
    }
  }
 ?>
<?php

  if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'])
  $template = new template('templates/create.php');
  else
  redirect('index.php', 'You have to login first', 'error');




  //$template->heading = "This is a template heading";
  echo $template;
 ?>
