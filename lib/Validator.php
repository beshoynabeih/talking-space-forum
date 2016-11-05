<?php
class validator{

  public static  function isRequired($feild_array){
    foreach ($feild_array as $field) {
      if($_POST[$field] == ''){
        return false;
      }
    }
    return true;
  }
  public static function isValidEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
    }
    return false;
  }
  public static function checkPasswordMatch($pw1, $pw2){
    if($pw1 === $pw2)
    return true;
    return false;
  }
}//end of valaditor class
?>
