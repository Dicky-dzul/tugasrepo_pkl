<!DOCTYPE html>
<html>
<head>
	<title>CRUD Apotek</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<table class="table text-center">
		<thead>
			<th>Nama Obat</th>
			<th>Jenis Obat</th>
			<th>Tanggal Kedaluarsa</th>
			<th>Opsi</th>
		</thead>
		<?php foreach($data as $d) { ?>
			<tbody>
				<tr>
					<td><?php echo $d['nama_obat'] ?></td>
					<td><?php echo $d['jenis_obat'] ?></td>
					<td><?php echo $d['tanggal_kedaluarsa'] ?></td>
					<td><a class="btn btn-primary" href="<?php echo site_url('C_control/Edit_data/'.$d['id_obat']) ?>">Edit</a>
						||<a class="btn btn-danger" href="<?php echo site_url('C_control/hapus_data/'.$d['id_obat']) ?>" onclick="confirm('Yakin Ingin Menghapus?')">Hapus</a></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
	<p align="center"><a class="btn btn-primary" href="<?php echo site_url('C_control/Tambah_data') ?>">Tambah Data</a></p>
</body>
</html>