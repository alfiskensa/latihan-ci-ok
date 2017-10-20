<?php echo validation_errors(); ?>
<p><a href="<?php echo site_url('welcome'); ?>">Halaman awal</a></p>

<?php echo form_open('welcome/ubah/'.$datas['id']); ?>

	<label for="nama">Nama</label>
	<input type="input" name="nama" value='<?php echo $datas['nama']; ?>'><br>

	<label for="jk">Jenis Kelamin</label>
	<input type="input" name="jk" value='<?php echo $datas['jk']; ?>'><br>

	<label for="kontak">Kontak</label>
	<input type="input" name="kontak" value='<?php echo $datas['kontak']; ?>'><br>

	<label for="alamat">Alamat</label>
	<textarea name="alamat" cols="30" rows="7"><?php echo $datas['alamat']; ?></textarea><br>

	<input type="submit" name="submit" value="Ubah peserta" />

<?php echo form_close(); ?>