<?php
  function score_check($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    return $sum;
  }

  $num1 = 30;
  $num2 = 20;
  $num3 = 30;

  if(score_check($num1, $num2, $num3) >= 80) {
    print 'Success !!';
  } elseif(score_check($num1, $num2, $num3) >= 50 && score_check($num1, $num2, $num3) < 80) {
    print 'Challenge !!';
  } else {
    print 'Failure !!';
  }
?>