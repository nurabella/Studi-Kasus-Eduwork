<?php 
include "../connection.php";
$id_pelanggan = $_GET['id_pelanggan'];
$foto =  $_FILES['foto'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$jenis_kelamin =  $_POST['jenis_kelamin'];
$telpon =  $_POST['telpon'];
$alamat=  $_POST['alamat'];
mysqli_query($connection, "UPDATE pelanggan SET foto='$foto', nama_pelanggan='$nama_pelanggan', jenis_kelamin='$jenis_kelamin', 
telpon='$telpon', alamat='$alamat' ");

header("Location: page-customer.php");
?>