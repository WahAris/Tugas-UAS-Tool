<?php
	include_once("koneksi.php");

	$query="SELECT * FROM tb_buku";

	$hasil=mysqli_query($conn, $query);

?>

<html>
    <head>
        <title>Toko Buku Gramidi</title>
        <link rel="stylesheet" type="text/css" href="style_tokobuku.css">
    </head>
    <body>
            <table class="tabel">
                <tr>
                    <table class="header-index">
                        <td><h1>Gramidi</h1></td> 
                    </table>
                    
                    <tr>
                        <td>
                            <img src="logobuku.png" class="image">
                        </td>
                    </tr>

                    <center>
        <h1> DAFTAR BUKU </h1>
		<a href="tambahbuku.php">Tambah Buku</a>
		<br>
		<br>
		<table border="3px solid black" cellpadding="20px" width="700px" bgcolor="white" align="center">
			<tr style="text-align: center;">
				<th>No</th>
				<th width="110px">Nama Buku</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Deskripsi</th>
				<th width="90px">Konfigurasi</th>
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
				<a class="ubah" href="ubahbuku.php?id= <?php echo $data['id_buku']?> "> Ubah </a>
				||
				<a class="hapus" href="hapusbuku.php?id= <?php echo $data['id_buku']?> "
				onclick="return confirm('Apakah kamu yakin ingin hapus buku <?php echo $data['nama_buku'];?> ?')"> Hapus </a>
				</td>
			</tr>
		<?php $nomor++; } ?>
		</table>
	</center>
                </tr>
            </table>
    </body>
</html>