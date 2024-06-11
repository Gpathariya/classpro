<?php

$con = mysqli_connect("localhost", "root", "", "classpro");
if (!$con) {
    echo "Connection Failed" . mysqli_error($con);
}

?>