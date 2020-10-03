<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons/css/ionicons.min.css')?>">
	<title>Home</title>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">Jogotel</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('user/hotelsewa') ?>">Pesan Kamar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('user/lihatpesanan') ?>">Lihat Pesanan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('user/editbiodata') ?>">Edit Biodata</a>
				</li>
			</ul>
		</div>
		<form class="form-inline" action="">
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
				<a class="nav-link disabled">Hi <?php echo $this->session->userdata('username') ?> !</a>
				</li>
			</ul>
		</div>
			<a href="<?= base_url('login/out')?>" class="btn btn-success">Log Out</a>
		</form>
	</nav>

	<!-- Content -->
	<section class="py-5 bg-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5">
					<img src="image/img_1.jpg" class="image">
				</div>
				<div class="col-md-12 col-lg-4 order-lg-1">
					<h2 class="heading">Welcome <?php echo $this->session->userdata('username') ?> !</h2>
					<?php
					if (isset($_GET['m'])) {
						$m = $_GET['m'];
						printf("<h2> $m </h2>");
					}
					?>
					<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section bg-grey">
		<br><br>
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-7">
					<h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
					<p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="image/img_1.jpg" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info font-dark">
							<h2>Single Room</h2>
							<span class="text-uppercase letter-spacing-1">290K IDR / per malam</span>
						</div>
					</a>
				</div>

				<div class="col-md-6 col-lg-4">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="image/img_2.jpg" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info font-dark">
							<h2>Family Room</h2>
							<span class="text-uppercase letter-spacing-1">520K IDR / per malam</span>
						</div>
					</a>
				</div>

				<div class="col-md-6 col-lg-4">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="image/img_3.jpg" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info font-dark">
							<h2>Presidential Room</h2>
							<span class="text-uppercase letter-spacing-1">950K IDR / per malam</span>
						</div>
					</a>
				</div>
			</div>
		</div>
		<br><br>
	</section>

	<!-- Footer -->
	<footer class="section footer-section bg-dark">
		<br><br>
		<div class="container">
			<div class="row mb-4">
				<div class="col-md-3 mb-5">
					<p style="color: #FFF;">Our Facilities :</p>
					<ul class="list-unstyled link" style="color: #FFF;">
						<li>
							<p>Rooms &amp; Suites</p>
						</li>
						<li>
							<p>Cafe &amp; Bar</p>
						</li>
						<li>
							<p>Lounge</p>
						</li>
						<li>
							<p>Meeting Rooms</p>
						</li>
					</ul>
				</div>
				<div class="col-md-3 mb-5">
					<p><br></p>
					<ul class="list-unstyled link" style="color: #FFF;">	
						<li>
							<p>Swimming Pool</p>
						</li>
						<li>
							<p>Gym</p>
						</li>
						<li>
							<p>Restaurant</p>
						</li>
					</ul>
				</div>
				<div class="col-md-4 mb-5 font-light">
					<p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary">					
					</span>Address:</span> <span> Jalan Babarsari Nomor 2A, <br> Special Region of Yogyakarta 55281</span></p>
					<p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary">
					</span>Phone:</span> <span> (+62) 274 3533</span></p>
					<p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary">
					</span>Email:</span> <span> info@jogotel.com</span></p>
				</div>
			</div>
			<div class="row pt-5">
				<p class="col-md-6 text-left" style="color: #FFF;">
					Copyright &copy; All rights reserved
				</p>
			</div>
		</div>
	</footer>
</html>