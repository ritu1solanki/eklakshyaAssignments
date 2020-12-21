<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="pallindrome.php" method="GET">
Enter a String<input type="text" name="name"> 
<input type="submit" value="submit"> 
</form>
    <?php 

    $name=$_GET["name"];

    $nnum=strrev ($name);
    

    if($nnum==$name){
        echo "pallindrome";
    }
    else{
        echo " Not a pallindrome";
    }
    

    
    ?>
</body>
</html>