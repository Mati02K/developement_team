<?php
require('../config.php');

if(isset($_POST['submit']))
{
    $rollno = trim($_POST['rollno']);

    $sname = htmlspecialchars(strip_tags($sname));

    $sname = mysqli_real_escape_string($conn,$sname);

    $query = "DELETE FROM `student_details` WHERE `sno` = '$rollno'";

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