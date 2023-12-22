<html>
<head>
	<title>Toko Buku Gramidi</title>
</head>
<body>
	<center>
		<h1> Tambah Buku </h1>
		<form action="prosestambahbuku.php" method="post">
		<table>
			<tr>
				<td>ID Buku</td>
				<td><input type="number" name="id_buku" placeholder="Masukkan ID Buku Baru"></td>
			</tr>
			<tr>
				<td>Nama Buku</td>
				<td><input type="text" name="nama_buku" placeholder="Masukkan Nama Buku"></td>
			</tr>
			<tr>
				<td>Harga Buku</td>
				<td><input type="number" name="harga_buku" placeholder="Masukkan Harga Buku"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok_buku" placeholder="Masukkan Stok Buku"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi_buku" placeholder="Masukkan Deskripsi Buku"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah Buku"></td>
			</tr>
		</table>
		</form>
	</center>
</body>
</html>