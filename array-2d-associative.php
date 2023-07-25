<?php
  $market = array(
    "round" => array("fruit1" => "orange", "fruit2" => "watermelon"),
    "yellow" => array("fruit3" => "banana", "fruit4" => "mango")
  );

  print_r($market);
  echo "<br>";

  echo $market['round']['fruit1'];
  echo "<br>";

  foreach($market as $main_category => $sub_category) {
    echo "$main_category: <br>";
    foreach($sub_category as $fruit_num => $fruit) {
      echo "　$fruit_num : $fruit<br>";
    }
  }
?>