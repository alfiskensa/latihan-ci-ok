<?php echo validation_errors(); ?>

<?php echo form_open('welcome/tambah'); ?>

	<label for="nama">Nama</label>
	<input type="input" name="nama" /><br>

	<label for="jk">Jenis Kelamin</label>
	<input type="input" name="jk" /><br>

	<label for="kontak">Kontak</label>
	<input type="input" name="kontak" /><br>

	<label for="alamat">Alamat</label>
	<textarea name="alamat" cols="30" rows="7"></textarea><br>

	<input type="submit" name="submit" value="Tambah peserta" />

<?php echo form_close(); ?>