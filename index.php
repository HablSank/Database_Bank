<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="main.css" />
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
    </header>

    <section class="upper-section">
        <div class="hero-text">
            <h1>Bank Asep Terpercaya</h1>
            <h2>Bank Aman dan Terpercaya Sejak Dulu</h2>
            <a href="form-daftar-nasabah.php" class="btn">Mulai Pendaftaran</a>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <div class="text">
                <h2>Tentang Kami</h2>
                <p>Kami adalah bank yang telah berdiri sejak 1200 SM.</p>
                <p>Bahkan Fir'aun pernah berutang di sini.</p>
            </div>
            <div class="image">
                <img src="asset/Foto-Asep.jpg" alt="Founder 1 Bank Asep" />
                <img src="asset/Foto-Parama.jpg" alt="Founder 2 Bank Asep" />
                <img src="asset/Foto-Habl.jpg" alt="Founder 3 Bank Asep" />
                <img src="asset/Foto-Hafizh.jpg" alt="Founder 4 Bank Asep" />
            </div>
        </div>
    </section>

    <?php if(isset($_GET['status'])): ?>
    <p class="status-msg">
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
