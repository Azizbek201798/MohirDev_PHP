<div class="form-container">
    <form action="Task_1.php" method="post" name="phone">
        Phone : <input type="text" required name="phone" >
        <input type="submit">
    </form>
</div>

<?php

    if (isset($_POST['phone']) && !empty($_POST['phone'])){
        if(strlen($_POST['phone']) != 13 || (substr($_POST['phone'],0,4) != "+998") || !is_numeric(substr($_POST['phone'],1,12))) {
            echo $_POST['phone'] . " - bu Telefon raqam emas!\n";
        } else {
            echo $_POST['phone'] . " - bu Telefon raqam!\n";
        }
    } else {
        echo "Malumot kelmadi!\n";
    }

?>