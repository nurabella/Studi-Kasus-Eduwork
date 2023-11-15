<?php
include "../connection.php";

$id_pelanggan = $_GET['id_pelanggan'];

$result = mysqli_query($connection, "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");

header("Location: page-customer.php");

?>