<?php



function sequenceGrowing(array $arrayNumber)
{

  $remove = false;

  for ($i = 0; $i < count($arrayNumber); $i++) {
    if (isset($arrayNumber[$i + 1]) && ($arrayNumber[$i] > $arrayNumber[$i + 1] || $arrayNumber[$i] == $arrayNumber[$i + 1])) {
      if (!$remove) {

        unset($arrayNumber[$i]);
        $remove = true;
        break;
      }
    }
  }

  $arrayNumber = array_values($arrayNumber);

  for ($i = 0; $i < count($arrayNumber); $i++) {
    if (isset($arrayNumber[$i + 1]) && ($arrayNumber[$i] > $arrayNumber[$i + 1] || $arrayNumber[$i] == $arrayNumber[$i + 1])) {
      return ' false<br/>';
    }
  }
  return  ' true<br/>';

}


