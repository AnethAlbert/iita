<?php
session_start();
include"db.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uname'];  
    $password = $_POST['password'];  
  
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "select * from attendance where User_name = '$username' and Password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
       header("location: attendance.php");
        }
    if($count == 0){
        die("<h1>Invalid details. pleace refresh</h1>");
       }
}    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMS</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 500px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: white;
            color: black;
            text-align: center;
            font-size: 9px;
            padding: 20px 0; /* Added padding to the header */
        }

        .card-header img {
            max-width: 100px; /* Limit the logo width */
            margin-bottom: 10px; /* Added margin for spacing */
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* Added style for the registration link */
        .form-group p {
            text-align: center;
        }

        .form-group a {
            text-decoration: none;
            color: #007bff;
        }

        .form-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="assets/img/logo.jpg" alt="Logo">
                <h5>STAFF ATTENDANCE MANAGEMENT SYSTEM</h5>
                <h4>LOGIN</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="uname">User Name</label>
                        <input type="text" name="uname" required placeholder="Enter your user name" id="uname" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" name="password" placeholder="Enter your Password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary form-control" value="login" href="header.php">
                    </div>
                    <div class="form-group">
                         <p><b>Don't have an account? <a href="reg.php">Register here!</a></b></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
