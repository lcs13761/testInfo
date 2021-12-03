<?php



function yearCentury($century)
{

      $value = substr($century, 0, 2);
      $century = substr_replace($century, '', 0, 2);

      for ($i = 0; $i < strlen($century); $i++) {
            if ($century[$i] > 0) {
                  $value += 1;
                  break;
            }
      }
      return "Seculo " . $value;
}
