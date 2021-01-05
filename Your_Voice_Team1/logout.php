<?php 
 
if(isset($_GET['logout']))
{
	session_destroy();
	header('location:pr1.php?logout=true');
	exit;
}
?>