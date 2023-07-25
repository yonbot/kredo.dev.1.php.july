<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Leap or Not Act</title>
</head>
<body>
    <div class="container mt-3 w-50">
      <form action="" method="post">
        <div class="card">
          <div class="card-header text-start">
            <h3>Leap or Not</h3>
            <h5>Enter any year and I will tell if it's a leap year or not<h5>
          </div>
          <div class="card-body fs-5">
            <div class="row text-start fw-bold">
              <div class="col">
                <input type="number" name="year" id="year" class="form-control" placeholder="Enter year" required>
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
              $year = $_POST['year'];
              $message = "";

              if ($year % 4 == 0) {
                # It is divisible by 4
                if ($year % 100 == 0) {
                  # It is divisible by 100
                  if ($year % 400 == 0) {
                    # It is divisible by 400
                    $message = "Leap Year: $year <br>(divisible by 4, 100, 400)";
                  } else {
                    $message = "Not Leap: $year ";
                  }
                } else {
                  $message = "Leap Year: $year <br>(divisible by 4, not 100)";
                }
              } else {
                $message = "Not Leap: $year ";
              }

              echo <<<EOM
                <div class="card-footer fs-5">
                  <h2>$message</h2>
                </div>
              EOM;
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