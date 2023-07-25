<?php
  # Logical && (AND) operator
  $var1 = 10;
  $var2 = '20'; // string, ==だと型変換でtrueとして成立する
  $var5 = []; // array

  if ($var1 < 12 && $var2 == 20) {
    echo "Yes, they are true";
    echo "<br>";
    echo var_dump($var2);
  }

  echo "<br><br>";

  $x = 100;
  $y = 50;
  if ($x == 100 AND $y == 50) {
    echo "'AND' is true";
  }

  echo "<br><br>";

  $message = "Hello";
  $greeting = "Good morning";
  $time = 11;

  if ($time < 12 && $message == "Hello") {
    echo $message . " " . $greeting;
  }

  echo "<br><br>";

  # Logical || (OR)
  $var1 = 10;
  $var2 = 20;

  if ($var1 == 10 || $var2 == 20) {
    echo "true1";
    echo "<br>";
  }

  if ($var1 > 15 OR $var2 == 20) {
    echo "true2";
    echo "<br>";
  }

  if ($var1 > 50 || $var2 == $var1) {
    echo "true";
    echo "<br>";
  } else {
    echo "false";
    echo "<br>";
  }

  $paid = true;
  echo var_dump($paid);
  echo "<br>";
  print_r($paid); // 1 or 0, falseだと出力されない
  //echo (Foo Bar); parenthesis

  echo "<br><br>";

  # Logical ! (NOT) example
  $x = 100;
  if ($x !== 90) {
    echo "Not equal: True";
    echo "<br>";
  }

  $paid = false;
  if (!$paid) {
    echo "paid is False";
  }

  echo "<br><br>";

  $switch = "";

  // nullと空白文字の時はfalse扱いになる
  if (!$switch) {
    echo "The switch is turn-on";
  } else {
    echo "The switch is turn-off";
  }

  echo "<br>";

  $condition = true;
  if (!$condition) { 
    // the ! is use to negate a variable
    // we flipped the value from true -> false, or from false -> true
    echo "Condition is false";
  } else {
    echo "Condition is true";
  }
?>
