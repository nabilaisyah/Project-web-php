<?php
// mulai sesi
session_start();

// jika belum login, arahkan ke login.php
if(!isset($_SESSION['login_user'])) {
  header("location: login.php");
  exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background-color: #d1dbe4; 
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
      }

      .navbar {
        background-color: #194a7a !important; /* biru tua */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }

      .nav-link.active {
        color: #ffffff !important;
        font-weight: 500;
      }

      .btn-danger {
        background-color: #004343;
        border: none;
      }

      .header {
        background: linear-gradient(90deg, #7593af, #5d7894); /* gradasi */
        padding: 50px 0;
        color: white;
        text-align: center;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      .profile-photo {
        width: 250px; /* Ukuran gambar */
        height: auto;
        display: block;
        margin: 0 auto 40px auto;
        border-radius: 10px;
        border: 3px solid #004343;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      }
    </style>
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="welcome.php">Data Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="daftartugas.php">Daftar Tugas Latihan PBW2</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="logout.php" class="btn btn-danger">Logout</a>
          </form>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div class="header">Selamat Datang di Tugas Latihan PBW2</div>

    <!-- Gambar Komputer -->
    <div class="container">
      <img src="komputer.jpg" alt="Setup Komputer" class="profile-photo">
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
