<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Pesanan</title>
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
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('user/hotelsewa') ?>">Pesan Kamar</a>
				</li>
				<li class="nav-item active">
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
		<table class="table table-bordered bg-light">
			<center>
			<h3>Info Pesanan</h3><br><br>
			</center>
			<thead class="thead-dark">
				<th>ID Pesanan</th>
				<th>ID Kamar</th>
				<th>Keterangan</th>
				<th>Check in</th>
				<th>Check out</th>
			</thead>
			<?php foreach ($data as $row) { ?>
				<tr>
					<td><?php echo $row->id ?></td>
					<td><?php echo $row->kamar ?></td>
					<td><?php echo $row->keterangan ?></td>
					<td><?php echo $row->checkin ?></td>
					<td><?php echo $row->checkout ?></td>
				</tr>
			<?php } ?>
		</table>
	</div>

</body>

</html>