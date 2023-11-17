<?php 
include '../connection.php';
$nama_pelanggan = $_POST['nama_pelanggan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];

$result = mysqli_query($connection, "INSERT INTO pelanggan (nama_pelanggan,jenis_kelamin,telpon,alamat,gambar) 
VALUES ('$nama_pelanggan', '$jenis_kelamin','$telpon' , '$alamat', '$gambar') ");

header("Location:page-customer.php");

 ?>