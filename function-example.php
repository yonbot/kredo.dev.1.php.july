<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function Example</title>
</head>
<body>
  <form action="#" method="post">
    <label for="first-number">First Number</label>
    <input type="number" name="first_number" id="first-number">

    <label for="second-number">Second Number</label>
    <input type="number" name="second_number" id="second-number">

    <input type="submit" name="btn_add" value="Calculate">

    <?php
      # Input, Process, Output
      if (isset($_POST['btn_add'])) {
        # Input
        $first_num = $_POST['first_number'];
        $second_num = $_POST['second_number'];

        # Process
        $sum = addTheTwoNumber($first_num, $second_num);

        # Output
        displayOutput($sum);
      }

      function addTheTwoNumber($x, $y) {
        return $x + $y;
      }

      function displayOutput($sum) {
        echo $sum;
      }
    ?>
  </form>
</body>
</html>