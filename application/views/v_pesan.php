<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Edit</title>
</head>

<body id="biodata">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?= base_url('home') ?>">Jogotel</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('user/sewakamar') ?>">Pesan Kamar</a>
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
	<div class="containers">
		<h1>Isi Tanggal</h1>
		<form method="POST" action="<?= base_url('user/pesan') ?>">
			<div class="form-group">
				<input type="hidden" name="idkamar" value="<?= $idkamar ?>">
				<table>
					<tr>
						<td>Check in</td><td><input type="date" name="in"></td>
					</tr>
					<tr>
						<td>Check out</td><td><input type="date" name="out"></td>
					</tr>
				</table>
			</div>
			<button type="submit" name="submit" class="btn btn-success">Submit</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</form>
	</div>
</body>

</html>