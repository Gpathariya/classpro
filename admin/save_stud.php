<?php
include "../config/db.php";



if (isset($_POST['submit'])) {
    $stud_name = $_POST['stud_name'];
    $rollno = $_POST['rollno'];
    $attendance = $_POST['attendance'];
    $remark = $_POST['remark'];



    $sql = "INSERT INTO students(stud_name,rollno,attendance,remark) VALUES('$stud_name','$srollno','$attendance','$sremark')";

    $qry = mysqli_query($con, $sql) or die("failed");
    if ($qry) {
        echo "<script>alert('all set')</script>";
    } else {
        echo "<script>alert('try again')</script>";

    }
}




?>