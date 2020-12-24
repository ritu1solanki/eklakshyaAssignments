<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Account{
       var $balance;
       
       
       function __construct($balance){
        $this->balance=$balance;
        
    
        }
        function __destruct(){

            echo "good bye";
        }

        function withdraw($amt){

            return "Amount After Withdraw".( $this->balance-$amt)."<br>";
        }
        function deposit($amt){

            return "Amount After Withdraw".  ($this->balance+$amt)."<br>";
        }
        function getBalance(){

            // $this->withdraw($amt);
            // $this->deposit($amt);

            echo "Your balance". $this->balance."<br>";
        }
       
    }


    class savings extends Account{

         function withdraw($bal){

            $this->balance-=($bal+100);
           return "Amount After Withdraw in savings".$this->balance;
         
        }
         function deposit($bal){

            $this->balance+=($bal-10)."<br>";
             return "Amount After Deposit in savings".$this->balance;
         
        }
        
      
    }
    
    class current extends Account{

         function withdraw($bal){
             $this->balance= $this->balance-($bal+90);
            return "Amount After Withdraw in current". $this->balance."<br>";
         
        }
         function deposit($bal){

            $this->balance= $this->balance-($bal-20);
            return "Amount After Deposit in current". $this->balance."<br>";
         
           
         
        }
    }
    
   
    
    $acc=new Account(10000);
    $acc->getBalance();

    $sav=new savings(1000);
    echo $sav->withdraw(200);
    echo $sav->deposit(100);

    $cur=new current(2000);
    echo $cur->withdraw(200);
    echo $cur->deposit(200);
 
   
    ?>
    
</body>
</html> 