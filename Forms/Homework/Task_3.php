<?php

    if(isset($_POST['number']) && !empty($_POST['number'])){
        $number = $_POST['number'];
        switch ($number) {
            case 1:
                echo "Dushanba";
                break;
            case 2:
                echo "Seshanba";
                break;
            case 3:
                echo "Chorshanba";
                break;
            case 4:
                echo "Payshanba";
                break;
            case 5:
                echo "Juma";
                break;
            case 6:
                echo "Shanba";
                break;
            case 7:
                echo "Yakshanba";
                break;
            default:
                echo "1 dan 7 gacha bo'lgan son kiriting!\n";
                break;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekdays</title>
</head>
<body>
    
    <div class="form-container">
        <form action="Task_3.php" method="post">
            <label for="number">1 dan 7 gacha son kiriting!</label><br>
            Number <input type="numeric" name="number"><br>
            <input type="submit" value="Submit"><br>
        </form>
    </div>

</body>
</html>