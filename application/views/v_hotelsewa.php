<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Kamar</title>
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
	<div class="tabel">
		<center>
			<h3>Hotel</h3><br><br>
		</center>

		<table class="table table-bordered bg-light">
			<thead class="thead-dark">
				<th>Nama</th>
				<th>Alamat</th>
				<th>No telp</th>
				<th>Action</th>
			</tr>
			<?php foreach ($data as $row) { ?>
				<tr>
					<td><?php echo $row->nama ?></td>
					<td><?php echo $row->alamat ?></td>
					<td><?php echo $row->notelp ?></td>
					<td><a href="<?= base_url('user/sewakamar?idhotel='.$row->id)?>"><button type="button" class="btn btn-info">Lihat Kamar</button></a></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>

</html>