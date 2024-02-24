<?php
include("db.php");
include("header.php");

if (isset($_POST['submit'])) {
    // Retrieve the values from the form
    $full_name = mysqli_real_escape_string($con, $_POST['Full_name']);
    $e_mail = mysqli_real_escape_string($con, $_POST['E_mail']);
    $date = date("Y-m-d H:i:s");

    // Insert the data into the database
    $query = "INSERT INTO attendance_records (Full_name, E_mail, date) VALUES ('$full_name', '$e_mail', '$date')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '<div class="alert alert-success">Attendance Data Inserted Successfully</div>';
    } else {
        echo '<div class="alert alert-danger">Error: Failed to insert attendance data</div>';
    }
}
?>



<html>
    <head></head>
<body>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="addd.php"> ENTER DETAILS</a>
            <a class="btn btn-info pull-right" href="viewall.php">VIEW ALL</a>
        </h2>
    </div>
    <h3><div class="well text-center">Date: <?php echo date("Y-m-d"); ?></div></h3>
    <div class="panel-body">
        <form action="index.php" method="POST">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>E-Mail</th>
                    <th>Attendance status</th>
                </tr>
                <?php
                $result = mysqli_query($con, "SELECT * FROM add_attendance");
                $id= 0;
                $counter = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $id++;
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $row['Full_name']; ?></td>
                        <input type="hidden" value="<?php echo $row['Full_name']; ?>" name="Full_name[]">
                        <td><?php echo $row['E_mail']; ?></td>
                        <input type="hidden" value="<?php echo $row['E_mail']; ?>" name="E_mail[]">

                        <td>
                            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Present">Present.
                            <br/>
                            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent">Absent.&nbsp;<a href="mailto: example@gmail.com">Why?</a>
                        </td>
                    </tr>
                    <?php
                    $counter++;
                }
                ?>
            </table>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>
            </body>
</html>
