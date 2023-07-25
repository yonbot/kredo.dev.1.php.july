<?php
  $sum = 0;
  $str = "";

  for ($i = 1; $i < 30; $i++) {
    if ($i % 2 == 0) {
      $sum = $sum + $i;

      if ($str === "") {
        $str = $str . $i;
      } else {
        $str = $str . " + " . $i;
      }
    }
  }

  echo $str . " = " . $sum;
?>