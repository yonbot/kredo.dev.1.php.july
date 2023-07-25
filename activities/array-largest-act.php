<?php
  $numArray = array(10, 40, 32, 55.5, 20.1, 11, 50, 28);
  $max = 0;

  for ($i = 0; $i < count($numArray); $i++) {
    if ($i == 0) {
      $max = $numArray[$i];
    }

    if ($max < $numArray[$i]) {
        $max = $numArray[$i];
    }

    echo $numArray[$i] . " | ";
  }

  echo "<br>Largest: " . $max;
?>