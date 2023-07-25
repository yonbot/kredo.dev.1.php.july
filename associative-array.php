<?php

  $market = array(
    "fruits" => "Banana", 
    "Vegetable" => "Carrot"
  );

  // print_r($market);

  foreach($market as $category => $specific_data) {
    echo "$specific_data is a $category <br>";
  }
?>