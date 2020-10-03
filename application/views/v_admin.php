<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Admin</title>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?= base_url('admin') ?>">Admin Jogotel</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('admin/inputhotel') ?>">Input Hotel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('admin/lihatpesanan') ?>">Lihat Pesanan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('admin/lihathotel') ?>">Lihat Hotel</a>
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
	<br>
	<center>
		<h1>Welcome Admin <?php echo $this->session->userdata('username') ?></h1><br>
	</center>

	<section class="py-5 bg-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5">
					<img src="image/slider-6.jpg" class="image">
				</div>
				<div class="col-md-12 col-lg-4 order-lg-1">
					<?php
					if (isset($_GET['m'])) {
						$m = $_GET['m'];
						printf("<h2> $m </h2>");
					}
					?>
					<p class="mb-4">“Developing a good work ethic is key. Apply yourself at whatever you do, whether you're a janitor or taking your first summer job because that work ethic will be reflected in everything you do in life.”– Tyler Perry</p>
				</div>
			</div>
		</div>
	</section>

</body>

</html>