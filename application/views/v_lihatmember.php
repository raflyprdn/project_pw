<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Hotel</title>
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
				<li class="nav-item active">
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
	<br><br>
	<center>
		<h1>Data Member</h1>
	</center>
	<div class="tabel">
    <a href="<?= base_url('member/daftarmember') ?>" class="btn btn-success">Tambah</a>
		<table class="table table-bordered bg-light">
			<thead class="thead-dark">
				<th>Id</th>
				<th>Nama</th>
				<th>Tipe</th>
				<th>Masa Aktif</th>
				<th colspan="3"><center>Action</center></th>
				</tr>
				<?php foreach ($result as $row) { ?>
					<tr>
						<td><?php echo $row->id ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->tipe ?></td>
						<td><?php echo $row->masa_aktif ?> bulan</td>
						<td><a href="<?= base_url('member/lihatmember/id=' . $row->id) ?>" class="btn btn-danger">Hapus</a></td>
						<td><a href="<?= base_url('member/editmember/id=' . $row->id) ?>" class="btn btn-secondary">Edit</a></td>
					</tr>
				<?php } ?>
		</table>
		<?php
		if (isset($_GET['m'])) {
			$m = $_GET['m'];
			printf("<h3>$m</h3");
		}
		?>
	</div>
</body>

</html>