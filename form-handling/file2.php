<?php
  // $name = $_GET['name'];
  // $email = $_GET['email'];
  // $card = $_GET['cc_details'];

  // $name = $_POST['name'];
  // $email = $_POST['email'];
  // $card_no = $_POST['cc_details'];

  // echo "Name is $name<br>";
  // echo "Email: $email<br>";
  // echo "CardNo: $card<br>";

  // submitボタンの名称を取れる
  // nullかno valueだとfalseになる
  // formがsubmitされたかのチェックに使える
  if (isset($_POST['btn_submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $card = $_POST['cc_details'];

    echo "Name is $name<br>";
    echo "Email: $email<br>";
    echo "CardNo: $card<br>";
  }


?>