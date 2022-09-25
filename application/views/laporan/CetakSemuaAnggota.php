<?php 

$no = 1;

?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $judul_halaman; ?></title>
</head>
<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/css/laporan.css">

<body>

<table width="100%">
	<tr>
		<td class="td"><p class="judul">Data Anggota</p></td>
		<td align="right" class="td"><p class="jumlah">Jumlah Data : <?= $jumlah; ?></p></td>
	</tr>

</table>

<table>
	<thead>
	<tr>
		<th><p class="text">No</p></th>
		<th><p class="text">NIM</p></th>
		<th><p class="text">Nama Anggota</p></th>
		<th><p class="text">Tempat Lahir</p></th>
		<th><p class="text">Tgl Lahir</p></th>
		<th><p class="text">Jenis Kelamin</p></th>
		<th><p class="text">Prodi</p></th>
		<th><p class="text">Tahun Masuk</p></th>

	</tr>
</thead>
<tbody>
	
		<?php foreach ($anggota as $a) { ?>
		<tr>
			<td><p class="text"><?= $no++; ?></p></td>
		<td><p class="text"><?= $a->nim ?></p></td>
		<td><p class="text"><?= $a->nama_anggota ?></p></td>
		<td><p class="text"><?= $a->tempat_lahir ?></p></td>
		<td><p class="text"><?= $a->tgl_lahir ?></p></td>
		<td><p class="text"><?= $a->jk ?></p></td>
		<td><p class="text"><?= $a->prodi ?></p></td>
		<td><p class="text"><?= $a->thn_masuk ?></p></td>
		</tr>
		<?php } ?>

	</tbody>
	
</table>

</body>
</html>