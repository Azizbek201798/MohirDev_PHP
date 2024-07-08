<?php
    echo "<pre>";
    if (isset($_POST['password']) && !empty($_POST['password'])){
        echo "Yes\n";
    } else {
        echo "No\n";
    }


    // echo $_POST['username'] . PHP_EOL;
    // echo $_POST['password'] . PHP_EOL;
?>