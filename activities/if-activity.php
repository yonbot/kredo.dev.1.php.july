<?php
  $num1 = 40;
  $num2 = 20;
  $num3 = 45;
  
  # Option 1
  $max = $num1;

  if ($num1 < $num2) {
    $max = $num2;
  }

  if ($max < $num3) {
    $max = $num3;
  }

  echo "Max Number is $max";

  echo "<br>";

  # Option 2
  if ($num1 > $num2) {
    if ($num1 > $num3) {
      echo "Greatest: $num1";
    }
  }

  # Logical Operator
  if ($num2 > $num1 && $num2 > $num3) {
    echo "Greatest: $num2";
  }

  if ($num3 > $num1 && $num3 > $num2) {
    echo "Greatest: $num3";
  }

?>