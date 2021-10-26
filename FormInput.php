<html>
<head>
	<title>Form Input Sepatu</title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<center>
		<form action="<?= base_url('Sepatu/cetak'); ?>"method="post">
			<table>
				<tr>
					<th colspan="3">Form Input Pembelian Sepatu</th>
				</tr>
				<tr>
					<td colspan="3"><hr></td>
				</tr>
				<tr>
					<th>Nama</th>
					<th>:</th>
					<td>
						<input type="text" name="nama" id="nama">
					</td>
				</tr>
				<tr>
					<th>No HP</th>
					<th>:</th>
					<td>
						<input type="text" name="nohp" id="nohp">
					</td>
				</tr>
				<tr>
					<th>Merk Sepatu</th>
					<th>:</th>
					<td>
						<select name="merk" id="merk">
							<option value="Nike">Nike</option>
							<option value="Adidas">Adidas</option>
							<option value="Kickers">Kickers</option>
							<option value="Eiger">Eiger</option>
							<option value="Bucherri">Bucherri</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Ukuran Sepatu</th>
					<th>:</th>
					<td>
						<select name="ukuran" id="ukuran">
							<option value="1">32</option>
							<option value="2">33</option>
							<option value="3">34</option>
							<option value="4">35</option>
							<option value="5">36</option>
							<option value="5">37</option>
							<option value="5">38</option>
							<option value="5">39</option>
							<option value="5">40</option>
							<option value="5">41</option>
							<option value="5">42</option>
							<option value="5">43</option>
							<option value="5">44</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit">
						<input type="reset" value="Batal">
					</td>
				</tr>

 			</table>
 		</form>
 	</center>
</body>
</html>
