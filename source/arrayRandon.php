<?php


function randowArray()
{
  $list = array();
  for ($i = 0; $i < 20; $i++) {
    $list[] = rand(1, 9);
  }

  echo 'Array sorteado = [' . implode(',', $list) . ']<br/>';

  $newList = array();
  foreach ($list as $key => $value) {
    if (!array_key_exists($value, $newList)) {
      $newList[$value] = 0;
    }
    $newList[$value] =  $newList[$value] + 1;
  }

  $result = array_search(max($newList), $newList);
  $repeatValue = $newList[$result];
  echo 'O número que mais se repete é o ' . $result . '<br/>';
  echo 'Ele se repete ' . $repeatValue . 'vezes';
}
