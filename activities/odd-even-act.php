<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Which number is greater Act</title>
</head>
<body>
    <div class="container mt-3 w-50">
      <form action="" method="post">
        <div class="card">
          <div class="card-header text-start">
            <h3>Odd Even</h3>
          </div>
          <div class="card-body fs-5">
            <div class="row text-start fw-bold">
              <label for="number" class="col-form-label col">Number</label>
              <div class="col">
                <input type="number" name="number" id="number" class="form-control" required>
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
          $number = $_POST['number'];
          $Moduro = $number % 2;

          echo <<<EOM
          <div class="w-100 bg-transparent rounded p-3 mt-5 p-0 text-white" style="height: 200px">
            <div class="row h-100 p-0">
          EOM;

          if ($Moduro == 0) {
            echo "<span class=\"h-100 h1 bg-danger text-center align-middle \">Even: $number</span>";
          } else {
            echo "<span class=\"h-100 h1 bg-primary text-center align-middle \">Odd: $number</span>";
          }

          echo <<<EOM
            </div>
          </div>
          EOM;
        }
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>