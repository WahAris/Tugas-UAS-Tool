<?php
	include_once 'koneksi.php';

	$id=$_POST['id_buku'];
	$nama_buku=$_POST['nama_buku'];
	$harga_buku=$_POST['harga_buku'];
	$stok_buku=$_POST['stok_buku'];
	$deskripsi_buku=$_POST['deskripsi_buku'];

	$query="UPDATE tb_buku SET nama_buku='$nama_buku', harga_buku='$harga_buku', stok_buku='$stok_buku', deskripsi_buku='$deskripsi_buku'
			WHERE id_buku=$id";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		echo "<script>alert('Data Berhasil Diubah');window.location='index.php'</script>";
	}else{
		echo "Ubah data gagal!";
	}
?>