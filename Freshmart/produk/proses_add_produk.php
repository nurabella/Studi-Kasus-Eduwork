<?php 
include '../connection.php';
$nama_produk = $_POST['nama_produk'];
$id_kategori =  $_POST['id_kategori'];
$stok = $_POST['stok'];
$satuan= $_POST['satuan'];
$harga = $_POST['harga'];
$id_suplier = $_POST['id_suplier'];
$foto = $_FILES['foto']['name'];


$result = mysqli_query($connection, "INSERT INTO produk (nama_produk,id_kategori,stok,satuan,id_suplier,foto) 
VALUES ('$nama_produk','$id_kategori', '$stok','$satuan' , '$id_suplier','$foto'	) ");

header("Location:product.php");

?>