<?php

$server_name = 'localhost';

$username = 'root';

$password = '';

$db_name = 'development_team';

$conn = mysqli_connect($server_name,$username,$password,$db_name);


if($conn)
{
    return 1;
}
else
{
    //
}


?>