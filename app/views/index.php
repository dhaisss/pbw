<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AKAD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="<?= BASEURL; ?>/gaya.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="<?= BASEURL; ?>/img1/logo1.png" style="max-height: 49px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?=BASEURL;?>/Home/Login">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= BASEURL;?>/Home/Register">Register</a>
				</li>
			</ul>
		</div>
	</div>

</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?= BASEURL; ?>/img1/1.jpg" style="width: 100%; max-height: 620px">
			<div class="carousel-caption">
				<h1 class="display-1" >AKAD</h1>
				<h3>Ayo Kawal Anggaran Desa</h3>
				<a href="<?=BASEURL;?>/Home/Login"><button type="button" class="btn btn-outline-light btn-lg">Login</button></a>
				<a href="<?= BASEURL;?>/Home/Register"><button type="button" class="btn btn-primary">Get Started</button></a>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?= BASEURL; ?>/img1/2.jpg" style="width: 100%; max-height: 620px">
		</div>
		<div class="carousel-item">
			<img src="<?= BASEURL; ?>/img1/3.jpg" style="width: 100%; max-height: 620px">
		</div>
	</div>
</div>

<!--- Jumbotron -->
<div class="padding">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<img src="<?= BASEURL; ?>/img1/akad.png">
			</div>
			<div class="col-xs-12 col-sm-6 text-center">
				<h2>Apa itu AKAD?</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus aspernatur cupiditate deserunt dignissimos eaque fugit id labore minima, perferendis, quisquam quod! Architecto eos rerum saepe similique tempora temporibus ut!</p>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eum iste iusto libero nesciunt quaerat quisquam, voluptas. A, aliquid, eum maxime nam nemo nesciunt nihil optio quos saepe tempora voluptatum.</p>
			</div>
		</div>
	</div>
</div>

<!--- Welcome Section -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Ayo Kawal Anggaran Desa</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam asperiores assumenda atque aut, cupiditate dolor ea expedita hic iusto labore magnam molestiae nesciunt officia quam quibusdam vel vero voluptates.</p>
			</div>
		</div>
	</div>

<!--- Three Column Section -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 c0l-md-4">
				<i class="fas fa-code"></i>
				<h3>HTML5</h3>
				<p>Built with the latest version of HTML</p>
			</div>
			<div class="col-xs-12 col-sm-6 c0l-md-4">
				<i class="fas fa-bold"></i>
				<h3>BOOTSTRAP</h3>
				<p>Built with the latest version of Bootstrap</p>
			</div>
			<div class="col-sm-12 c0l-md-4">
				<i class="fab fa-css3"></i>
				<h3>CSS3</h3>
				<p>Built with the latest version of CSS</p>
			</div>
		</div>
		<hr class="my-4">
	</div>

<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>


<!--- Meet the team -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Meet The Team</h1>
		</div>
		<hr>
	</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-6">
			<div class="card">
				<img class="card-img-top" src="<?= BASEURL; ?>/img1/team1.png">
				<div class="card-body">
					<h4 class="card-title">Dhais Firmansyah</h4>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aspernatur, beatae debitis distinctio et fugit harum, iure libero magni neque nihil nisi nostrum odio omnis possimus provident quos vel!</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<img class="card-img-top" src="<?= BASEURL; ?>/img1/team3.png">
				<div class="card-body">
					<h4 class="card-title">Adheraprabu B</h4>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aspernatur, beatae debitis distinctio et fugit harum, iure libero magni neque nihil nisi nostrum odio omnis possimus provident quos vel!</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>
	</div>
	<br class="my-4">
</div>


<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
		</div>
	</div>
</div>

<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-12">
				<hr class="light">
				<h5>&copy; www.kejari-jember.com</h5>
			</div>
		</div>
	</div>
</footer>

</body>
</html>













