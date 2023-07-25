<?php
  $f_number = 5;
  $s_number = 10;

  if ($f_number > $s_number) {
    echo $f_number;
  } elseif ($f_number < $s_number) {
    echo $s_number;
  } elseif ($f_number == $s_number) {
    echo "They are equal";
  } else {
    echo "Unknown number";
  }
?>