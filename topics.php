<?php
  require_once 'core/ini.php';
 ?>
<?php
  //create topic object
  $topics = new topic;
  $template = new template('templates/topics.php');
  //assign vars
  $cat_id = isset($_GET['cat_id']) && $_GET['cat_id'] != '' ? $_GET['cat_id'] : false;
  $u_id = isset($_GET['uid']) && $_GET['uid'] != '' ? $_GET['uid'] : false;
    if($cat_id){
      $template->topics = $topics->getalltopicsbyid($cat_id);
      $template->title = "$cat_id Category";
    }
    elseif($u_id) {
        $template->topics = $topics->getByUser($u_id);
        $template->title = "$u_id User";
    }else
      $template->topics = $topics->getalltopics();

  $template->unum = $topics->getallusersnum();
  $template->tnum = $topics->getalltopicsnum();
  $template->cnum = $topics->getallcatsnum();
  echo $template;
 ?>
