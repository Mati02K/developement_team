<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET VS POST</title>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="">Number 1</label>
        <input type="text" name="num1"><br>
        <label for="">Number 2</label>
        <input type="text" name="num2"><br>
        <input type="submit" name="add"><br>
    </form>
</body>
</html> -->

<?php

// Arithmetic ---> Class
// Add,Sub,Mul,Div ---> Objects

class Arithmetic
{
    public $a;
    public $b;


    function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    function __destruct()
    {
        echo "Hi From Arithmetic Class";
    }

    function add($a,$b)
    {
        $answer=$a+$b;
        return $answer;
    }

    function sub($a,$b)
    {
        $answer=$a-$b;
        return $answer;
    }

    function mul()
    {
        $answer=$this->a*$this->b;
        return $answer;
    }

    function div()
    {
        $answer=$this->a/$this->b;
        return $answer;
    }

}

class Modulofind extends Arithmetic
{
    public function modulo()
    {
        $answer=$this->a % $this->b;
        return $answer;
    }
}

?>