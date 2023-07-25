<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>If Consonant Vowel Act</title>
</head>
<body>
    <div class="container mt-3 w-50">
      <form action="" method="post">
        <div class="card">
          <div class="card-header text-start">
            <h3>Consonant or Vowel</h3>
          </div>
          <div class="card-body fs-5">
            <div class="row text-start fw-bold">
              <div class="col">
                <input type="text" name="char" id="char" class="form-control" placeholder="Enter a Character" required>
              </div>
            </div>
            <div class="row text-start fw-bold mt-2">
              <div class="col">
                <input type="submit" name="btn_submit" value="Submit" class="btn btn-primary w-100 fs-5">
              </div>
            </div>
          </div>
        </div>
      </form>
      
      <?php
        if (isset($_POST['btn_submit'])) {
          $char = $_POST['char'];
          $style = 'bg-primary';
          $message = '';

          // strtolower()
          // is_numeric()
          if (strlen($char) >= 2) {
            $style = 'bg-danger';
            $message = 'Error:<br>String with more than 1 character.';
          } elseif (is_numeric($char)) {
            $style = 'bg-danger';
            $message = 'Error:<br>Character is Number.';
          } else {
            $lowerChar = strtolower($char);
            if ($lowerChar == 'a'
              || $lowerChar == 'i'
              || $lowerChar == 'u'
              || $lowerChar == 'e'
              || $lowerChar == 'o') {
              $style = 'bg-success';
              $message = 'Vowel.';
            } else {
              $style = 'bg-primary';
              $message = 'Consonant.';
            }
          }

          echo <<<EOM
          <div class="w-100 bg-transparent rounded p-3 mt-5 p-0 text-white">
            <div class="row h-100 p-0">
              <span class="h-100 h1 $style text-center align-middle">$message</span>
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