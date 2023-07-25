<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sum Activity</title>
</head>
<body>
  <form action="" method="post">
    <label for="first-number">First Number: </label>
    <input type="number" name="first_number" id="first-number" 
    placeholder="First Number" required><br>
    <label for="second-number">Second Number: </label>
    <input type="number" name="second_number" id="second-number" 
    placeholder="Second Number" required><br>

    <input type="submit" name="btn_submit" value="Submit">
  </form>

  <?php
      if (isset($_POST['btn_submit'])) {
        $first_number = $_POST['first_number'];
        $second_number = $_POST['second_number'];
        $sum = $first_number + $second_number;

        echo "Sum of $first_number and $second_number is $sum.";
      }
  ?>
</body>
</html>