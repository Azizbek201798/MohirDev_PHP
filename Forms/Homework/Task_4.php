<?php

    $natija = null;
    if(isset($_POST['son_1']) && !empty($_POST['son_1']) && isset($_POST['son_2']) && !empty($_POST['son_2'])){
        if(is_numeric($_POST['son_1']) && is_numeric($_POST['son_2'])){
            if($_POST['operation'] == "+"){
                $natija = $_POST['son_1'] + $_POST['son_2'];
            } elseif($_POST['operation'] == "-"){
                $natija = $_POST['son_1'] - $_POST['son_2'];
            } elseif($_POST['operation'] == "*"){
                $natija = $_POST['son_1'] * $_POST['son_2'];
            } elseif($_POST['operation'] == "/"){
                $natija = ceil($_POST['son_1'] / $_POST['son_2']);
            }
        } else {
            echo "Warning : son_1 va son_2 ga faqat son kiriting!\n";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <form action="Task_4.php" name="calculator" method="post">
        Son_1 <input type="numeric" name="son_1"><br>
        Son_2 <input type="numeric" name="son_2"><br>

        Operations:
        <input type="radio" name="operation" value="+"> +
        <input type="radio" name="operation" value="-"> - 
        <input type="radio" name="operation" value="*"> *
        <input type="radio" name="operation" value="/"> / <br>

        <input type="submit" name="submit">

    </form>


</body>
</html>

<?php

echo "Natija : " . $natija . PHP_EOL;

?>