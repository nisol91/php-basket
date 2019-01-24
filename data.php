<?php

//-------------------------
//genero il codice giocatore
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

// echo getCode (6);

//-------------------------
//genero le percentuali di tiri2

// function generaPerc () {
//
// };

//-----------------------
//costruisco l intelaiatura del database
function getDatabaseScaffolding ($n) {

$data = [];
$ogg = [
    'codice' => '',
    'falli' => '',
    'perc2' => 0,
    'perc3' => 0,
    'punti' => '',
    'rimbalzi' => '',
  ];

for ($i=0; $i < $n; $i++) {
  $data[] = $ogg;
  $data[$i]['codice'] = getCode (6);
  $data[$i]['punti'] = rand(0, 60);
  $data[$i]['rimbalzi'] = rand(0, 50);
  $data[$i]['falli'] = rand(0, 20);
  // $data[$i]['perc2'] = ;
  // $data[$i]['perc3'] = ;


}
return $data;
};

var_dump(getDatabaseScaffolding (10));

echo json_encode(getDatabaseScaffolding (10));


?>
