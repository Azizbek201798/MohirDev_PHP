<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qo'shish</title>
</head>
<body>

    <form action="Task_2.php" name="Qoshish" method="post">
        Son_1 <input type="numeric" required name="son_1"><br>
        Son_2 <input type="numeric" required name="son_2"><br>
        <input type="submit" name="qoshish"><br>
    </form>    

</body>
</html>

<?php

    echo "Summa = " . ($_POST['son_1'] + $_POST['son_2']);

?>