<?php 
include "../connection.php";
$id_produk = $_GET['id_produk'];
$nama_produk = $_POST['nama_produk'];
$id_kategori =  $_POST['id_kategori'];
$stok = $_POST['stok'];
$satuan= $_POST['satuan'];
$harga = $_POST['harga'];
$id_suplier = $_POST['id_suplier'];



mysqli_query($connection, "UPDATE produk SET nama_produk='$nama_produk', id_kategori='$id_kategori', stok='$stok', 
satuan='$satuan', harga='$harga', id_suplier='$id_suplier' WHERE id_produk ='$id_produk' ");

header("Location: product.php");