<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:pr1.php');
		exit;
	}
	
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Dashboard | PHP Login and logout example with session</title>
<link rel="stylesheet" href="style.css">
</head>


 
<body>
	<div class="container-dashboard">
		Welcome to YOUR VOICE! Share your reviews freely and get to know honest reviews on various genre of movies <span class="user-name">
        <!-- <?php echo ucwords($_SESSION['first_name'])?>  </span>  -->
		<br>

        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/movies.jpg" width=500px alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">MOVIES</h5>
    <p class="card-text">ALL GENERES OF MOVIES AVAILABLE </p>
    <a href="pr1.php" class="btn btn-primary">VIEW REVIEWS</a>
  </div>
</div>
<BR>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/mobile.jpeg" width=500px alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">MOBILE</h5>
    <p class="card-text">ALL TYPES OF MOBILES PHONES </p>
    <a href="pr1.php" class="btn btn-primary">VIEW REVIEWS</a>
  </div>
</div>
		
		<a href="logout.php?logout=true" class="logout-link">Logout</a>
	</div>
</body>
</html>