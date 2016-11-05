<?php
  require_once 'core/ini.php';
 ?>
<?php
  //create topic object
  $topics = new topic;
  $template = new template('templates/frontpage.php');
  //assign vars
  $template->topics = $topics->getalltopics();
  $template->unum = $topics->getallusersnum();
  $template->tnum = $topics->getalltopicsnum();
  $template->cnum = $topics->getallcatsnum();
  echo $template;
 ?>
