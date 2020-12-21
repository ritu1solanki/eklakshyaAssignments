<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="usernames.php" method="GET">
NAME<input type="text" name="uname"> 

<input type="submit" value="submit"> 
</form>

 <?php
$name=$_GET["uname"];


$usernames=["Ritu","Aman","Binita"];


$flag=1;
foreach($usernames as $element)
{
    if($name==$element)
    
    {
        $flag=0;
        break;
        
    }
    else{
        $flag=1;
                
    }
}

 if ($flag==0)
 {
     echo "Welcome",$name;
 }
 else{
    echo "Wrong User";

 }

            
         
    ?>
</body>
</html>