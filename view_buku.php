<?php
	include_once("koneksi.php");

	$query="SELECT * FROM tb_buku";

	$hasil=mysqli_query($conn, $query);

?>

<html>
<head>
	<title>Data Buku</title>
</head>
<body>

	<center>
        <h1> DAFTAR BUKU </h1>
		<a href="tambahbuku.php">Tambah Buku</a>
		<br>
		<br>
		<table border="1px solid black" cellpadding="20px" width="700px" bgcolor="white" align="center">
			<tr style="text-align: center;">
				<th>No</th>
				<th>Nama Buku</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Deskripsi</th>
				<th>Konfigurasi</th>
			<?php 
				$nomor=1;
				while ($data=mysqli_fetch_array($hasil)){

			?>

			</tr>
			<tr>
				<td> <?php echo $nomor;?> </td>
				<td> <?php echo $data['nama_buku'];?> </td>
		        <td> <?php echo $data['harga_buku'];?> </td>
				<td> <?php echo $data['stok_buku'];?> </td>
				<td> <?php echo $data['deskripsi_buku'];?> </td>
				<td>
				<a href="ubahbuku.php?id= <?php echo $data['id_buku']?> "> Ubah </a>
				|
				<a href="hapusbuku.php?id= <?php echo $data['id_buku']?>"
				onclick="return confirm('Apakah kamu yakin ingin hapus buku <?php echo $data['judul_buku'];?> ?')"> Hapus </a>
				</td>
			</tr>
		<?php $nomor++; } ?>
		</table>
	</center>
</body>
</html>