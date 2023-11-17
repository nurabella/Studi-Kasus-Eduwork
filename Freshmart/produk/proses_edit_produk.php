<?php 
include "../connection.php";
$id_produk = $_GET['id_produk'];

$nama_produk = $_POST['nama_produk'];
$id_kategori =  $_POST['id_kategori'];
$stok = $_POST['stok'];
$satuan= $_POST['satuan'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];

mysqli_query($connection, "UPDATE produk SET nama_produk='$nama_produk', id_kategori='$id_kategori', stok='$stok', 
satuan='$satuan', harga='$harga', gambar='$gambar' WHERE id_produk ='$id_produk' ");

header("Location: product.php");