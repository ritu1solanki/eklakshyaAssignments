<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        text-align:center;
        background-image: url(atm.jpg);
        font-family: Arial, Helvetica, sans-serif;
  
background-repeat: no-repeat;
background-size: cover;
        
        
    }
    </style>
</head>
<body>
  <marquee> <h1>WELCOME TO BOI ATM SANTACRUZ BRANCH</h1></marquee>
   <form action=<?php ($_SERVER["PHP_SELF"]); ?> method="post">
    	NAME:<input type="text" name="uname"><br>
    	CARD NUMBER:<input type="number" name="cardno"><br>
    	PIN NUMBER:<input type="password" name="pin"><br>
        TRANSCATION TYPE:<select name="transc" ><br>
        <option value="select" selected>--select--</option>
    <option value="withdraw">withdraw</option>
    <option value="deposit">deposit</option>
    <option value="check">check balance</option>

        </select>

        ACCOUNT TYPE:<select name="acc" ><br>
        <option value="select" selected>--select--</option><br>

    <option value="saving">Savings</option>
    <option value="current">current</option>
    <input type="submit" value="submit" style="margin-left: 68px;">

        </select>
    </form>

    <?php
    $card=array("Ritu"=>987654321,"Binita"=>234567890,"Aman"=>345678901);
    $pinnn=array(987654321=>1234,234567890=>4567,345678901=>7890);
    
        $type=$_POST['transc'];
        $type1=$_POST['acc'];
        $_SESSION["type"]=$type1;
        $_SESSION["type1"]=$type;

        if($_SERVER["REQUEST_METHOD"]=="POST" ){
     
            $name =$_POST["uname"];
            $cardno=$_POST["cardno"];
            $pin=$_POST["pin"];
            $cardno=(int)$cardno;
            $_SESSION["uname"] =$name;
            $_SESSION["cardno"] = $cardno;
            $type1=$_POST['acc'];
            if ($type1=='saving'){
                if($type=='withdraw'){
                  include 'toa.php';
                }
                if($type=='deposit'){
                  include 'toa1.php';
              }
              if($type=='check'){
                include 'toa2.php';
              }
              }
              else{
                if($type=='withdraw'){
                  include 'toa3.php';
                }
                if($type=='deposit'){
                  include 'toa4.php';
              }
              if($type=='check'){
                include 'toa2.php';
              }
              }
        if(empty($name)){
            $nameerr="Name is required";
          }
         
           if(empty($cardno)){
             $cardnoo="card number is required";
           }
           if(!empty($cardno)){
             $cardnooo="card number does not match username";
           }
           if(empty($pin)){
             $pinn="pin is required";
           }
           if(!empty($pin)){
             $pinno="pin is incorrect";
           }
           if($type1=='select'){
             $sc="selection is mandatory";
           }
           if($type=='select'){
             $sc1="selection is mandatory";
           }
           if((int)$card[$name]==$cardno){
             $cardnooo="";
             if((int)$pinnn[$cardno]==$pin){
                $pinno="";
               if($type1=='select' && $type=='select' ){
                $p=1;
                
               }
               else{
                 $p=0;
               }
            }
        }
    }

    ?>
    
    
</body>
</html>