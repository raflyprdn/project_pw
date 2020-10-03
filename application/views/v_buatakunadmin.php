<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Register</title>
</head>

<body>
	<div class="containers">
		<h1>Buat Akun</h1>
		<form method="POST" action="<?= base_url('login/buatakunadmin') ?>">
			<div class="form-group">
				<table>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" class="form-control tbl"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><textarea name="alamat" class="form-control tbl"></textarea></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" class="form-control tbl"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" class="form-control tbl"></td>
					</tr>
				</table>
			</div>
				<button type="submit" name="submit" class="btn btn-primary">Buat</button>
				<button type="reset" class="btn btn-danger">Reset</button>
		</form>
	</div>
</body>

</html>