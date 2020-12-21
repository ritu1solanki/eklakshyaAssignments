<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
<form action="weather.php" method="GET">
    <select name="mychoice">
    <option value="sunny">sunny</option>
    <option value="Windy">Windy</option>
    <option value="cold">cold</option>
    <option value="rainy">rainy</option>
    <input type="submit" name="button">
    </select>
    </form>
    

    <?php

   $num1=$_GET["mychoice"];

   switch($num1){

    case "sunny":
        echo "watermelon";
        break;
    case "windy":
        echo "Its windy";
        break;

    case "cold":
        echo "Sweater";
        break;
    case "Rainy":
        echo "Umbrella";
        break;

   }





    ?>

</body>
</html>