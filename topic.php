<?php
  require_once 'core/ini.php';
  //create topic object
  $topic = new topic();
  $t_id = isset($_GET['t']) && $_GET['t'] != '' ? $_GET['t'] : false;

if(isset($_POST['replybtn'])){
  //validation
  $res = $topic->writeReply($t_id, $_POST['replybody']);
  if($res){
    redirect("topic.php?t=$t_id",'Reply has been submitted', 'success');
  }else {
    redirect("topic.php?t=$t_id",'Reply did not saved', 'error');
  }
}

  //Get id
  //Draw a topic.php file
  $template = new Template('templates/topiic.php');
  //assign vars
  if($t_id){
  $template->topic = $topic->getTopic($t_id);
  $template->replies = $topic->getReplies($t_id);
  $template->title = $topic->getTopic($t_id)->title;
  }else {
    echo "This happen in else statement";
  }
  echo $template;
?>
