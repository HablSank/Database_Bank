<?php
include("config.php");

if (isset($_POST['Simpan'])){

    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $no_hp = $_POST['no_hp'];
    $rekening = $_POST ['rekening'];
    
    $sql = "UPDATE nasabah SET nama_lengkap='$nama_lengkap', email= '$email', alamat='$alamat', no_ktp='$no_ktp', no_hp='$no_hp', rekening='$rekening' WHERE rekening=$rekening";
    $query = mysqli_query($conn, $sql);


    if( $query ) {
        header('Location: list-nasabah.php');
    }else {
        die("Gagal menyimpan perubahan :(");
    }


} else {
    die("Akses Dilarang!");
}

?>