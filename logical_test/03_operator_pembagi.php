<?php

function pembagian($x, $y) {
  $result = 0;
  
  while ($x >= $y) {
    $x = $x - $y;
    $result++;
  }
  
  return $result;
}

echo '7 : 2 = ' . pembagian(7, 2) . '<br>';
echo '8 : 4 = ' . pembagian(8, 4);