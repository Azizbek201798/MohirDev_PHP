<?php

    $menu = ["Mastava" => 16000, "Moxora" => 15500, "Shorva" => 15000,"Norin" => 20500,
             "Osh" => 20000, "Manti" => 18500, "Qozon_Kabob" => 23000, "Lagmon" => 21500,
             "Choy" => 2000, "Coca_Cola" => 8000, "Fanta" => 8000, "Kofe" => 10500,
             "Achchiq_Chuchuk" => 5000, "Olivye" => 8000, "Fransuzkiy" => 8000, "Mujskoy_Kapriz" => 10500];

    $total = 0;

    foreach($menu as $taom => $price){
        if (isset($_POST[$taom])){
            $total += $price;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    
    <h1>Menu</h1>
    <h4>1-taom</h4>

    <form action="Task_6.php" method="POST" >
            <input type="radio" name="Mastava" value="Mastava"> Mastava(16 000 so'm)
            <input type="radio" name="Moxora" value="Moxora"> Moxora(15 500 so'm)
            <input type="radio" name="Shorva" value="Shorva"> Sho'rva(15 000 so'm)
            <input type="radio" name="Norin" value="Norin"> Norin(20 500 so'm)
    <h4>2-taom</h4>
            <input type="radio" name="Osh" value="Osh"> Osh(20 000 so'm)
            <input type="radio" name="Manti" value="Manti"> Manti(18 500 so'm)
            <input type="radio" name="Qozon_Kabob" value="Qozon_Kabob"> Qozon Kabob(23 000 so'm)
            <input type="radio" name="Lagmon" value="Lagmon"> Lag'mon(21 500 so'm)
    <h4>Ichimlik</h4>
            <input type="radio" name="Choy" value="Choy"> Choy(2 000 so'm)
            <input type="radio" name="Coca_Cola" value="Coca_Cola"> Coca Cola(8 000 so'm)
            <input type="radio" name="Fanta" value="Fanta"> Fanta(8 000 so'm)
            <input type="radio" name="Kofe" value="Kofe"> Kofe(10 500 so'm)
    <h4>Salat</h4>
            <input type="radio" name="Achchiq_Chuchuk" value="Achchiq_Chuchuk"> Achchiq Chuchuk(5 000 so'm)
            <input type="radio" name="Olivye" value="Olivye"> Olivye(8 000 so'm)
            <input type="radio" name="Fransuzkiy" value="Fransuzkiy"> Fransuzkiy(8 000 so'm)
            <input type="radio" name="Mujskoy_Kapriz" value="Mujskoy_Kapriz"> Mujskoy Kapriz(10 500 so'm) <br><br>
    <input type="submit" name="Hisoblash" value="Hisoblash">
    
    </form>

    <h1>15% usluga</h1>

    <?php if (isset($_POST['Hisoblash'])) :?>
        <h1>Jami : <?php echo ($total * 1.15) . " so'm;"?></h1>
    <?php endif?>   
     
    </body>
</html>