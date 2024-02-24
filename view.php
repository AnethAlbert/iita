<?php
include("db.php");
include("header.php");
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="addd.php">ADD STAFF</a>
            <a class="btn btn-info pull-right" href="attendance.php">BACK</a>
        </h2>
    </div>
       
    <div class="panel-body">
        <form action="attendance.php" method="POST">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                </tr>
                <?php
                $result = mysqli_query($con, "SELECT DISTINCT date FROM attendance_records"); // Specify the column you want to be distinct
                $id = 0;
                
                while ($row = mysqli_fetch_array($result)) {
                    $id++;
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
</div>
