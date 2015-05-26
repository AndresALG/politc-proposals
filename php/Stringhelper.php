<?php class StringHelper{

  function deleteText($text,$pos){

    $pos = strpos($text,' ', $pos);
    $string = substr_replace($text,'... continua',$pos);
    return $string;
  }
} ?>
