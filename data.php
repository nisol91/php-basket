<?php

function getCode($num) {

  $str = '';
  $str_2 = '';

  for ($i=0; $i < ($num/2); $i++) {
    $str .= rand(0, 9);
  }


  $letters = ['a','b','c','d','e','f','g','h','i','l','m','n','o','p','q','r','s','t','u','v','z'];
  for ($i=0; $i < ($num/2); $i++) {
    $lettersLength = count($letters);
    $pos = $letters[rand(0, $lettersLength)];
    $str_2 .= $pos;
    $str_2_up = strtoupper($str_2);
  }
  return $str.$str_2_up;
};

echo getCode (6);




?>
