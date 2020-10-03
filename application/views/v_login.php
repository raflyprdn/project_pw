<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<title>Login</title>
</head>

<body id="login">
	<div class="containers">
		<h3>Login</h3>
		<form method="POST" action="<?= base_url('login/cek') ?>">
			<div class="form-group">
				Username :<input type="text" name="username" class="form-control form"><br>
				Password :<input type="password" name="password" class="form-control form"><br>
				<?php
				if (isset($_GET['m'])) {
					$m = $_GET['m'];
					printf("<h6>$m</h6>");
				}
				?><br>
				<button type="submit" name="login" class="btn btn-primary">Masuk</button>
				<input type="reset" name="reset" class="btn btn-danger">
			</div>
		</form>
		<a href="<?= base_url('login/buatakun') ?>">Register User</a>
		<a href="<?= base_url('login/buatakunadmin') ?>">Register Admin</a>
	</div>
</body>

</html>