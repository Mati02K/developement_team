<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
     <label for="name">Name</label>
    <input type="text" name="scname">
    <br>
    <button type="submit" name="cookie">Add Cookie</button>
    <br>
    <button type="submit" name="session">Add Session</button>
    <br>
    <button type="submit" name="dcookie">Delete Cookie</button>
    <br>
    <button type="submit" name="dsession">Delete Session</button>
    <br>
    </form>
</body>
</html>

<?php

session_start();
// Cookie Set

if(isset($_POST['cookie']))
{
    $name = $_POST['scname'];

    $cookie_name = "yourname";

    $cookie_value = $name;

    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

    echo "<script>location.replace('checksc.php')</script>";
}
// Session Set

if(isset($_POST['session']))
{
  $name = $_POST['scname'];

  $_SESSION['yourname'] = $name;

  echo "<script>location.replace('checksc.php')</script>";
}

// Cookie Delete
if(isset($_POST['dcookie']))
{
    $cookie_name = "yourname";

    setcookie($cookie_name,"",time()-3600,"/");

    echo "<script>location.replace('checksc.php')</script>";
}

// Session Delete
if(isset($_POST['dsession']))
{
    session_unset();

    session_destroy();

    echo "<script>location.replace('checksc.php')</script>";
}
?>