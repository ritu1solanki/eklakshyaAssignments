<?php 

$con = mysqli_connect('localhost','root');

 if($con){
     echo "done";
 }
else{
    echo "error";
 }

mysqli_select_db($con,'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$concern = $_POST['concern'];

$query = " insert into infodata (user, email, concern)
values ('$user', '$email', '$concern')";

mysqli_query($con,$query);

header('location:pr2.php');

?>