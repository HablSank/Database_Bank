<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>List Nasabah || Bank Asep Terpercaya</title>
    <link rel="stylesheet" href="data-nasabah.css" />
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
    </header>

    <main class="container">
        <h2 class="section-title">Data Nasabah Terdaftar</h2>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No. KTP</th>
                        <th>No. HP</th>
                        <th>Rekening</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM nasabah";
                        $query = mysqli_query($conn, $sql);

                        while($nasabah = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>".$nasabah['nama_lengkap']."</td>";
                            echo "<td>".$nasabah['email']."</td>";
                            echo "<td>".$nasabah['alamat']."</td>";
                            echo "<td>".$nasabah['no_ktp']."</td>";
                            echo "<td>".$nasabah['no_hp']."</td>";
                            echo "<td>".$nasabah['rekening']."</td>";
                            echo "<td class='actions'>
                                    <a class='btn-edit' href='edit-nasabah.php?rekening=".$nasabah['rekening']."'>Edit</a>
                                    <a class='btn-delete' href='hapus-nasabah.php?rekening=".$nasabah['rekening']."'>Hapus</a>
                                  </td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <p class="total">Total Nasabah: <?php echo mysqli_num_rows($query); ?></p>
        </div>
    </main>

</body>
</html>
