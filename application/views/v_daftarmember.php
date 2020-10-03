<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Input Hotel</title>
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
				<li class="nav-item active">
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
	<center><h3>Daftar Member</h3></center><br>
	<form method="POST" action="<?= base_url('member/daftarmember')?>">
	<div class="form-group">	
	<table>
			<tr>
				<td>Nama</td><td><input type="text" name="nama" class="form-control tbl"></td>
			</tr>
			<tr>
                <td>Tipe</td>
                <td>
                    <select class="form-control" id="exampleFormControlSelect1" style="margin-left: 15px;" name="tipe">
							<option disabled selected hidden>Pilih Tipe Member</option>
							<option value="Silver">Gold</option>
							<option value="Gold">Silver</option>
                    </select>
                </td>
			</tr>
			<tr>
				<td>Masa Aktif</td><td><input type="text" name="masa_aktif" class="form-control tbl"></td>
			</tr>
		</table>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</form>
	</div>
</body>
</html>