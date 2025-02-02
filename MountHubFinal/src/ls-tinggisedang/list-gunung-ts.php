<?php
session_start();  // Pastikan session dimulai

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    // Jika belum login, arahkan ke halaman login
    header('Location: ../../index.php');
    exit();  // Pastikan tidak ada kode lain yang dieksekusi setelah redirect
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
      <a class="navbar-brand" href="../../home.php">MountHub</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                About
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../about/info-mounthub.php">Apa itu MountHub!</a></li>
                <li><a class="dropdown-item" href="../about/donasi.php">Donasi</a></li>
                <li><a class="dropdown-item" href="../about/hubungi.php">Hubungi</a></li>
                <li><a class="dropdown-item" href="../about/privacy.php">Privacy Police</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Ribu Categories
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../ls-sangattinggi/list-gunung-st.php">Sangat Tinggi</a></li>
                <li><a class="dropdown-item" href="../ls-tinggisedang/list-gunung-ts.php">Tinggi Sedang</a></li>
                <li><a class="dropdown-item" href="../ls-kurangtinggi/list-gunung-kt.php">Kurang Tinggi</a></li>
                <li><a class="dropdown-item" href="../ls-special/list-gunung-s.php">Special</a></li>
              </ul>
              <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              Produk
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="dropdown-item"
                    href="../../products.php"
                  >
                  Tenda
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="../../Sepatu Gunung.php"
                  >
                  Sepatu Gunung
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="../../Ransel Gunung.php"
                  >
                  Ransel Gunung
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="../../Jaket Gunung.php"
                  >
                  Jaket Gunung
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="src/ls-special/list-gunung-s.php"
                  >
                  </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <section class="list-gunung pt-5">
      <div class="container custom-bg">
        <div class="infoin p-5">
          <div class="row">
            <h1 class="col-12 fs-6">
              5 puncak dengan ketinggian antara 2.000 dan 3.000 meter (dan keunggulan lebih dari 1.000 meter) di provinsi Jawa Barat<br />
              di provinsi Jawa Barat
            </h1>
          </div>

          <div class="row">
            <h2 class="fw-bold fs-4">
              Statistik dan Tautan ke Ribus Tinggi Sedang
            </h2>
            <h1 class="col-12">
              <table>
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Ketinggian</th>
                    <th>Keunggulan</th>
                    <th>Province</th>
                    <th>Propinsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="info-cikurai.php">Cikurai</a></td>
                    <td>2.821 meter persegi</td>
                    <td>2.675 meter persegi</td>
                    <td>Jawa Barat</td>
                    <td>Java</td>
                  </tr>
                  <tr>
                    <td><a href="info-papandayan.php">Papandayan</a></td>
                    <td>2.675 meter persegi</td>
                    <td>1.329 meter persegi</td>
                    <td>Jawa Barat</td>
                    <td>Java</td>
                  </tr>
                  <tr>
                    <td><a href="info-galunggung.php">Galunggung</a></td>
                    <td>2.240 meter persegi</td>
                    <td>1.262 meter persegi</td>
                    <td>Jawa Barat</td>
                    <td>Java</td>
                  </tr>
                  <tr>
                    <td><a href="info-bukit-tunggul.php">Bukittunggul</a></td>
                    <td>2.215 meter persegi</td>
                    <td>1.351 meter persegi</td>
                    <td>Jawa Barat</td>
                    <td>Java</td>
                  </tr>
                  <tr>
                    <td><a href="info-Salak.php">Salak</a></td>
                    <td>2.211 meter persegi</td>
                    <td>1.679 meter persegi</td>
                    <td>Jawa Barat</td>
                    <td>Java</td>
                  </tr>
                </tbody>
              </table>
            </h1>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container mt-5">
        <h1 class="text-light" style="font-family: 'Libre Baskerville', serif;">Gunung,<br />Petualangan Tanpa Batas.</h1>

        <div class="email">
          <img
            class="img-fluid"
            src="../../assets/img/OIP__2_-removebg-preview 1.png"
            alt=""
          />
          <h2 class="text-light fs-5 pt-1 ps-2">hubmountaint@gmail.com</h2>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
