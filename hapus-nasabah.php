<?php

include("config.php");

if(isset($_GET['rekening'])){
    $rekening = $_GET['rekening'];
    $sql = "DELETE FROM nasabah WHERE rekening=$rekening";
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: list-nasabah.php');
    } else {
        die("Gagal Menghapus :(");
    }
} else {
    die("Akses Dilarang!");
}
?>