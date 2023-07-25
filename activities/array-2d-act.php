<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array 2d Act</title>
</head>
<body>
  <div class="container w-50">
        <?php
          $cities = array(
            "Hokkaido" => array(
                            "Hokkaido" => "Sapporo"
                          ),
            "Chubu" => array(
                        "Ishikawa" => "Kanazawa",
                        "Shizuoka" => "Fuji",
                        "Toyama" => "Toyama",
                        "Aichi" => "Nagoya"
                       ),
            "Chugoku" => array(
                          "Yamaguchi" => "Shimonoseki",
                          "Tottori" => "Tottori"
                         )
          );

          foreach($cities as $area_category => $sub_category) {
            echo '<table border="1">';
            echo "<caption>$area_category</caption>";
            echo "<tr>";
            echo "<th>Prefecture</th>";
            echo "<th>City</th>";
            echo "</tr>";

            foreach($sub_category as $prefecture => $city) {
              echo "<tr>";
              echo " <td>$prefecture</td>";
              echo " <td>$city</td>";
              echo "</tr>";
            }
            echo '</table><br>';
          }
        ?>
  </div>
</body>
</html>