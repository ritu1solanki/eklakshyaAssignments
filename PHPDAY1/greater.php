<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="greater.php" method="GET">
NUM1<input type="number" name="num1"> 
NUM2<input type="number" name="num2"> 
NUM3<input type="number" name="num3">
<input type="submit" value="submit"> 
</form>


    <?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$num3=$_GET["num3"];

if($num1>$num2 && $num1>$num3)
{
    echo $num1 , "is greater";
}
else if($num2> $num1 && $num2>$num3)
{
    echo $num2 , "is greater";
}
else{
    echo $num3 , "is greater";
}

    ?>
</body>
</html>