<?php


function primoInferior($num){

  $array = array();
  for($i = 1; $i <= $num;$i++){
    if(($i % 2) != 0 && $i > 1){
      if(strlen($i) > 2){
        $value = substr("$i",-1);
        if($value != '5'){
          if(($i % 3) != 0 || $i == 3){
            $array[] = result($i);
            }
        }
      }else{
        $array[] = result($i);
      }
    }
  }
  echo 'Numero ' . $num . ' = ' . max($array);
}

function result($i){
  if(($i % 3) != 0  || $i == 3){
    return $i;
  }
}