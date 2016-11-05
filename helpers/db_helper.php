<?php

function replycount($id){
  $db = new Database();
  $db->query("select count(id) as num from replies where topic_id=$id");
  $rows = $db->resultset();
  return $rows[0]->num;
}
function getcategories(){
  $db = new Database();
  $db->query("select * from categories");
  $rows = $db->resultset();
  return $rows;
}
function userPostCount($id){
  $db = new Database();
  $db->query("select count(id) as num from topics where user_id=$id");
  $rows = $db->resultset();
  $topics_num = $rows[0]->num;
  $db->query("select count(id) as num from replies where user_id=$id");
  $rows = $db->resultset();
  $replies_num = $rows[0]->num;
  return $topics_num + $replies_num;
}
function getCategoryCount($id){
  $db = new Database();
  $db->query("select count(id) as num from topics where cat_id=$id");
  $rows = $db->resultset();
  return $rows[0]->num;
}
function getCategoryDes($id){
  $db = new Database();
  $db->query("select description  from categories where id=$id");
  $rows = $db->resultset();
  return $rows[0]->description;
}
function editTopicLastActivity($id){
  $db = new Database();
  $date = date('Y-m-d h:i:s a');
  $db->query("update topics set last_activity='$date' where id=$id");
  $rows = $db->execute();
  return $rows ? true : false;
}
 ?>
