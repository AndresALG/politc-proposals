<?php class StringHelper{

  function deleteText($text,$pos){
    if(strlen($text) < 200 ){
      return $text." ...->";
    }
    $pos = strpos($text,' ', $pos);
    $string = substr_replace($text,'... continua',$pos);
    return $string;
  }
} ?>
