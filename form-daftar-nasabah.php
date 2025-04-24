<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Nasabah</title>
    <link rel="stylesheet" href="form-daftar-nasabah.css">
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
    <section class="upper-section">
        <h1>Forum Data Diri</h1>
    </section>
    <form action="proses-daftar-nasabah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_lengkap">Nama Lengkap: </label>
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="text" name="email" placeholder="Email">
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <input name="alamat"></>
            </p>
            <p>
                <label for="no_ktp">Nomor KTP: </label>
                <input type="number" name="no_ktp" placeholder="Nomor KTP" />
            </p>
            <p>
                <label for="no_hp">Nomor HP: </label>
                <input type="number" name="no_hp" placeholder="Nomor HP" />
            </p>
            <p>
                <label for="rekening">Rekening: </label>
                <input type="number" name="rekening" placeholder="Rekening" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="Daftar" /><br><br>
                <a href="index.php">Beranda</a>
            </p>
        </fieldset>
    </form>
</body>

</html>