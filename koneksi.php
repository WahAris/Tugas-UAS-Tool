<?php

$conn=mysqli_connect("localhost","root","","db_toko_buku");

if(!$conn){
	echo "Koneksi gagal";
	die();
}else{
	echo "";
}

?>