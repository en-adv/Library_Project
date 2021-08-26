<?php
include'../koneksi.php';

$id_buku=$_POST['id_buku'];
$judul_buku=$_POST['judul_buku'];
$kategori=$_POST['kategori'];
$penerbit=$_POST['penerbit'];

If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbbuku
		SET judulbuku='$judul_buku', kategori='$kategori', penerbit='$penerbit'
		WHERE idbuku='$id_buku'"
	);
	header("location:../index.php?p=buku");
}
?>