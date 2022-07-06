<?php
  function add($a, $b) {
    $a = 100;
    global $b;
    $b = 200;
    print 'local_$a =>' . $a. ', local_$b =>' . $b;
    print ", ";
  }

  $a = 10;
  $b = 20;
  add($a, $b);
  print 'global_$a =>' . $a. ', global_$b =>' . $b;
?>