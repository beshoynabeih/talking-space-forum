<?php
class topic{
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getalltopics(){
    $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
                INNER JOIN users ON topics.user_id = users.id
                INNER JOIN categories ON topics.cat_id = categories.id ORDER BY create_date DESC");
    $results = $this->db->resultset();
    return $results;
  }
  public function getalltopicsbyid($id){
    $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
                INNER JOIN users ON topics.user_id = users.id
                INNER JOIN categories ON topics.cat_id = categories.id where topics.cat_id=$id ORDER BY create_date DESC");
    $results = $this->db->resultset();
    return $results;
  }
  public function getallusersnum(){
    $this->db->query("SELECT count(id) as num from users");
    $results = $this->db->resultset();
    return $results[0]->num;
  }
  public function getalltopicsnum(){
    $this->db->query("SELECT count(id) as num from topics");
    $results = $this->db->resultset();
    return $results[0]->num;
  }
  public function getallcatsnum(){
    $this->db->query("SELECT count(id) as num from categories");
    $results = $this->db->resultset();
    return $results[0]->num;
  }
  public function getTopic($id){
    $this->db->query("SELECT topics.*, users.username, users.name, users.avatar FROM topics
    INNER JOIN users on topics.user_id = users.id where topics.id = $id");
    $results = $this->db->resultset();
    return $results[0];
  }
  public function getReplies($id){
    $this->db->query("SELECT replies.*, users.* FROM replies
    INNER JOIN users on replies.user_id = users.id where replies.topic_id = $id ORDER BY create_date");
    $results = $this->db->resultset();
    return $results;
  }
  public function getByUser($id){
    $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
                INNER JOIN users ON topics.user_id = users.id
                INNER JOIN categories ON topics.cat_id = categories.id where user_id = $id ORDER BY create_date DESC");
    $results = $this->db->resultset();
    return $results;
  }
  public function writeTopic($title, $catID, $body){
    $user_id = $_SESSION['user_id'];
    $this->db->query("INSERT INTO topics(cat_id, user_id, title, body) values($catID, $user_id, '$title', '$body') ");
    if($this->db->execute()){
      return true;
      }
      else {
        return false;
    }
  }
  public function writeReply($topicID, $body){
    $user_id = $_SESSION['user_id'];
    $this->db->query("INSERT INTO replies(topic_id, user_id, body) values($topicID, $user_id, '$body') ");
    if($this->db->execute()){
      return true;
       $res = editTopicLastActivity($topicID);
       if($res){
         redirect('index.php',"asdasd",'success');
       }else {
         redirect('index.php',"asdasd",'error');
         echo "<h1>NOT GOOD</h1>";
       }
      }
      else {
        redirect('index.php',"asdasd",'error');
        return false;
    }
  }
}
 ?>
