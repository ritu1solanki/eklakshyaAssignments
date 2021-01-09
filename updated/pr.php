<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: pink;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">YOUR VOICE!</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="pr.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Review</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pr2.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/m1.jpg" alt="Error" width="600" height="500">
      <div class="carousel-caption">
          <h1>Movie Reviews</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/m2.png" alt="Error" width="600" height="500">
      <div class="carousel-caption">
          <h1 style="color: red;">Mobile Reviews</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/m3.jpg" alt="Error" width="600" height="500">
      <div class="carousel-caption">
          <h1>Mobile Reviews</h1>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/rev.png" alt="error" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h3>This website is basically used for giving your opinion in terms of movies and mobiles.</h3>
      <p>You can review basically anything if you find the right outlet for it, but the best way to present your thoughts depends on what you’re writing about and who your audience is. </p>
      <p>Be honest in your review. Don’t stretch the truth to fit with your argument one way or another. Don’t make up stuff or exaggerate to make your point. If you don’t have enough evidence to support a point you’re making, leave it out.</p>
      <p>Don’t overdo the review with over-the-top praise or criticism. Eliminate extraneous words so that your meaning is clear in the review.</p>
      <p><a href="https://en.wikipedia.org/wiki/Review" class="btn btn-success">More</a></p>
    </div>
  </div>
</div>
</section>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">Team</h2>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/kirtishil.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Kirtishil Patil</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile.html" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/ganesh.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Ganesh</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile.html" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/ritu.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Ritu</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile.html" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/amit.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Amit</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile.html" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

</div>
</div>
</section>

<footer>
   <p class="p-3 bg-dark text-white text-center">Review System</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>