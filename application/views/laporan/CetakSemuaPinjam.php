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
		<td class="td"><p class="judul">Data Pinjam</p></td>
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
		<th><p class="text">Keterangan</p></th>

	</tr>
</thead>
<tbody>
	
		<?php foreach ($pinjam as $p) { ?>
		<tr>
			<td><p class="text"><?= $no++; ?></p></td>
		<td><p class="text"><?= $p->judul_buku ?></p></td>
		<td><p class="text"><?= $p->nim ?></p></td>
		<td><p class="text"><?= $p->nama_anggota ?></p></td>
		<td><p class="text"><?= $p->tgl_pinjam ?></p></td>
		<td><p class="text"><?= $p->tgl_kembali ?></p></td>
		<td><p class="text"><?= $p->ket ?></p></td>
		
		</tr>
		<?php } ?>

	</tbody>
	
</table>

</body>
</html>