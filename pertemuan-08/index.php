<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya wabihamdika";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="datamahasiswa">
      <h2>Entry Data Mahasiswa</h2>
      <form action="" method="POST">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>

        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

        <label for="hobi">Hobi:</label>
        <input type="text" id="hobi" name="hobi">

        <label for="pasangan">Pasangan:</label>
        <input type="text" id="pasangan" name="pasangan">

        <label for="pekerjaan">Pekerjaan:</label>
        <input type="text" id="pekerjaan" name="pekerjaan">

        <label for="nama_ortu">Nama Orang Tua:</label>
        <input type="text" id="nama_ortu" name="nama_ortu">

        <label for="nama_kakak">Nama Kakak:</label>
        <input type="text" id="nama_kakak" name="nama_kakak">

        <label for="nama_adik">Nama Adik:</label>
        <input type="text" id="nama_adik" name="nama_adik">

        <div class="button-group">
          <button type="submit">Kirim</button>
          <button type="reset">Batal</button>
        </div>
      </form>
    </section>

    <?php

?>
    <section id="about">
      <section id="about">
    <section id="about">
      <h2>Tentang Saya</h2>
      <div class="about-container">
        <p><strong>NIM:</strong> <?php  ; ?></p>
        <p><strong>Nama Lengkap:</strong> <?php  ; ?></p>
        <p><strong>Tempat Lahir:</strong> <?php  ; ?></p>
        <p><strong>Tanggal Lahir:</strong> <?php ; ?></p>
        <p><strong>Hobi:</strong> <?php ; ?></p>
        <p><strong>Pasangan:</strong> <?php ; ?></p>
        <p><strong>Pekerjaan:</strong> <?php ; ?></p>
        <p><strong>Nama Orang Tua:</strong> <?php; ?></p>
        <p><strong>Nama Kakak:</strong> <?php ; ?></p>
        <p><strong>Nama Adek:</strong> <?php  ?></p>
      </div>
    </section>

</section>


    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>

    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>