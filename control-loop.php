<?php
  $num1 = 1;

  while ($num1 < 5) {
    // loop body
    echo "$num1: is less than 5<br>";
    $num1++; // update statement
  }

  echo "<br>";

  $num2 = 1;

  do {
    echo "$num2: The number is less than 5.<br>";
    $num2++;
  } while($num2 < 5);

  echo "<br>";

  for ($num3 = 1; $num3 < 5; $num3++) {
    echo "$num3: The number is less than 5.<br>";
  }
?>