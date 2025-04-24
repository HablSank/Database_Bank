<?php
include("config.php");

if (isset($_POST['Daftar'])){

    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $no_hp = $_POST['no_hp'];
    $rekening = $_POST['rekening'];

$sql = "INSERT INTO nasabah (nama_lengkap, email, alamat, no_ktp, no_hp, rekening) VALUE ('$nama_lengkap', '$email', '$alamat', '$no_ktp', '$no_hp', '$rekening')";
    $query = mysqli_query($conn, $sql);


    if( $query ) {
        header('Location: index.php?status=sukses');
    }else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang.");
}


?>