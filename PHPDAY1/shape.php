<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="shape.php" method="GET">

length,radius,height<input type="number" name="len"><br>
       width,base<input type="number" name="wid"><br>
    Shapes<input type="radio" name="radio" value="t">Triangle
    <input type="radio" name="radio" value="r">Rectangle
    <input type="radio" name="radio" value="s">Square
    <input type="radio" name="radio" value="c">circle
    <input type="submit" name="submit" balue="submit">
    </form>

    <?php 


    if(!$num1==0){
        if($operation=='t'){
     $area=0.5*$num1*$num2;
     echo "area of triangle with height $num1 and base $num2 is $area";
        }
        else   if($operation=='r'){
         $area=$num1*$num2;
         echo "area of rectangle with length $num1 and width $num2 is $area";
            }
            else   if($operation=='s'){
             $area=$num1*$num2;
             echo "area of rectangle with length $num1 and width $num2 is $area";
                }
             else{
                 $area=($num1**2)*(22/7);
                 echo "area of circle with radius $num1 is $area";
             }
         }

    ?>



</body>
    
</html>