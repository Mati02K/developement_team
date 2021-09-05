<?php
session_start();

$id = "yourname";

if(!isset($_COOKIE[$id]))
{
    echo "Cookie is not set";
    echo "<br>";
}
else
{
    echo "Cookie Value".$_COOKIE[$id];
    echo "<br>";
}

if(!isset($_SESSION[$id]))
{
    echo "Session is not set";
    echo "<br>";
}
else
{
    echo "Session Value".$_SESSION[$id];
    echo "<br>";
}
?>