<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Act2</title>
</head>
<body>
  <form action="" method="post">
    <input type="submit" name="btn_monday" value="Monday">
    <input type="submit" name="btn_tuesday" value="Tuesday">
    <input type="submit" name="btn_wednesday" value="Wednesday">
    <input type="submit" name="btn_thursday" value="Thursday">
    <input type="submit" name="btn_friday" value="Friday">
  </form>

  <?php
    if (isset($_POST['btn_monday'])) {
      echo "Monday is pushed.";
    }
    if (isset($_POST['btn_tuesday'])) {
      echo "Tuesday is pushed.";
    }
    if (isset($_POST['btn_wednesday'])) {
      echo "Wednesday is pushed.";
    }
    if (isset($_POST['btn_thursday'])) {
      echo "Thursday is pushed.";
    }
    if (isset($_POST['btn_friday'])) {
      echo "Friday is pushed.";
    }
  ?>
</body>
</html>