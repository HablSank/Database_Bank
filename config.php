<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "rekening_bank";

$conn = mysqli_connect($server, $user, $password, $nama_database);
if ($conn -> connect_error) {
    die("Gagal terhubung database bank: " . mysqli_connect_error());
}
?>