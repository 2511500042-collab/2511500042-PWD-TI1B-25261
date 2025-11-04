<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul halaman halo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Header</h1>
        <button class="menu-toggle" id="menutoggle" aria-label="toggle Navigation">&#9776;
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
            <p>ini contoh paragraf HTML.</p>
        </section>
        <section id="about">
            <?php

            $nama = "wabihamdika &#128512";
            $nim = "2511500042";
            $tempatLahir ="babat";
            $tanggallahir ="05 november 2006";
            $hobi ="main game";
            $pasangan ="sedang di usahakan  &#128546";
            $pekerjaan ="mahasisswa";
            $namaayah ="supriadi";
            $namaibu ="ermaini";
            $namakakak ="sil,anie,anti,ardila";
            $namaadek ="-";
            ?>
            <h2>Tentang kami</h2>
            <p>
                <strong>nama :</strong>
                <?php
                echo $nama;
                ?>
              </p>
            

            <p>
               <strong>nim :</strong>
                <?php
                echo $nim;
                ?>
                </p>

            <p>
                <strong>tempatLahir :</strong>
                <?php
                echo $tempatLahir;
                ?>
                </p>

            <p>
                <strong>tanggallahir :</strong>
                <?php
                echo $tanggallahir;
                ?>
                </p>

            <p>
                <strong>hobi :</strong>
                <?php
                echo $hobi;
                ?>
                </p>

            <p>
                <strong>pasangan :</strong>
                <?php
                echo $pasangan;
                ?>
                </P>

            <p>
                <strong>pekerjaan :</strong>
                <?php
                echo $pekerjaan;
                ?>
                </P>

            <p> 
                <strong>namaayah :</strong>
                <?php
                echo $namaayah;
                ?>
            </p>
               

            <p>
                <strong>namaibu :</strong>
                <?php
                echo $namaibu;
                ?>
                </p>

            <p>
                <strong>namakakak :</strong>
                <?php
                echo $namakakak;
                ?>
                </p>

            <p>
                <strong>namaadik :</strong>
                <?php
                echo $namaadek;
                ?>
                </P>


        </section>
        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="GET">

                <label for="TxtNama">
                    <span>Nama:</span>
                    <input type="text" id="TxtNama" name="TxtNama" placeholder="Masuk Nama" required
                        autocomplete="name">
                </label>

                <label for="Txtemail">
                    <span>Email:</span>
                    <input type="Email" id="texemail" placeholder="Masuk email" required autocomplete="email">
                </label>

                <label for="Txtpesan">
                    <span>Pesan:</span>
                    <textarea id="Txtpesan" name="Txtpesan" Rows="4" placeholder="Tulis Pesan Anda..."
                        required></textarea>
                </label>

                <button Type="Submit">Kirim</button>
                <button Type="Reset">Batal</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 wabihamdika [2511500042]</p>
    </footer>

    <script src="script.js"></script>

</body>

</html>