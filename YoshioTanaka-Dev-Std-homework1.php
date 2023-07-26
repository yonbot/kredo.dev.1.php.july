<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>dev std homework</title>
</head>
<body>
    <!-- 
      session_start();
      $_SESSION[]
      SESSION()
      count()
      number_format()
      2 decimal places
      divisible by 10 only
     -->
    <div class="container mt-3 w-50">
      <div class="w-100 bg-dark p-3 rounded">
        <form action="" method="post">
          <div class="row">
            <div class="col text-center px-1">
              <span class="h3 text-center text-white px-0">
                How many products do you want to buy?
              </span>
            </div>
          </div>
          
          <!-- テキストフォームを中央寄せするにはテキストフォームにmx-auto -->
          <!-- テキストフォーム内の文字を中央寄せするにはテキストフォームにtext-center -->
          <div class="row mt-4">
            <div class="col">
              <input type="number" name="number" id="number" 
                class="form-control w-50 mx-auto text-center" required>
            </div>
          </div>

          <!-- ボタンを中央寄せするにはcolにtext-center -->
          <div class="row mt-4 mb-1">
            <div class="col text-center">
              <input type="submit" name="btn_submit" value="Submit" 
                class="btn btn-primary btn-md w-25 fw-bold">
            </div>
          </div>
        </form>
      </div>

      <?php
        if (isset($_POST['btn_submit'])) {
          $productNumber = $_POST['number'];

          displayProductsInputForm($productNumber);
        }

        if (isset($_POST['btn_save'])) {
          # Save to session each array
          $_SESSION['namesArray'] = $_POST['product_names'];
          $_SESSION['pricesArray'] = $_POST['product_prices'];

          displayQuantityInputForm();
        }

        if (isset($_POST['btn_compute'])) {
          # Save to session each array
          $_SESSION['pricesArray'] = $_POST['product_prices'];
          $_SESSION['quantitiesArray'] = $_POST['product_quantities'];

          displaySummaryTable();
        }

        if (isset($_POST['btn_back'])) {
          # clear session values
          unset($_SESSION['namesArray']);
          unset($_SESSION['pricesArray']);
          unset($_SESSION['quantitiesArray']);
        }

        function displayProductsInputForm($productNumber) {
          echo <<<EOM
          <div class="w-100 bg-dark p-3 rounded mt-3 mb-3">
            <form action="" method="post">
              <div class="row">
                <div class="col text-center px-1">
                  <span class="h3 text-center text-white px-0">
                    Details of the Products
                  </span>
                </div>
              </div>
              <div class="row mt-3">
                <label for="" 
                  class="col-form-label col text-start text-warning fw-bold">
                  Product Name
                </label>
                <label for="" 
                  class="col-form-label col text-end text-warning fw-bold">
                  Product Price
                </label>
              </div>
          EOM;
  
          for ($i = 0; $i < $productNumber; $i++) {
            $idNum = $i + 1;
            echo <<<EOM
              <div class="row mt-1">
                <div class="col p-2">
                  <input type="text" name="product_names[]" id="product$idNum-name"
                    class="form-control w-100 text-start" 
                    placeholder="Product $idNum"
                  required>
                </div>
                <div class="col p-2">
                  <input type="number" name="product_prices[]" id="product$idNum-price"
                    class="form-control w-100 text-end" 
                    placeholder="Product $idNum Price"
                  required>
                </div>
              </div>
            EOM;
          }
          
          echo <<<EOM
              <div class="row mt-4 mb-1">
                <div class="col text-center">
                  <input type="submit" name="btn_save" value="Save" 
                    class="btn btn-warning btn-md w-25 fw-bold">
                </div>
              </div>
            </form>
          </div>
          EOM;
        }

        function displayQuantityInputForm() {
          echo <<<EOM
          <div class="w-100 bg-dark p-3 rounded mt-3 mb-3">
            <form action="" method="post">
              <div class="row">
                <div class="col text-center px-1">
                  <span class="h3 text-center text-white px-0">
                    Buy Quantity
                  </span>
                </div>
              </div>
              <div class="row mt-3">
                <label for="" 
                  class="col-form-label col text-start text-danger fw-bold">
                  Product Price
                </label>
                <label for="" 
                  class="col-form-label col text-end text-danger fw-bold">
                  Product Quantity
                </label>
              </div>
          EOM;
  
          # Get arrays from session
          $namesArray = $_SESSION['namesArray'];
          $pricesArray = $_SESSION['pricesArray'];

          # ラベル文字を右寄せするにはラベル幅をまず100%にする必要がある
          for ($i = 0; $i < count($namesArray); $i++) {
            $idNum = $i + 1;
            $priceLabelName = $namesArray[$i] . "'s Price";
            $quantityLabelName = $namesArray[$i] . "'s Quantity";
            $priceValue = $pricesArray[$i];

            echo <<<EOM
              <div class="row mt-0">
                <div class="col p-2">
                  <label for="" class="form-label w-100 text-white text-start">
                    $priceLabelName
                  </label>
                  <input type="number" name="product_prices[]" id="product$idNum-price"
                    class="form-control w-100 text-start" 
                    value="$priceValue"
                  required>
                </div>
                <div class="col p-2">
                  <label for="" class="form-label w-100 text-white text-end">
                    $quantityLabelName
                  </label>
                  <input type="number" name="product_quantities[]" id="product$idNum-quantity"
                    class="form-control w-100 text-end" 
                  required>
                </div>
              </div>
            EOM;
          }
          
          echo <<<EOM
              <div class="row mt-4">
                <div class="col text-center fst-italic fw-bold">
                  <div class="w-50 mx-auto p-2 bg-info rounded">
                    <i class="fa-solid fa-tag"></i>avail 10% discount for every 10pcs / quantities EACH PRODUCT!
                  </div>
                </div>
              </div>
              <div class="row mt-4 mb-1">
                <div class="col text-center">
                  <input type="submit" name="btn_compute" value="Compute" 
                    class="btn btn-danger btn-md w-100 fw-bold">
                </div>
              </div>
            </form>
          </div>
          EOM;
        }

        # テーブル背景色を設定するにはtheadやtbodyにtable-dark等を設定する
        function displaySummaryTable() {
          echo <<<EOM
          <div class="w-100 bg-dark p-3 rounded mt-3 mb-3">
            <div class="row">
              <div class="col text-center px-1">
                <span class="h3 text-center text-white px-0">
                  Sales Summary
                </span>
              </div>
            </div>

            <table class="table
              table-striped table-hover 
              table-sm
              w-100 mt-4">

              <thead class="table-dark">
                <tr class="align-middle">
                  <td class="text-warning fw-bold text-start">Product</td>
                  <td class="text-warning fw-bold text-end">Price</td>
                  <td class="text-warning fw-bold text-end">Quantity</td>
                  <td class="text-warning fw-bold text-end">Discount</td>
                  <td class="text-warning fw-bold text-end">Total</td>
                </tr>
              </thead>
              <tbody class="table-dark">
          EOM;

          # Get arrays from session
          $namesArray = $_SESSION['namesArray'];
          $pricesArray = $_SESSION['pricesArray'];
          $quantitiesArray = $_SESSION['quantitiesArray'];

          $grandTotal = 0;

          for ($i = 0; $i < count($namesArray); $i++) {
            $product = $namesArray[$i];
            $price = $pricesArray[$i];
            $quantity = $quantitiesArray[$i];
            $discount = calcDiscount($price, $quantity);
            $total = ($price * $quantity) - $discount;
            $grandTotal += $total;

            $price_formatted = '$'. number_format($price, 2);
            $discount_formatted = '$'. number_format($discount, 2);
            $total_formatted = '$'. number_format($total, 2);

            if ($discount == 0) {
              $discount_formatted = 'no discount';

              echo <<<EOM
                <tr class="align-middle">
                  <td class="text-white fw-bold text-start">$product</td>
                  <td class="text-white fw-bold text-end">$price_formatted</td>
                  <td class="text-white fw-bold text-end">$quantity</td>
                  <td class="text-white fst-italic text-end">$discount_formatted</td>
                  <td class="text-white fw-bold text-end">$total_formatted</td>
                </tr>
              EOM;
            } else {
              echo <<<EOM
                <tr class="align-middle">
                  <td class="text-white fw-bold text-start">$product</td>
                  <td class="text-white fw-bold text-end">$price_formatted</td>
                  <td class="text-white fw-bold text-end">$quantity</td>
                  <td class="text-white fw-bold text-end">$discount_formatted</td>
                  <td class="text-white fw-bold text-end">$total_formatted</td>
                </tr>
              EOM;
            }
          }

          $grandtotal_formatted = '$'. number_format($grandTotal, 2);

          echo <<<EOM
                <tr class="align-middle">
                  <td colspan="4" class="bg-dark h3 text-danger fw-bold text-end">Grand Total:</td>
                  <td class="bg-dark h3 text-white fw-bold text-end">$grandtotal_formatted</td>
                </tr>
              </tbody>
            </table>
            <form action="" method="post">
              <div class="row mt-5 mb-4">
                <div class="col text-center">
                  <input type="submit" name="btn_back" value="Back to homepage" 
                    class="btn btn-secondary btn-md w-50 fw-bold">
                </div>
              </div>
            </form>
          EOM;
        }

        function calcDiscount($price, $quantity) {
          $baseDiscountPercent = 10;
          $baseDiscountPics = 10;
          $baseDiscountPrice = $price * $baseDiscountPics * ($baseDiscountPercent / 100);

          $discountCount = floor($quantity / $baseDiscountPics);
          $discount = $baseDiscountPrice * $discountCount;

          return $discount;
        }
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>