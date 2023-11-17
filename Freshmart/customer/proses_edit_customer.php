<?php 
include "../connection.php";
$id_pelanggan = $_GET['id_pelanggan'];

$nama_pelanggan = $_POST['nama_pelanggan'];
$jenis_kelamin =  $_POST['jenis_kelamin'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];

mysqli_query($connection, "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', jenis_kelamin='$jenis_kelamin', telpon='$telpon', 
alamat='$alamat', gambar='$gambar' WHERE id_pelanggan ='$id_pelanggan' ");

header("Location: page-customer.php");
?>