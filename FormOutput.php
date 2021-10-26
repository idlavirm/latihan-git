<html>
<head>
	<title>Tampil Data Pembelian Sepatu</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3"> Tampil Data Pembelian Sepatu</th>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
			<tr>
				<td>Nama Pembeli</td>
				<th>:</th>
				<td><?= $nama; ?></td>
			</tr>
			<tr>
				<td>No HP</td>
				<th>:</th>
				<td><?= $nohp; ?></td>
			</tr>
			<tr>
				<td>Merk Sepatu</td>
				<th>:</th>
				<td><?= $merk; ?></td>
			</tr>
            <tr>
				<td>Ukuran Sepatu</td>
				<th>:</th>
				<td><?= $ukuran; ?></td>
			</tr>
            <tr>
				<td>Harga Sepatu</td>
				<th>:</th>
				<td><?= $harga; ?></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><a href="<?= base_url('sepatu');?>">Kembali</a>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>