<?php 
include '../connection.php';

$nama_produk = $_POST['nama_produk'];
$id_kategori =  $_POST['id_kategori'];
$stok = $_POST['stok'];
$satuan= $_POST['satuan'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];

$result = mysqli_query($connection, "INSERT INTO produk (nama_produk, id_kategori, stok, satuan, harga, gambar) 
VALUES ('$nama_produk','$id_kategori', '$stok','$satuan' , '$harga', '$gambar') ");

header("Location:product.php");

?>