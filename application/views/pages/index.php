<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bahan</title>
		<script type="text/javascript" src="<?php echo base_url('datatables/media/js/jquery.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('datatables/media/js/jquery.dataTables.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('bootstrap/bootstrap.min.js'); ?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css'); ?>">
	    <link href="<?php echo base_url('datatables/media/css/jquery.dataTables.css'); ?>" rel="stylesheet" type="text/css" />
	    <link type="text/css" rel="stylesheet" href="<?php echo base_url('datatables/media/css/jquery.dataTables.min.css'); ?>"/>
	    <link type="text/css" rel="stylesheet" href="<?php echo base_url('datatables/media/css/jquery.dataTables_themeroller.css'); ?>"/>
	    <script type="text/javascript">
		 $(document).ready(function() {
		    $('#belajar').dataTable();
		 } );
		</script>
	</head>
	<body>
	<p><a href="<?php echo site_url('welcome/tambah'); ?>">Create article</a></p>
		<table align="center" class="display" id="belajar">
			<thead>
				<tr>
					<th>No ID</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Kontak</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
			<?php foreach ($peserta as $datas) { ?>
				<tr>
					<td align="center"><?php echo $datas['id']; ?></td>
					<td align="center"><?php echo $datas['nama']; ?></td>
					<td align="center"><?php echo $datas['jk']; ?></td>
					<td align="center"><?php echo $datas['kontak']; ?></td>
					<td align="center"><?php echo $datas['alamat']; ?></td>
					<td align="center">
						<a href="<?php echo site_url('welcome/single/'.$datas['id']); ?>">Tampil</a>
						<a href="<?php echo site_url('welcome/ubah/'.$datas['id']); ?>">Ubah</a>
						<a href="<?php echo site_url('welcome/hapus/'.$datas['id']); ?>">Hapus</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</body>
</html>