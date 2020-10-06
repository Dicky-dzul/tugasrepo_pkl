<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Obat</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php echo form_open_multipart('C_control/proses_Edit/'.$data->id_obat) ?>

	
			<input type="text" name="nama_obat" value="<?php echo $data->nama_obat ?>"><br><br>
			<input type="radio" name="jenis_obat" value="kapsul"><label>Kapsul</label><br><br>
			<input type="radio" name="jenis_obat" value="sirup"><label>Sirup</label><br><br>
			<input type="date" name="tanggal_kedaluarsa" value="<?php echo $data->tanggal_kedaluarsa ?>"><br><br>
	
		<button class="btn btn-primary">Tambah</button></td>


	<?php echo form_close() ?>
</body>
</html>