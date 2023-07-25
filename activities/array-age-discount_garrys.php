<?php
function checkPrice($age){
    $rate = 325;

    if($age >= 0 && $age <= 5) { //free
        return 0;
    } elseif ($age >= 6 && $age <= 10){ // 10% discount
        $discount = $rate * .1;
        return $rate - $discount;
        // return $rate * .9;
    }elseif ($age >= 60){// 5% discount
        $discount = $rate * .05;
        return $rate - $discount;
    }elseif ($age >= 11 && $age <= 59){ // normal rate
        return $rate;
    }
}

function total($discounted_price){
    $total = 0; // hold the total value
    foreach($discounted_price as $price){
        $total += $price; // $total = $total + $price
    }
    return $total;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredo Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
        <div class="w-50 text-center mx-auto mb-5">
            <form method="post">
                <label class="form-label display-4">How many people are going to eat?</label>
                <input type="number" name="number_of_people" class="form-control form-control-lg text-center border-primary" min="1" required>

                <input type="submit" name="submit" value="Submit" class="btn btn-success text-uppercase w-50 mt-4">
            </form>
        </div>


        <?php
            if(isset($_POST['submit'])){
                $num_of_people = $_POST['number_of_people'];
            
        ?>
        <hr>

        <div class="w-50 text-center mx-auto">
            <form action="" method="post">
                <label for="" class="display-4 mb-4">Ages of the people attending </label>
                <?php
                for($i = 0; $i < $num_of_people; $i++){
                ?>
                    <input type="number" name="age[]" class="form-control mt-1" placeholder="Enter age here" id="">
                <?php
                }
                ?>
                <input type="submit" name="save" value="Save" class="btn btn-primary mt-2 text-uppercase w-50">
            </form>
        </div>

        <?php
        }if(isset($_POST['save'])){
            $age_array = $_POST['age'];
            $age_counter = count($age_array);
        ?>


        <div class="w-25 mx-auto">
            <table class="table table-bordered border-dark">
                <thead class="table-dark text-center">
                    <tr>
                        <td>AGE</td>
                        <td>PRICE</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($age_array as $age){
                        $discounted_price[] = checkPrice($age); // we are calling the function here
                    ?>
                       
                        <tr>
                            <td class="text-center"><?php echo $age ?></td>
                            <td class="text-center"><?php echo checkPrice($age) ?></td>
                        </tr>
                    <?php
                    }
                    print_r($discounted_price);
                    ?>
                        <tr class="bg-danger text-white border-danger">
                            <td>Total Price</td>
                            <td class="text-end fw-bold"><?= total($discounted_price); ?></td>
                        </tr>
                        <tr class="bg-primary text-white border-primary">
                            <td>Number of People</td>
                            <td class="text-end fw-bold">
                                <?= $age_counter ?>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>

        
        <?php
        }
        ?>


</body>
</html>