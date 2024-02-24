<?php
include("db.php");

if (isset($_POST['submit'])) {
    $Full_Name = $_POST['name'];
    $Email_Address = $_POST['email'];
    $User_Name = $_POST['uname'];
    $Password = $_POST['password'];

    // Function to check if the combination of email, username, and full name exists
    // Check if a user with the same email, username, or full name already exists
    $queryCheck = mysqli_query($con, "SELECT * FROM attendance WHERE Email_address='$Email_Address' OR User_name='$User_Name' OR Full_name='$Full_Name'");

    if (mysqli_num_rows($queryCheck) === 0) {
        // If no matching records found, proceed with insertion
        $insertQuery = mysqli_query($con, "INSERT INTO attendance (Full_name, Email_address, User_name, Password) VALUES ('$Full_Name', '$Email_Address', '$User_Name', '$Password')");
        
        if ($insertQuery) {
            // Insertion was successful, trigger JavaScript alert
            echo '<script>alert("Attendance Data Successfully Inserted");</script>';
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        // Display an error message if the user already exists
        echo '<script>alert("Registration failed. Email, username, or full name is already registered.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f0f0;
        }

        .container {
            max-width: 500px; /* Reduce the max-width to your desired size */
            margin-top: 30px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: white;
            color:black;
            text-align: center;
            padding: 20px 0;
        }

        .card-header img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php session_start(); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="assets/img/logo.jpg" alt="Logo">
                <h1>REGISTER</h1>
            </div>
            <div class="card-body">
                <form id='register' action='reg.php' method='post' accept-charset='UTF-8' onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for='name'>Full Name:</label>
                        <input type='text' name='name' id='name' required maxlength="50" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for='email'>Email Address:</label>
                        <input type='text' name='email' id='email' required maxlength="50" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for='uname'>User Name:</label> <!-- Fixed the field name here -->
                        <input type='text' name='uname' id='uname' required maxlength="50" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for='password'>Password:</label>
                        <input type='password' name='password' id='password' required maxlength="50" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for='retype_password'>Re-type Password:</label>
                        <input type='password' name='retype_password' id='retype_password' maxlength="50" class="form-control" />
                    </div>

                    <div id="passwordError" style="color: red;"></div>
                    <div class="form-group">
                        <button type='submit' name='submit' value='Submit' class='btn btn-primary'>Register Now!</button><br/>
                    </div>
                    <div class="form-group">
                        <p><b>Already have an account? <a href="login.php">Go back</a></b></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript code for password matching -->
    <script>
        function validateForm() {
            // Check if all required fields are filled
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const uname = document.getElementById('uname').value; // Changed to uname
            const password = document.getElementById('password').value;
            const retypePassword = document.getElementById('retype_password').value;

            if (name === '' || email === '' || uname === '' || password === '' || retypePassword === '') {
                alert('Please fill in all required fields.');
                return false; // Prevent form submission
            }

            // Check if password and retype password match
            const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{:;"<,>.?~`]).{8,}$/;
            if (!password.match(passwordRegex)) {
                document.getElementById('passwordError').textContent = 'Password must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and be at least 8 characters long.';
                return false; // Prevent form submission
            } else {
                document.getElementById('passwordError').textContent = '';
            }

            if (password !== retypePassword) {
                document.getElementById('passwordError').textContent = 'Passwords do not match.';
                return false; // Prevent form submission
            } else {
                document.getElementById('passwordError').textContent = '';
            }

            return true; // Allow form submission if all checks pass
        }
    </script>
</body>
</html>
