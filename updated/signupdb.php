<?php 

$con = mysqli_connect('localhost','root');

 if($con){
 echo "you have connected successfully ";
     
 }
else{
    echo "error";
 }

mysqli_select_db($con,'demo');

$use = $_POST['name'];
$emai = $_POST['email'];
$conc = $_POST['phone'];
$pwd = $_POST['pass'];

$query = " insert into signupdata (name,email,phone,pass)
values ('$use','$emai','$conc','$pwd')";

mysqli_query($con,$query);

header('location:pr1.php');

?>