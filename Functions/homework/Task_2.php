<?php 
    function Calculator($a){
        if($a == "Qo'shish"){
            echo $_POST['first'] + $_POST['second'];
        } elseif($a == "Ayirish"){
            echo $_POST['first'] - $_POST['second'];
        } elseif($a == "Ko'paytirish"){
            echo $_POST['first'] * $_POST['second'];
        } elseif($a == "Bo'lish"){
            echo round($_POST['first'] / $_POST['second'] , 2);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="numeric"] {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result-label {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <form action="Task_2.php" method="post">
        <label for=""><h1>Kalkulator</h1></label> <br><br>
        First Number<input type="numeric" name="first"><br>
        Second Number<input type="numeric" name="second"><br>

        <br>RESULT = <label for="">

            <?php
                Calculator($_POST['option']);
            ?>
        
        </label><br>
    
        <input type="submit" value="Qo'shish" name="option"> 
        <input type="submit" value="Ayirish" name="option">  
        <input type="submit" value="Ko'paytirish" name="option"> 
        <input type="submit" value="Bo'lish" name="option"> 
    </form>

</body>

</html>