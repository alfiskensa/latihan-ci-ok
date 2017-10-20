<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8 "/>
		<title>Bahan</title>
	</head>
	<body>
	<p><a href="<?php echo site_url('welcome'); ?>">Halaman awal</a></p>
		<table align="center">
			<thead>
				<tr>
					<th style="padding: 15">No ID</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Kontak</th>
					<th>Alamat</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td align="center"><?php echo $datas['id']; ?></td>
					<td align="center"><?php echo $datas['nama']; ?></td>
					<td align="center"><?php echo $datas['jk']; ?></td>
					<td align="center"><?php echo $datas['kontak']; ?></td>
					<td align="center"><?php echo $datas['alamat']; ?></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>