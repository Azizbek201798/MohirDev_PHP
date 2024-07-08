<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php

$name = null;
$password = null;
$phone = null;

if(isset($_POST['firstname']) && !empty($_POST['firstname']) &&
    isset($_POST['phone']) && !empty($_POST['phone']) &&
    isset($_POST['password']) && !empty($_POST['password']) 
){

    $name = $_POST["firstname"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    
    if(strlen($name) < 6 || strlen($password) < 6){
        echo "Xatolik - name yoki password uzunligi 6 dan kam\n";
    }

    if (substr($phone,0,4) != "+998" || strlen($phone) != 13 || !is_numeric(substr($phone,1,12))){
        echo "Xatolik - telefon nomer emas\n";
    }
}

?>

<div class="col-md-2">
    <form name="registration" method="post" action="practice.php">
      
        <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" required name="firstname" value=<?= $name ?> placeholder="Enter name ">
        </div>
      
        <div class="form-group">
        <label for="exampleInputPhone">Phone Number</label>
        <input type="text" class="form-control" id="exampleInputPhone" required name="phone" value=<?= $phone ?> placeholder="Enter PhoneNumber ">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" required name="password" value=<?= $password ?> id="exampleInputPassword1" placeholder="Password">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->
