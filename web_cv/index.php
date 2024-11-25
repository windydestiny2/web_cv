<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    .profile {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-top: 20px;
    }
    .profile img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
    }
    .profile div {
      max-width: 600px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Portfolio Windy Destiny Tarmidi</h1>
    <nav>
      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="curriculumvitae.php">Curriculum Vitae</a></li>
        <li><a href="catalog.php">Catalog</a></li>
        <li><a href="chart.php">Chart</a></li>
      </ul>
    </nav>
  </header>

  <section>
    <div class="profile">
      <img src="asset/fotoprofil.jpg" alt="Foto Profil Windy Destiny Tarmidi">
      <div>
        <h2>Selamat Datang di Portfolio Saya</h2>
        <p>Halo! Saya <strong>Windy Destiny Tarmidi</strong>, seorang mahasiswi Sistem Informasi yang mandiri, mempunyai kemauan untuk mempelajari hal baru, dan bekerja keras di bawah tekanan. Saya memiliki pengalaman dalam mengelola restoran, desain UI/UX, dan pengembangan aplikasi.</p>
        <p>Hubungi saya di: 085173290889 | windy.destiny@gmail.com | <a href="https://www.linkedin.com/in/windydestiny" target="_blank">LinkedIn</a></p>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 Windy Destiny Tarmidi</p>
  </footer>
</body>
</html>
