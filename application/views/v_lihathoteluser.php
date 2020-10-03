<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hotel</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>alamat</th>
			<th>notelp</th>
		</tr>
		<?php foreach ($data as $row) { ?>
			<tr>
				<td><?php echo $row->id ?></td>
				<td><?php echo $row->nama ?></td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->notelp ?></td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>