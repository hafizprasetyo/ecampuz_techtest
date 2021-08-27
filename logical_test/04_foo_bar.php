<?php

function foo_bar(int $limit) {
  for ($i=1;$i<=$limit;$i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
      echo 'FooBar<br>';
    } elseif ($i % 3 == 0) {
      echo 'Foo<br>';
    } elseif ($i % 5 == 0) {
      echo 'Bar<br>';
    } else {
      echo $i . '<br>';
    }
  }
}

echo foo_bar(50);