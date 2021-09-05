<?php


require('../config.php');

if(isset($_POST['submit']))
{
    // Getting and Trimming the values
    $sname = trim($_POST['sname']);
    $smail = trim($_POST['smail']);
    $scno = trim($_POST['scno']);
    $sage = trim($_POST['sage']);

    // Sanitizing Our Input
    $sname = htmlspecialchars(strip_tags($sname));
    $smail = htmlspecialchars(strip_tags($smail));
    $scno = htmlspecialchars(strip_tags($scno));
    $sage = htmlspecialchars(strip_tags($sage));

    // MYSQL Sanitization
    $sname = mysqli_real_escape_string($conn,$sname);
    $smail = mysqli_real_escape_string($conn,$smail);
    $scno = mysqli_real_escape_string($conn,$scno);
    $sage = mysqli_real_escape_string($conn,$sage);

    $query = "INSERT INTO `student_details`(`s_name`,`s_age`,`s_email`,`s_cno`) 
               VALUES ('$sname','$sage','$smail','$scno')";
    
    $result = mysqli_query($conn,$query);

    if($result)
    {
        echo "<script>window.alert('Success')</script>";
        // header("Location:dashboard.php");
        echo "<script>location.replace('../dashboard.php')</script>";
    }
    else
    {
        echo "Error". mysqli_error($conn);
        echo "<script>window.alert('Email Id Already found')</script>";
    }
    mysqli_close($conn);
}
?>