<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Obat</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php echo form_open_multipart('C_control/proses_Tambah') ?>

	<input type="text" name="nama_obat" placeholder="Nama Obat"><br><br>
	<label>Jenis Obat : </label><br>
	<input type="radio" name="jenis_obat" value="kapsul" checked><label>Kapsul</label><br><br>
	<input type="radio" name="jenis_obat" value="sirup"><label>Sirup</label><br><br>	
	<input type="date" name="tanggal_kedaluarsa"><br><br>

	<button class="btn btn-primary">Tambah</button>

	<?php form_close(); ?>
</body>
</html>