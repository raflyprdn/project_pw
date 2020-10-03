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
	<div class="tabel">
		<center>
			<h3>Daftar Kamar</h3><br>
		</center>
		<a href="<?= base_url('admin/tambahkamar?id=' . $hotel) ?>" class="btn btn-success">Tambah Kamar</a>
		<br><br>
		<table class="table table-bordered bg-light">
			<thead class="thead-dark">
				<th>Nama</th>
				<th>Fasilitas</th>
				<th>Foto</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
			<?php foreach ($data as $row) { ?>
				<tr>
					<td><?php echo $row->nama ?></td>
					<td><?php echo $row->fasilitas ?></td>
					<td><img src="<?= base_url() ?>image/<?= $row->foto ?>" width=20%></td>
					<td><?php echo $row->keterangan ?></td>
					<td><a href="<?= base_url('admin/lihatkamar?hapus=' . $row->id) ?>" class="btn btn-danger">Hapus</a>
						<a href="<?= base_url('admin/editkamar?id=' . $row->id) ?>" class="btn btn-secondary">Edit</a></td>
				</tr>
			<?php } ?>
			</table>
	</div>
</body>

</html>