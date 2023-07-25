<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Array Address Lookup Act</title>
</head>
<body>
    <div class="container mt-3 w-50">
      <form action="" method="post">
        <div class="card">
          <div class="card-header text-start bg-success text-white">
            <h3>Welcome to the Green Pages</h3>
          </div>
          <div class="card-body fs-5">
            <div class="row text-start fw-bold">
              <div class="col">
              <select name="person" id="person" class="form-select">
                <option value="" hidden>Select Name</option>
                <?php
                  # define assosicative array
                  $pages = array(
                    "Mark" => "New York", 
                    "Chris" => "London",
                    "Marie" => "Paris",
                    "Kenzo" => "Israel",
                    "Troye" => "Spain"
                  );

                  # make option tags
                  # <?= $name echoの代わりに使えるショートカット
                  foreach($pages as $name => $city) {
                    echo "<option value=\"$name\">$name</option>";
                  }
                ?>
              </select>
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
              $person_name = $_POST['person'];

              echo '<div class="card-footer fs-5">';

              foreach($pages as $name => $city) {
                if ($person_name == $name) {
                  echo "$person_name lives in $city";
                }
              }

              echo '</div>';
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