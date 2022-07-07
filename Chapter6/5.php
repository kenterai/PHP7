<?php
  function division($x, $y) {
    if($y == 0) {
      throw new Exception("ゼロによる徐算");
    }
    return $x / $y;
  }
  
  try {
    print division(9, 3) . ", ";
    print division(5, 0) . ", ";
    print division(4, 2) . ", ";
  } catch (Exception $e) {
    print $e->getMessage();
  }
?>