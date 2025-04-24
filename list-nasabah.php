<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Nasabah || Bank Asep Terpercaya</title>
    <link rel="stylesheet" href="list-nasabah.css">
</head>
<body>
    <header class="header-menu">
        <h1 class="logo">Asep</h1>
        <nav>
            <ul>
                <li><a href="form-daftar-nasabah.php">Pendaftaran</a></li>
                <li><a href="list-nasabah.php">Member</a></li>
                <li><a href="index.php">Beranda</a></li>
            </ul>
        </nav>
        <a class="cta" href="g"><button>Contact</button></a>
    </header>
    <br>

    <table border="1">
     <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Nomor KTP</th>
            <th>Nomor HP</th>
            <th>Rekening</th>
            <th>Tindakan</th>
        </tr>
     </thead>
     <tbody>

     <?php
     $sql = "SELECT * FROM nasabah";
     $query = mysqli_query($conn, $sql);

     while($calon_nasabah = mysqli_fetch_array($query)) {
        echo "<tr>";

        echo "<td>".$calon_nasabah['nama_lengkap']."</td>";
        echo "<td>".$calon_nasabah['email']."</td>";
        echo "<td>".$calon_nasabah['alamat']."</td>";
        echo "<td>".$calon_nasabah['no_ktp']."</td>";
        echo "<td>".$calon_nasabah['no_hp']."</td>";
        echo "<td>".$calon_nasabah['rekening']."</td>";

        echo "<td>";
        echo "<a href= 'edit-nasabah.php?rekening=".$calon_nasabah['rekening']."'>Edit</a> | ";
        echo "<a href= 'hapus-nasabah.php?rekening=".$calon_nasabah['rekening']."'>Hapus</a>";

        echo "</tr>";
     }
     ?>
     </tbody>   
    </table>
    
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    
</body>
</html>