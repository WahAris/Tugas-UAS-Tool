<?php
	include_once 'koneksi.php';

	$id_buku=$_POST['id_buku'];
	$nama_buku=$_POST['nama_buku'];
	$harga_buku=$_POST['harga_buku'];
	$stok_buku=$_POST['stok_buku'];
	$deskripsi_buku=$_POST['deskripsi_buku'];

	$query="INSERT INTO tb_buku (id_buku,nama_buku,harga_buku,stok_buku,deskripsi_buku)
            VALUES ('$id_buku','$nama_buku','$harga_buku','$stok_buku','$deskripsi_buku')";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		echo "<script>alert('Data Buku Berhasil Ditambah');window.location='index.php'</script>";
	}else{
		echo "Tambah data buku gagal!";
	}
?>