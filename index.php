<?php
include 'config.php';

$result = $conn->query("SELECT * FROM peminjaman");

?>
<html>
<head>
  <title>TATA USAHA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ponnala&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="ukk.css">
</head>

<body>
  <header>
    <div class="header-container">
      <div class="profile-picture">
        <img src="smk6.jpg">
        <h4>ProdjostServe</h4>
      </div>
      <nav class="navbar">
        <ul>
          <li><a href="#">Home</a></li>
          <li><label for="toggle"><a href="#" id="btn">Profile</a></label></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <input type="checkbox" id="toggle">
  <div class="overlay">
    <div class="overlay-content">
      <i class="fa-solid fa-x">
        <input type="checkbox" id="un"></i>
      <h2>Profile</h2>
      <img src="smk6.jpg">
      <h4>SMK Pusat Keunggulan</h4>
      <h4>Jakarta Selatan</h4>
    </div>
  </div>
  <div class="container">
    <div class="stats">
      <div class="card">
        <div class="card1">
          <h3 id="total-barang" >134</h3>
          <p>Total Barang</p>
          <div class="arrow arrow-up">
            <i class="fas fa-arrow-up"></i>
            <span id="total-barang-persen">100%</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card2">
          <h3 id="barang-on-process" >21</h3>
          <p>Barang On Process</p>
          <div class="arrow arrow-down">
            <i class="fas fa-arrow-down"></i>
            <span id="barang-on-process-persen">14%</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card3">
          <h3 id="barang-done">128</h3>
          <p>Barang Done</p>
          <div class="arrow arrow-down">
            <i class="fas fa-arrow-down"></i>
            <span id="barang-done-persen">80%</span>
          </div>
        </div>
      </div>
      <div class="card">
        <h3 id="barang-hilang">2</h3>
        <p>Barang Hilang</p>
        <div class="arrow arrow-down">
          <i class="fas fa-arrow-down"></i>
          <span id="barang-hilang-persen">1%</span>
        </div>
      </div>
    </div>
    <div class="order-list">
      <div class="tanggal">
        <button>
          <i class="fas fa-calendar-alt"></i>
          Tanggal & Waktu
        </button>
      </div>
      <h2>Order List</h2>
      <p>Melihat Memantau serta Mengelola Barang Yang di Pinjam di TU</p>
      <table>
        <thead>
          <tr>
            <th>PRODJOST ID</th>
            <th>TANGGAL</th>
            <th>NAMA</th>
            <th>KEPERLUAN</th>
            <th>NAMA BARANG</th>
            <th>JUMLAH</th>
            <th>STATUS</th>
          </tr>
        </thead>
        <tbody>
        <a href="tambah.php" style="text-decoration: none;">
    <button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
        Tambah Data
    </button>
</a>
        <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= '#PRDJ' . $row['id']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['nama_siswa']; ?></td>
                    <td><?= $row['keperluan']; ?></td>
                    <td><?= $row['nama_barang']; ?></td>
                    <td><?= $row['jumlah_barang']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                        <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
<script>document.getElementById('un').onclick = function () {
    const overlay = document.querySelector('.overlay');
    overlay.style.display = this.checked ? 'none' : 'block';
  };
  
  </script>

</html>