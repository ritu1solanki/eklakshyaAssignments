<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="marks.php" method="GET">
NUM1<input type="number" name="num1"> 
NUM2<input type="number" name="num2"> 
NUM3<input type="number" name="num3">
<input type="submit" value="submit"> 
</form>

 <?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$num3=$_GET["num3"];

$sum=$num1+$num2+$num3;


$avg=$sum/3;

if($avg>90)
{
    echo "A+";
}

else if($avg>=80 && $avg<=90)
{
    echo  "B";
}
else if($avg>=70 && $avg<=80)
{
    echo  "C";
}
else{
    echo $num3 , "F";
}

    ?>
</body>
</html>