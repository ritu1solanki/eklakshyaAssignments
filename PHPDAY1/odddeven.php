<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "Even Numbers are";
 for ($x = 1; $x <= 100; $x++){
        if($x%2==0)
        {
            
            echo $x;
            echo "<br>";
        }
    }

    echo "Odd Numbers are";
    for ($x = 1; $x <= 100; $x++){
           if($x%2!=0)
           {
               
               echo $x;
               echo "<br>";
           }
       }
   

    ?>

</body>
</html>