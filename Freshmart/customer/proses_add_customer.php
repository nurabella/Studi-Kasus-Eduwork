<?php 
include '../connection.php';
$nama_pelanggan = $_POST['nama_pelanggan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];


$result = mysqli_query($connection, "INSERT INTO pelanggan (nama_pelanggan,jenis_kelamin,telpon,alamat) 
VALUES ('$nama_pelanggan', '$jenis_kelamin','$telpon' , '$alamat'	) ");

header("Location:page-customer.php");

 ?>