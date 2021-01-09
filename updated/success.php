<?php
$conn = mysqli_connect("localhost","root");
	
if($conn)
{
    echo "connection done";

}
else{
    echo "Errors";
}
mysqli_select_db($conn,"review");
$user=$_POST["user"];
$comments=$_POST["comments"];



$query="insert into comment(user,comments)
 values("$user","$comments")";
mysqli_query($conn,$query);

header("location:pr2.php");
?>