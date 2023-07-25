<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Array Quiz Cal Act</title>
</head>
<body>
    
    <form action="" method="post">
      <label for="car1">Number of Countries Visited? </label>
      <input type="number" name="number" id="number">

      <input type="submit" name="btn_submit" value="Submit">
    </form>

    <?php
      if (isset($_POST['btn_submit'])) {
        $number = $_POST['number'];

        displayCountryInput($number);
      }

      if (isset($_POST['btn_save'])) {
        $numberArray = $_POST['number'];

        # PHP描画部分はクリアして再描画される
        displayCountryName($numberArray);
      }

      function displayCountryInput($number) {
        echo '<form action="" method="post">';

        for ($i = 0; $i < $number; $i++) {
          echo <<<EOM
            <label for="number">Number: </label>
            <input type="number" name="number[]" id="number">
            <br>
          EOM;
        }

        echo '<input type="submit" name="btn_save" value="Save">';
        echo '</form>';
      }

      function displayCountryName($numberArray) {
        $average = 0;
        $count = 0;
        foreach($numberArray as $number) {
          $average += $number;
          $count++;
        }
        echo $average / $count;
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>