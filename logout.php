<?php
session_start();
// Session Delete
if(isset($_POST['logout']))
{
    session_unset();

    session_destroy();

    echo "<script>location.replace('index.php')</script>";
}

?>