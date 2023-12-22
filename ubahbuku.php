<?php
	include_once 'koneksi.php';
    
    $id=$_GET['id'];

	$query="SELECT * FROM tb_buku WHERE id_buku=" . $id;

    $hasil=mysqli_query($conn,$query);
?>

<html>
<head>
	<title>Toko Buku Gramidi</title>
</head>
<body>
        <center>
        <h1> Ubah Buku </h1>
        <?php while ($data= mysqli_fetch_array($hasil)) {?>
        <form method="post" action="prosesubahbuku.php">
		<table>
			<tr>
				<td>Nama Buku</td>
				<td><input type="text" name="nama_buku" value="<?php echo $data['nama_buku'] ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga_buku" value="<?php echo $data['harga_buku'] ?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok_buku" value="<?php echo $data['stok_buku'] ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi_buku" value="<?php echo $data['deskripsi_buku'] ?>"></td>
			<tr>
				<td><input type="hidden" name="id_buku" value="<?php echo $data['id_buku'] ?>"></td>
				<td><input type="submit" value="Ubah Buku"></td>
			</tr>
		</table>
        </form>
		<?php }?>
        <center>
</body>
</html>