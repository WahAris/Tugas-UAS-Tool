<?php
    include_once 'koneksi.php';

    $id=$_GET['id'];

    $query="DELETE from tb_buku WHERE id_buku=$id";

    $hasil=mysqli_query($conn,$query);

    if ($hasil) {
        echo "<script>alert('Data Buku Berhasil Dihapus');window.location='index.php'</script>";
    }else {
        echo "Data Buku gagal dihapus";
    }

?>