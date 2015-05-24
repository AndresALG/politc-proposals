<?php class StringHelper{

  function deleteText($text){

    $pos = strpos($text,',', 300);
    $string = substr_replace($text,'... continua',$pos);
    return $string;
  }
} ?>
