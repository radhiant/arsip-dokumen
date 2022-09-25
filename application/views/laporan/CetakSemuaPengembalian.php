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
		<td class="td"><p class="judul">Data Pengembalian</p></td>
		<td align="right" class="td"><p class="jumlah">Jumlah Data : <?= $jumlah; ?></p></td>
	</tr>

</table>

<table>
	<thead>
	<tr>
		<th><p class="text">No</p></th>
		<th><p class="text">Judul Buku</p></th>
		<th><p class="text">NIM</p></th>
		<th><p class="text">Nama Anggota</p></th>
		<th><p class="text">Tgl Pinjam</p></th>
		<th><p class="text">Tgl Kembali</p></th>
		<th><p class="text">Terlambat</p></th>
		<th><p class="text">Biaya Denda</p></th>

	</tr>
</thead>
<tbody>
	
		<?php foreach ($pengembalian as $pn) { ?>
		<tr>
			<td><p class="text"><?= $no++; ?></p></td>
		<td><p class="text"><?= $pn->judul_buku ?></p></td>
		<td><p class="text"><?= $pn->nim ?></p></td>
		<td><p class="text"><?= $pn->nama_anggota ?></p></td>
		<td><p class="text"><?= $pn->tgl_pinjam ?></p></td>
		<td><p class="text"><?= $pn->tgl_kembali ?></p></td>
		<td><p class="text"><?= $pn->terlambat ?></p></td>
		<td><p class="text"><?= $pn->biaya_denda ?></p></td>
		</tr>
		<?php } ?>

	</tbody>
	
</table>

</body>
</html>