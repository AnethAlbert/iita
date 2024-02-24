<?php
include("db.php");
include("header.php");
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="addd.php">ADD STUDENT</a>
            <a class="btn btn-info pull-right" href="attendance.php">BACK</a>
        </h2>
    </div>
       
    <div class="panel-body">
        <form action="viewall.php" method="POST">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Date</th>
                </tr>
                <?php
                $result = mysqli_query($con, "SELECT DISTINCT date FROM attendance_records");
                $date_id = 0; // Separate counter for date rows
                
                while ($row = mysqli_fetch_array($result)) {
                    $date_id++;
                ?>
                <tr>
                    <td><?php echo $date_id; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
</div>
