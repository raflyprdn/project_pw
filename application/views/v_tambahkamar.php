<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Tambah kamar</title>
</head>

<body id="biodata">
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
	<div class="containers">
		<center>
			<h3>Tambah Kamar</h3>
		</center><br>
		<form method="POST" action="<?= base_url('admin/tambahkamar') ?>" enctype="multipart/form-data">
			<input type="hidden" name="hotel" value="<?= $hotel ?>">
			<div class="form-group">
				<table>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" class="form-control tbl" style="width:250px;"></td>
					</tr>
					<tr>
						<td>Fasilitas</td>
						<td><input type="text" name="fasilitas" class="form-control tbl" style="width:250px;"></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td><input type="file" class="form-control-file tbl" name="foto"></td>
					</tr>
					<tr>
						<td>Keterangan</td>
						<td>
							<div class="form-check tbl">
								<input class="form-check-input" type="radio" name="keterangan" id="exampleRadios1" value="tersedia">
								<label class="form-check-label" for="exampleRadios1">
									Tersedia
								</label>
							</div>
							<div class="form-check tbl">
								<input class="form-check-input" type="radio" name="keterangan" id="exampleRadios1" value="tidaktersedia">
								<label class="form-check-label" for="exampleRadios1">
									Tidak tersedia
								</label>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</form>
	</div>
</body>

</html>