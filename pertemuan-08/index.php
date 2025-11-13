<?php
session_start();

$sesnama = "";
if (isset($_SESSION["wabihamdika"])):
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
       <section id="entry-data">
      <h2>entry data MAHASISWA</h2>
      <form action="proses_mahasiswa.php" method="POST">

        <label for="txtNamaMhs"><span>NIM:</span>
          <input type="text" id="txtNamaMhs" name="txtNamaMhs" placeholder="Masukkan NIM.." required>
        </label>

        <label for="txtNIM"><span>NIM:</span>
          <input type="text" id="txtNIM" name="txtNIM" placeholder="Masukkan Nama lengkap" required>
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
 <section id="about">
            <?php
            $nama = "wabihamdika &#128526";
            $nim = "2511500042";
            $tempat_lahir = "babat👌";
            $tanggal_lahir = "05 november 2006😊";
            $hobi = "Main game👾";
            $pasangan = "hts😒";
            $pekerjaan = "MAHASISWA";
            $orang_tua = "supriadi dan ermaini😍";
            $kakak = "sil,anie,anti,ardila👍";
            $adik = "-";
            ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $nim 
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo  $nama
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo  $tempat_lahir; ?></p>
      <p><strong>Tanggal Lahir:</strong> <?php echo  $tanggal_lahir; ?> </p>
      <p><strong>Hobi:</strong> <?php echo  $hobi; ?></p>
      <p><strong>Pasangan:</strong> <?php echo $pasangan; ?></p>
      <p><strong>Pekerjaan:</strong> <?php echo $pekerjaan; ?></p>
      <p><strong>Nama Orang Tua:</strong> <?php echo $orang_tua ?></p>
      <p><strong>Nama Kakak:</strong> <?php echo $kakak ?></p>
      <p><strong>Nama Adik:</strong> <?php echo $adik ?></p>
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
    <p>&copy; Wabihamdika [2511500042]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>