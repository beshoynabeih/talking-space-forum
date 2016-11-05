<?php
  session_start();

  require_once 'config/config.php';

  require_once 'helpers/db_helper.php';
  require_once 'helpers/format_helper.php';
  require_once 'helpers/system_helper.php';


  //autoloader
  function __autoload($class_name){
    require_once 'lib/'.$class_name.".php";
  }
 ?>
