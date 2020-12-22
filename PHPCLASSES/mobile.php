<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Mobile{
       var $brand;
       var $price;
       var $model;
       static $accesssories = array("Charger", "earphones");
       function __construct($brand,$price,$model){
        $this->brand=$brand;
        $this->price=$price;
        $this->model=$model;
    
        }
        function __destruct(){

            echo "good bye";
        }
        public function printdetails(){

            echo $this->brand."<br>";
            echo $this->price."<br>";
            echo $this->model."<br>";

            for($i=0;$i<count(Mobile::$accesssories);$i++){
                echo "Mobile accessories".Mobile::$accesssories[$i]."<br>";
            }
    
        }
       public  function showdiscount($amount){
            return $this->price-$amount;
        }
        

        
        
    }
    
   
    
    $mbl=new Mobile("Oneplus",40000,7);
 
    $mbl->printdetails();
   echo $mbl->showdiscount(5000);

   $mbl1=new Mobile("Samsung",40000,"Max");
 
    $mbl1->printdetails();
   echo $mbl1->showdiscount(5000);
   
    ?>
    
</body>
</html> 