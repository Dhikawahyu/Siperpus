<?php 
include '../koneksi.php';
$id_pinjam=$_GET["id_pinjam"];
$query=mysqli_query($koneksi,"DELETE FROM detail_pinjam where id_pinjam='$id'");
$query=mysqli_query($koneksi,"DELETE FROM peminjaman where id_pinjam='$id'");
if(isset($query)){
    header("location : index.php");
    exit;
}
else{
    header("location : index.php");
    exit;
}
?>