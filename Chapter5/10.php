<?php
  $a = 2;
  $b = 3;
  $c = 5;
  function change($a, $b, $c) {
    $a = 100;
    global $b;
    $b = 200;
    $GLOBALS['c'] = 300;
  }
  change($a, $b, $c);
  $sum = $a + $b + $c;
  print $sum;
?>