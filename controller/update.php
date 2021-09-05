<?php
require('../config.php');

if(isset($_POST['submit']))
{
    $rollno = trim($_POST['rollno']);
    $sname = trim($_POST['sname']);

    $sname = htmlspecialchars(strip_tags($sname));
    $rollno = htmlspecialchars(strip_tags($rollno));

    $sname = mysqli_real_escape_string($conn,$sname);
    $rollno = mysqli_real_escape_string($conn,$rollno);

    $query = "UPDATE `student_details` SET `s_name` = '$sname' WHERE `sno` = '$rollno'";

    $update = mysqli_query($conn,$query);

    if($update)
    { 
        echo "<script>window.alert('Success')</script>";
        echo "<script>location.replace('../dashboard.php')</script>";
    }
    else
    {
        echo "Error". mysqli_error($conn);
    }
}

?>