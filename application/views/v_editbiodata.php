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
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('user/hotelsewa') ?>">Pesan Kamar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('user/lihatpesanan') ?>">Lihat Pesanan</a>
				</li>
				<li class="nav-item active">
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
		<h1>Edit Biodata</h1>
		<form method="POST" action="<?= base_url('user/editbiodata') ?>">
			<div class="form-group">
				<table>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" value="<?= $data[0]->nama; ?>" class="form-control tbl"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><textarea name="alamat" class="form-control tbl"><?php echo $data[0]->alamat ?></textarea></td>
					</tr>
					<tr>
						<td>Tgl Lahir</td>
						<td><input type="date" name="tgl_lahir" value="<?= $data[0]->tgl_lahir ?>" class="form-control tbl"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?= $data[0]->username ?>" class="form-control tbl"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" value="<?= $data[0]->password ?>" class="form-control tbl"></td>
					</tr>
				</table>
			</div>
			<button type="submit" name="edit" class="btn btn-success">Submit</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</form>
	</div>
</body>

</html>