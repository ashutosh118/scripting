<!Doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+San&display=swap" rel="stylesheet">
 
  <link rel = "icon" href = 
"https://cahss.org/wp-content/uploads/2017/05/FWC-Logo.png" 
        type = "image/x-icon">
</head>
<body>

	<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="Los Angeles" width="1900" height="850">
        </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="Chicago" width="1900" height="850">  
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="New York" width="1900" height="850">
       
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About</h3>
	</div>
     <div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/cc9.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">I am Ashutosh Srivastava</h2>
		<p class="py-3">Wildlife photographer and expeditioner</p>
		<a href="about.php" class="btn btn-success">Find more about PlanetWILD</a>
	</div>
</div>
</div>
   
</section>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Our Work</h3>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 colo-md-4 col-12">
				<div class="card">
  <img class="card-img-top" src="images/cc6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Amazon</h4>
    <p class="card-text">South America</p>
    <a href="#" class="btn btn-primary">Find more</a>
  </div>
</div>
			</div>

			<div class="col-lg-4 colo-md-4 col-12">
				<div class="card">
  <img class="card-img-top" src="images/cc7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Sundarbans</h4>
    <p class="card-text">India</p>
    <a href="#" class="btn btn-primary">Find more</a>
  </div>
</div>
			</div>

			<div class="col-lg-4 colo-md-4 col-12">
				<div class="card">
  <img class="card-img-top" src="images/cc8.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Congo</h4>
    <p class="card-text">Africa</p>
    <a href="#" class="btn btn-primary">Find more</a>
  </div>
</div>
			</div>
		</div>
	</div>
	</section>

	<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Contact Us</h3>
	</div>
	<div>
		<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label>Mobile Number</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label>Comment</label>
				<textarea class="form-control" name="comments">
				</textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>


		</form>
	</div>

</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@PlanetWILD</p>
	</footer>

	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	</body>
	</html>