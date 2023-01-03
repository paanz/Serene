 
<?php 



//------------- Database Connection ----------------
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "admin";
    global $conn;

    $conn = new mysqli($servername, $username, $password, $db); // Object-oriented

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['emailform'])){
    
    $email=$_POST['emailform'];
    $password=$_POST['passwordform'];
    
    $sql="select * from admin where admin_Email='".$email."' AND admin_Password='".$password."' limit 1";
    
    $result=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)==1){
        //include'serene/Admin Dashboard/GBJ Realty Admin Dashboard.php';
        header("Location: ../Admin Dashboard/GBJ Realty Admin Dashboard.php");
        exit();
    }
    
    
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/login-css.css">
         
    <title>Login Form</title>
</head>
<body class="my-login-page">
    
    <div class="container">

        <div class="forms">
            <div class="form login">

                <div class="brand">
                    <img src="img/GBJSB-Logo2.png" alt="logo">
                </div>
                
                <span class="title">Login</span>

                <form id="form" action="#" method="POST">
                    <div class="input-field">
                        <input type="email" name="emailform" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="passwordform" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>
                <?php

                ?>

            </div>

        </div>
    </div>

    <script src="js/login-js.js"></script>
</body>
</html>

