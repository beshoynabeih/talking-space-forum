<?php
//url Format

function urlformat($str){
  $str = preg_replace('/\s*/','',$str);
  $str = strtolower($str);
  $str = urlencode($str);
  return $str;
}
function dateFormat($date){
  return date('F j, Y, g:i a',strtotime($date));
}

 ?>
