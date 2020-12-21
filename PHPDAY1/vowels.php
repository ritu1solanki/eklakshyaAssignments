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
    <input type="text" name="name" id="name">  
    <input type="submit" name="submit" value="Submit" />  
    <?php 

$name=$_GET["name"];

$len=strlen($name);
$count=0;
for ($i=0; $i <$len ; $i++) { 
    if( $name[$i]=='a' || $name[$i]=='e' ||$name[$i]=='i' ||$name[$i]=='o' || $name[$i]=='u'){
 $count+=1;
    }
    
}
echo "number of vowel in $name are $count";
    ?>
    
</form> 
</body>
</html>