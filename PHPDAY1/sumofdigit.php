
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">  
    Enter the Number:<br>  
    <input type="number" name="num" id="num">  
    <input type="submit" name="submit" value="Submit" />  
    <?php 

$num=$_GET["num"];

$sum=0;
$len=strlen($num);
for ($i=0; $i < $len; $i++) { 
    $sum +=$num[$i];
    
    } 


echo "number ",$sum;
    ?>
    
</form> 
</body>
</html>