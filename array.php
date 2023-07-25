<?php
  // indexed array
  // $fruits = ["apple", "banaka", "cherry"];
  $fruits = array("apple", "banana", "cherry"); // []と同じ
  // echo $fruits; // error, array is composit data type.
  // echo can not read composit data.
  print_r($fruits);
  
  echo "<br>";
  // echo $fruits[0]."<br>";
  // echo $fruits[1]."<br>";
  // echo $fruits[2]."<br>";

  for ($i = 0; $i < count($fruits); $i++) {
    echo "fruit " . ($i + 1) . ": " . $fruits[$i] . "<br>";
  }

  foreach($fruits as $fruit) {
    echo "$fruit<br>";
  }
?>