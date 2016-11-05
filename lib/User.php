<?php
class user{
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function uploadAvatar(){
    $allowedExts = array("gif","jpeg", "jpg", "png");
    $temp = explode('.', $_FILES["avatar"]["name"]);
    $extension = end($temp);
    if(($_FILES["avatar"]["type"] == "image/gif") ||
      ($_FILES["avatar"]["type"] == "image/jpeg") ||
      ($_FILES["avatar"]["type"] == "image/jpg") ||
      ($_FILES["avatar"]["type"] == "image/pjpeg") ||
      ($_FILES["avatar"]["type"] == "image/x-png") ||
      ($_FILES["avatar"]["type"] == "image/png")
      && ($_FILES["avatar"]["size"] < 900000)
      && (in_array($extension, $allowedExts))){
        if($_FILES["avatar"]["error"] > 0){
          redirect('register.php', $_FILES["avatar"]["error"], 'error');
        }else{
          if(file_exists("images/avatars/".$_FILES["avatar"]["name"])){
            redirect("register.php", 'File already exists','error');
          }else{
            move_uploaded_file($_FILES["avatar"]["tmp_name"],"images/avatars/".$_FILES["avatar"]["name"]);
            return true;
          }
        }
      }else{
        redirect("register.php", "invalid file type " , "error");
      }
  }
  function register($data){
    $this->db->query("INSERT INTO users(name, username, email, avatar, password, about, last_activity)
    VALUES(:name, :username, :email, :avatar, :password, :about, :last_activity) ");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':avatar', $data['avatar']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':about', $data['about']);
    $this->db->bind(':last_activity', $data['last_activity']);
    if($this->db->execute()){
      return true;
    }else {
      return false;
    }
  }
  function login($username, $password){
    $this->db->query("select * from users where username='$username' and password='$password'");
    $row = $this->db->resultset();
    echo var_dump($row);
    if($this->db->rowCount() > 0){
      //$this->setUserData($row);
      $_SESSION['is_logged_in']="true";
      $_SESSION['user_id'] = $row[0]->id;
      $_SESSION['username'] = $row[0]->username;
      $_SESSION['name'] = $row[0]->name;
      return true;
    }else {
      return false;
    }

  }

  function setUserData($row){
    $_SESSION['is_logged_in']="true";
    $_SESSION['user_id'] = $row->id;
    $_SESSION['username'] = $row->username;
    $_SESSION['name'] = $row->name;
  }
}//end user class
?>
