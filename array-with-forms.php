<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Array with forms</title>
</head>
<body>
    
    <form action="" method="post">
      <label for="car1">Car 1: </label>
      <input type="text" name="car[]" id="car1">
      <br>

      <label for="car2">Car 2: </label>
      <input type="text" name="car[]" id="car2">
      <br>

      <input type="submit" name="btn" value="submit">
    </form>

    <?php
      if (isset($_POST['btn'])) {
        $car = $_POST['car'];

        // echo "$car"; // 2つ目の値の方が取得される
        // print_r($car);
        displayCar($car);
      }

      function displayCar($data) {
        foreach($data as $individual_data) {
          echo "$individual_data <br>";
        }
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>