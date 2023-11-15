<?php
include "../connection.php";

$id_produk = $_GET['id_produk'];

$result = mysqli_query($connection, "DELETE FROM produk WHERE id_produk='$id_produk'");

header("Location: product.php");

?>