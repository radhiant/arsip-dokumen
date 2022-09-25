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
		<td class="td"><p class="judul">Data Buku</p></td>
		<td align="right" class="td"><p class="jumlah">Jumlah Data : <?= $jumlah; ?></p></td>
	</tr>

</table>

<table>
	<thead>
	<tr>
		<th><p class="text">No</p></th>
		<th><p class="text">Judul Buku</p></th>
		<th><p class="text">Penerbit</p></th>
		<th><p class="text">Pengarang</p></th>
		<th><p class="text">Tahun</p></th>
		<th><p class="text">ISBN</p></th>
		<th><p class="text">Jumlah</p></th>
		<th><p class="text">Lokasi</p></th>

	</tr>
</thead>
<tbody>
	
		<?php foreach ($buku as $bk) { ?>
		<tr>
			<td><p class="text"><?= $no++; ?></p></td>
		<td><p class="text"><?= $bk->judul_buku ?></p></td>
		<td><p class="text"><?= $bk->penerbit ?></p></td>
		<td><p class="text"><?= $bk->pengarang ?></p></td>
		<td><p class="text"><?= $bk->tahun ?></p></td>
		<td><p class="text"><?= $bk->isbn ?></p></td>
		<td><p class="text"><?= $bk->jumlah ?></p></td>
		<td><p class="text"><?= $bk->lokasi ?></p></td>
		</tr>
		<?php } ?>

	</tbody>
	
</table>

</body>
</html>