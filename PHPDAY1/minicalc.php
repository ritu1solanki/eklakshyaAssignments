<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="minicalc.php" method="GET">
NUM1<input type="number" name="num1"> 
NUM2<input type="number" name="num2"> 
operator<input type="text" name="operator">

<input type="submit" value="submit"> 
</form>


    <?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$op=$_GET["operator"];

if($op =="+")
{
    echo "sum",$num1+$num2;
}
else if($op =="-")
{
    echo "Minus",$num1-$num2;
}
else if($op =="*")
{
    echo "Multiplication",$num1*$num2;
}
else if($op =="/")
{
    echo "Division",$num1/$num2;
}
else if($op =="^")
{
    echo "Power",pow($num1,$num2);
}

    ?>
</body>
</html>