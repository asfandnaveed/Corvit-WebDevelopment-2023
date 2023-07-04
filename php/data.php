<?php
$serverName="localhost";
$userName="root";
$password="";
$dataBaseName="corvit";

$con= new mysqli($serverName,$userName,$password,$dataBaseName);


if( isset($_POST['name']) ){

    $name = $_POST['name'];
    $fatherName = $_POST['fatherName'];
    $email = $_POST['email'];
    $passowrd = $_POST['password'];
    $age = $_POST['age'];
    $phone = $_POST['phNumber'];
    $gender = $_POST['gender'];
    $rollNo = $_POST['rollNum'];

    $sql= "INSERT INTO students (`name`,`father_name`,`gender`,`roll_num`,`age`,`email`,`password`,`phone_no`) VALUES ('$name','$fatherName','$gender','$rollNo','$age','$email','$passowrd','$phone')";


    if( $con->query($sql) == TRUE ){
     echo '<h1>Data Inserted</h1>';
    }else{
     echo 'Something Went Wrong';
    }


}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    


    <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Sign Up</h3>
            <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p>
            <div class="card">
                <h5 class="text-center mb-4"></h5>
                <form class="form-card" method="POST" action="data.php">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="name" placeholder="Enter your first name" > 
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Father Name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="fatherName" placeholder="Enter your name" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Business email<span class="text-danger"> *</span></label> <input type="email" id="email" name="email" placeholder="" > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="phNumber" placeholder="" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Roll Number<span class="text-danger"> *</span></label> <input type="text" id="job" name="rollNum" placeholder="" onblur="validate(5)"> </div>
                    
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" id="job" name="password" placeholder=""> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Gender<span class="text-danger"> *</span></label> <input type="text" id="job" name="gender" placeholder="" > </div>
                    
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Age<span class="text-danger"> *</span></label> <input type="number" id="job" name="age" placeholder="" > </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Sign Up</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>