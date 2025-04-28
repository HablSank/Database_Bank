<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Bank Asep Terpercaya</title>
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
        <h1>Bank Asep Terpercaya</h1>
        <h2>Bank Aman Dan Terpercaya</h2>
        <br>
        <a href="form-daftar-nasabah.php" class="cta">mulai pendaftaran</a>
    </section> 
    <section class="about-section">
        <p>kami adalah bank yang telah berdiri dari 1200 sebelum masehi</p>
        <p>fir'aun pernah ngitang disini</p>
    </section>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran nasabah baru berhasil!";
            } else {
                echo "Pendaftaran nasabah gagal!";
            }
        ?>
    </p>
<?php endif; ?>

</body>
</html>