<?php
  function countup($num) {
    for($i = 0; $i < 10; $i++) {
      $num += 1;
    }
  }

  $num = 9;
  countup($num);
  print $num;
?>