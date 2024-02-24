<?php
session_start();

include ("db.php");

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        $errors[] = "User Name is required";
    }
    if (empty($pass)) {
        $errors[] = "Password is required";
    }

    if (empty($errors)) {
        $sql = "SELECT * FROM users WHERE user_name='$uname'";
        $result = mysqli_query($conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($pass, $row['password'])) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: attendance.php");
                exit();
            } else {
                $errors[] = "Incorrect User name or password";
            }
        } else {
            $errors[] = "Incorrect User name or password";
        }
    }
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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

        /* Style for displaying errors */
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="assets/img/logo.jpg" alt="Logo">
                <h1>LOGIN</h1>
            </div>
            <div class="card-body">
                <?php if (!empty($errors)): ?>
                    <div class="error-message">
                        <?php foreach ($errors as $error): ?>
                            <p><?php echo $error; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
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
                        <input type="submit" name="login" class="btn btn-primary form-control" value="Login">
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
