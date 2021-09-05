<?php
include_once('arithmeticoperation.php');
if(isset($_POST['add']))
{
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];


    $add = add($num1,$num2);

    echo "<h1>Addition Result: $add</h1>";

    echo "<br>";

    $sub = sub($num1,$num2);

    echo "<h1>Subtraction Result: $sub</h1>";

    echo "<br>";

    $div = div($num1,$num2);

    echo "<h1>Division Result: $div</h1>";

    echo "<br>";

    $mul = mul($num1,$num2);

    echo "<h1>Multiplication Result: $mul</h1>";

    echo "<br>";
}
?>
