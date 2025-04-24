<?php

include("config.php");

if( !isset($_GET['rekening'])){
    header('Location: list-nasabah.php');
}

$rekening = $_GET['rekening'];

$sql = "SELECT * FROM nasabah WHERE rekening=$rekening";
$query = mysqli_query($conn, $sql);
$calon_nasabah = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>Formulir Pendaftaran Nasabah | Bank Asep Terpercaya </title>
</head>

<body>
    <header>
        <h3>Formulir Edit Nasabah Bank Asep Terpercaya</h3>
    </header>

    <form action="proses-edit-nasabah.php" method="POST">
        <fieldset>
        <p>
                <label for="nama_lengkap">Nama Lengkap: </label>
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $calon_nasabah['nama_lengkap'] ?>" />
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="text" name="email" placeholder="Email" value="<?php echo $calon_nasabah['email'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <input name="alamat" value="<?php echo $calon_nasabah['alamat'] ?>" />
            </p>
            <p>
                <label for="no_ktp">Nomor KTP: </label>
                <input type="number" name="no_ktp" placeholder="Nomor KTP" value="<?php echo $calon_nasabah['no_ktp'] ?>" />
            </p>
            <p>
                <label for="no_hp">Nomor HP: </label>
                <input type="number" name="no_hp" placeholder="Nomor HP" value="<?php echo $calon_nasabah['no_hp'] ?>" />
            </p>
            <input type="number" name="rekening" placeholder="Rekening" value="<?php echo $calon_nasabah['rekening'] ?>" hidden/>
            <p>
                <input type="submit" value="Simpan" name="Simpan" /><br><br>
                <a href="index.php">Menu Awal</a>
            </p>
        </fieldset>
    </form>
</body>
</html>