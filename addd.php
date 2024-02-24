<?php
include("header.php");
include("db.php");

if(isset($_POST['submit'])){
    $fullname = $_POST['Full_name'];
    $Email = $_POST['E_mail'];

    // Enclose string values in single quotes in the SQL query
    $query = "INSERT INTO  add_attendance (Full_name, E_mail) VALUES ('$fullname', '$Email')";

    if (mysqli_query($con, $query)){
        // Insertion was successful, trigger JavaScript alert
        echo '<script>alert("Attendance Data Successfully Inserted");</script>';
    }
    else {
        echo "Error: " . mysqli_error($con);
    }
}
?>


<html>
    <head>
    <style>
    .panel {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0px 0px 5px #888;
    }

    .panel-heading h2 {
        margin: 0;
    }

    .well {
        background-color: #f5f5f5;
        padding: 10px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .btn {
        margin-right: 10px;
    }
</style>
        
    </head>

<div class="panel panel-default">

<div class="panel-heading">
    <h2>
    <a class="btn btn-success" href="addd.php"> ADD STAFF</a>
    <a class="btn btn-info pull-right" href="attendance.php">BACK</a>
</h2>
</div>
<div class="panel-body">
    <form action="attendance.php" method="POST">
        <div class="form-group">
            <label for="name">Staff Names:</label>
            <input type="text" id="Full_name" name="Full_name" class="form-control" required>
        </div>
       
        <div class="form-group">
            <label for="email">E-Mail:</label>
            <input type="email" id="E_mail" name="E_mail" class="form-control" required>
        </div>
        <div>
           <input type="submit" name="submit" value="submit" class="btn btn-info" href="attend.php" required>
        </div>

    </form>
</div>


</div>
</html>