<?php
  // echo: reserved keyword
  // echo "Hello world"; //statement
  // echo 'Hello world';
  // echo "Hello", "world";
  // echo "Hello" . " " . "and Japan"; //bind, concatenate
  // ctrl + /

  // Variables
  // $demo; // Case Sensitive
  // $Demo;
  // $1demo - wrong
  // $demo!@3$%~&*()+ - wrong
  // $d1emo1; // correct
  // $demo_1; // unserscore OK correct

  $first_name = "Doraemon  "; // initialize // 9 characters, last space is ignored
  // Left Operand, Right Operand, Replace
  $last_name = "Sato";

  echo "Hello my name is $first_name $last_name and I live in Japan"; // replaceされる
  
  echo "<br>";
  // echo 'Hello my name is $first_name $last_name and I live in Japan'; // replaceされない
  echo 'Hello my name is '. $first_name.' '.$last_name.' and I live in Japan';

  // Integer
  $age = 21;
  $x = -4;

  // Float, Double: fractional number, with decimal point
  $value_of_pi = 3.14159;
  $distance = 4501.4;

  // Boolean, 0:false, 1:true
  $paid = true;
  $is_palindrome = false;

  $demo = null;

  echo "<br>";
  // + Addition
  // - Substraction
  // * Multiplication
  // / Division
  // % Moduro
  $num1 = 10;
  $num2 = 3;
  $total = null;
  $total_modulo = null;

  $total = $num1 + $num2;
  echo "the total is: $total <br>";
  echo "the sum of $num1 + $num2 is: $total <br>";

  $total_modulo = $num1 % $num2;
  echo "the remainder of $num1 % $num2 is: $total_modulo <br>";

  // Compound Assignment Operator, shortcut one
  $num1 += $num2;
  $num1 -= $num2;
  $num1 *= $num2;
  $num1 /= $num2;
  $num1 %= $num2;

  // Increment, Decrement
  // Preincrement, add first before displaying
  echo ++$num1;
  echo --$num1;
  // Postincrement, display first before adding
  echo $num1++;
  echo $num1--;

  echo "<br>";
  $num3 = 10;
  $num4 = 10;
  echo "Pre-increment: ".++$num3."<br>";
  echo "Post-increment: ".$num4++."<br>";
  echo "Calling Post-increment agein: ".$num4++."<br>";

  echo "<br>";

  // Comparison Operator
  // == equal to
  // === identical
  $num5 = 150;
  $num6 = 150;

  // Equal to ( == )
  // データ型を無視する
  if ($num5 == $num6) {
    echo "Equal to: the condition is true <br>";
  } else {
    echo "Equal to: the condition is false <br>";
  }

  // greater than ( > )
  if ($num5 > $num6) {
    echo "Greater than: the condition is true <br>";
  } else {
    echo "Greater than: the condition is false <br>";
  }

  // lesser than ( < )
  if ($num5 < $num6) {
    echo "Lesser than: the condition is true <br>";
  } else {
    echo "Lesser than: the condition is false <br>";
  }

  // strict equal ( === )
  // 数字と文字列の数字が同じでもfalseになる
  // データ型も同じでないといけない
  if ($num5 === $num6) {
    echo "strict equal to: the condition is true <br>";
  } else {
    echo "strict equal to: the condition is false <br>";
  }

  // Greater than or equal to ( >= )
  if ($num5 >= $num6) {
    echo "Greater than or equal to: the condition is true <br>";
  } else {
    echo "Greater than or equal to: the condition is false <br>";
  }

  // Lesser than or equal to ( <= )
  if ($num5 <= $num6) {
    echo "Lesser than or equal to: the condition is true <br>";
  } else {
    echo "Lesser than or equal to: the condition is false <br>";
  }
?>
