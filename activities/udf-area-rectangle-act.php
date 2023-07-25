<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>UDF Rectangle Act</title>
</head>
<body>
    <div class="container mt-3 w-50">
      <form action="" method="post">
        <div class="card">
          <div class="card-header text-start">
            <h3>Area of Rectangle</h3>
          </div>
          <div class="card-body fs-5">
            <div class="row text-start fw-bold">
              <label for="length" class="col-form-label col">Enter Length</label>
              <div class="col">
                <input type="number" name="length" id="length" class="form-control" required>
              </div>
            </div>
            <div class="row text-start fw-bold mt-2">
              <label for="width" class="col-form-label col">Enter Width</label>
              <div class="col">
                <input type="number" name="width" id="width" class="form-control" required>
              </div>
            </div>
            <div class="row text-start fw-bold mt-2">
              <div class="col"></div>
              <div class="col">
                <input type="submit" name="btn_submit" value="Submit" class="btn btn-primary w-100 fs-5">
              </div>
            </div>
          </div>
        </div>
      </form>
      
      <?php
        if (isset($_POST['btn_submit'])) {
          $length = $_POST['length'];
          $width = $_POST['width'];
          $rectangleArea = calcRectangle($length, $width);

          echo <<<EOM

          <div class="w-100 bg-white border border-secondary rounded mt-5 p-3">
            <div class="row">
              <span class="fs-5">length = $length</span>
              <span class="fs-5">width = $width</span>
            </div>
            <hr>
            <div class="row">
              <span class="fs-5 fw-bold">Area of Rectangle = $rectangleArea</span>
            </div>
          </div>

          EOM;
        }

        function calcRectangle($num1, $num2) {
          return $num1 * $num2;
        }
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>