<?php
  $colors['sea'] = 'blue';
  $colors['leaf'] = 'green';
  $colors['night'] = 'black';
  $colors['sun'] = 'red';

  asort($colors);
  foreach($colors as $key => $value) {
    print " $key \t :  $value\n <BR>";
  }
?>