<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .chart-container {
      width: 80%;
      margin: 0 auto;
      padding: 20px;
      background: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    canvas {
      max-width: 100%;
    }
  </style>
</head>
<body>
  <header>
    <h1>Chart</h1>
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
    <div class="chart-container">
      <h2>Grafik Pengalaman Kerja</h2>
      <canvas id="experienceChart"></canvas>
    </div>
  </section>

  <script>
    // Data untuk chart
    const ctx = document.getElementById('experienceChart').getContext('2d');
    const experienceChart = new Chart(ctx, {
      type: 'bar', // Jenis grafik: bar, line, pie, dll.
      data: {
        labels: ['Restoran Sugoiiyaki', 'Freelance UI/UX', 'Livestream TikTok', 'Asisten Lab'],
        datasets: [{
          label: 'Durasi (Tahun)',
          data: [3, 3, 1, 0.5], // Data durasi kerja
          backgroundColor: [
            'rgba(75, 192, 192, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
            'rgba(75, 192, 192, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

  <footer>
    <p>&copy; 2024 Windy Destiny Tarmidi</p>
  </footer>
</body>
</html>
