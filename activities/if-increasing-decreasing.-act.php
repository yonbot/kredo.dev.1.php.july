<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Increasing/Decreasing Act</title>
</head>
<body>
    <div class="container mt-3 w-50">
      <form action="" method="post">
        <div class="card">
          <div class="card-header text-start">
            <h3>Increasing/Decreasing</h3>
          </div>
          <div class="card-body fs-5">
            <div class="row text-start fw-bold">
              <div class="col">
                <input type="number" name="first_number" id="first-number" class="form-control" placeholder="First Number" required>
              </div>
            </div>
            <div class="row text-start fw-bold">
              <div class="col">
              <input type="number" name="second_number" id="second-number" class="form-control" placeholder="Second Number" required>
              </div>
            </div>
            <div class="row text-start fw-bold">
              <div class="col">
              <input type="number" name="third_number" id="third-number" class="form-control" placeholder="Third Number" required>
              </div>
            </div>
            <div class="row text-start fw-bold mt-2">
              <div class="col">
                <input type="submit" name="btn_submit" value="Submit" class="btn btn-primary w-100 fs-5">
              </div>
            </div>
          </div>

          <?php
            if (isset($_POST['btn_submit'])) {
              $f_number = $_POST['first_number'];
              $s_number = $_POST['second_number'];
              $t_number = $_POST['third_number'];
              $message = "";

              if (isIncreasing($f_number, $s_number, $t_number)) {
                $message = "Increasing";
              } elseif (isDecreasing($f_number, $s_number, $t_number)) {
                $message = "Decreasing";
              } else {
                $message = "Neither";
              }

              echo <<<EOM
                <div class="card-footer fs-5">
                  <h2>$message</h2>
                </div>
              EOM;
            }

            function isIncreasing($num1, $num2, $num3) {
              if ($num1 < $num2 && $num2 < $num3) {
                return true;
              }
              return false;
            }

            function isDecreasing($num1, $num2, $num3) {
              if ($num1 > $num2 && $num2 > $num3) {
                return true;
              }
              return false;
            }
            
          ?>

        </div>
      </form>
      

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>