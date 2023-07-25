<?php
  $str = "";

  for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) {
      # Odd Number
      if ($str === "") {
        $str = $str . $i;
      } else {
        $str = $str . '.' . $i;
      }
    } else {
      # Even Number
      $str = $str . '-' . $i;
    }
  }

  echo $str;

?>