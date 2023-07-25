<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Array Age Discount Act</title>
</head>
<body>
    <!-- 
      Reqular: 325
      0 to 5: Free
      6 to 10: 10% discount
      60years old and above 5% discount
     -->
    <div class="container mt-3 w-50">
      <form action="" method="post">
        <div class="row">
          <div class="col text-center">
            <span class="display-4 fw-bold text-center">How many people are going to eat?</span>
          </div>
        </div>
        
        <input type="number" name="number" id="number" class="form-control mt-3" required>

        <div class="row">
          <div class="col text-center">
            <input type="submit" name="btn_submit" value="SUBMIT" class="btn btn-success btn-lg w-50 mt-3">
          </div>
        </div>
      </form>

      <?php
        if (isset($_POST['btn_submit'])) {
          $peopleNumber = $_POST['number'];

          displayAgesInputArea($peopleNumber);
        }

        if (isset($_POST['btn_save'])) {
          $agesArray = $_POST['ages'];

          displayReceiptArea($agesArray);
        }

        function displayAgesInputArea($peopleNumber) {
          echo <<<EOM
          <hr class="mt-5">
          <form action="" method="post">
            <div class="row">
              <div class="col text-center">
                <span class="display-4 fw-bold text-center">Ages of the people attending</span>
              </div>
            </div>
          EOM;
  
          for ($i = 0; $i < $peopleNumber; $i++) {
            echo '<input type="number" name="ages[]" id="ages" class="form-control mt-1" required>';
          }
          
          echo <<<EOM
            <div class="row">
              <div class="col text-center">
                <input type="submit" name="btn_save" value="SAVE" class="btn btn-primary btn-lg w-50 mt-3">
              </div>
            </div>
          </form>
          EOM;
        }

        function displayReceiptArea($agesArray) {
          echo <<<EOM
          <hr class="mt-5">
          <table class="table table-bordered 
            table-hover
            table-sm
            w-100">
          EOM;

          print_r($agesArray);

          echo <<<EOM
            <thead>
              <tr class="text-center">
                <td class="bg-dark text-white w-50">AGE</td>
                <td class="bg-dark text-white w-50">PRICE</td>
              </tr>
            </thead>
            <tbody>
          EOM;

          $discountPer_0to5 = 100;
          $discountPer_6to10 = 10;
          $discountPer_over60 = 5;
          $discountPer_other = 0;

          $price = 0;
          $total = 0;
          $peopleCount = count($agesArray);

          foreach($agesArray as $age) {
            echo <<<EOM
              <tr class="text-center">
                <td class="bg-white text-dark">$age</td>
            EOM;

            if ($age >= 0 && $age <= 5) {
              $price = calcDiscountPrice($discountPer_0to5);
            } elseif ($age >= 6 && $age <= 10) {
              $price = calcDiscountPrice($discountPer_6to10);
            } elseif ($age >= 60) {
              $price = calcDiscountPrice($discountPer_over60);
            } else {
              $price = calcDiscountPrice($discountPer_other);
            }

            $total += $price;

            echo <<<EOM
                <td class="bg-white text-dark">$price</td>
              </tr>
            EOM;
          }

          echo <<<EOM
              <tr>
                <td class="bg-danger text-white text-start">Total Price</td>
                <td class="bg-danger text-white text-end fw-bold">$total</td>
              </tr>
              <tr>
                <td class="bg-primary text-white text-start">Total Number</td>
                <td class="bg-primary text-white text-end fw-bold">$peopleCount</td>
              </tr>
            </tbody>
          </table>
          EOM;
        }

        function calcDiscountPrice($discountPercent) {
          $regularPrice = 325;

          return round($regularPrice * (1 - ($discountPercent / 100)));
        }
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>