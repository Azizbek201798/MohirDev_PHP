<?php

    function Validation(string $phone_number){
        // if (substr($phone_number,0,4) == "+998" && strlen($phone_number) == 11 &&  is_numeric(substr($phone_number,1)) && (substr($phone_number,5,2) == '90' || substr($phone_number,5,2) == '91')){
        if (substr($phone_number,0,4) == "+998" && strlen($phone_number) == 13 &&  is_numeric(substr($phone_number,1,13)) && (substr($phone_number,4,2) == '90' || substr($phone_number,4,2) == '91')){
            return "Beeline\n";
        } elseif((substr($phone_number,0,4) == "+998" && strlen($phone_number) == 13 &&  is_numeric(substr($phone_number,1)) && (substr($phone_number,4,2) == '97'))) {
            return "Mobiuz\n";
        } else {
            return "Xato nomer kiritildi\n";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefon raqam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container center-form">
        <form action="Task_5.php" method="POST">
            <div class="form-group">
              <label for="exampleInputPassword1">Phone Number</label><br>
              <input type="text" name="phone" class="form-control" placeholder="Enter your phone Number : "><br>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Send Number</button>
        </form>
        <h3>
            <?php 
                if (isset($_POST['submit'])){
                    echo Validation($_POST['phone']); 
                }
            ?>
        </h3>
    </div>
</body>
</html>