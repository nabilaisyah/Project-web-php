<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Tugas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #d1dbe4; /* Warna latar belakang */
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    .navbar {
      background-color: #194a7a !important; /* Warna navbar biru tua */
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
      background: linear-gradient(90deg, #7593af, #5d7894); /* Gradasi biru ke abu */
      padding: 50px 0;
      color: white;
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 40px;
    }

    .container-flex {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .card-kecil {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      min-width: 180px;
      transition: transform 0.2s ease;
    }

    .card-kecil:hover {
      transform: translateY(-5px);
    }

    .btn-kecil {
      margin-top: 10px;
      background-color: #004343;
      border: none;
      font-size: 14px;
      color: white;
    }

    .btn-kecil:hover {
      background-color: #006666;
    }
  </style>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="welcome.php">Data Diri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="daftartugas.php">Daftar Tugas Latihan PBW2</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <a href="logout.php" class="btn btn-danger">Logout</a>
      </form>
    </div>
  </div>
</nav>

<div class="header">Tugas Latihan PBW 2</div>

<!-- Daftar tugas -->
<div class="container mb-5">
  <div class="container-flex">

    <!-- Tugas 1 -->
    <div class="card-kecil">
      <p class="card-text">Operator String</p>
      <a href="operatorstring.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 2 -->
    <div class="card-kecil">
      <p class="card-text">Operator Aritmatika</p>
      <a href="operatoraritmatika.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 3 -->
    <div class="card-kecil">
      <p class="card-text">IF</p>
      <a href="if.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 4 -->
    <div class="card-kecil">
      <p class="card-text">Switch</p>
      <a href="switch.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 5 -->
    <div class="card-kecil">
      <p class="card-text">While</p>
      <a href="while.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 6 -->
    <div class="card-kecil">
      <p class="card-text">Do While</p>
      <a href="dowhile.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 7 -->
    <div class="card-kecil">
      <p class="card-text">For</p>
      <a href="for.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 8 -->
    <div class="card-kecil">
      <p class="card-text">Foreach</p>
      <a href="foreach.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 9 -->
    <div class="card-kecil">
      <p class="card-text">Break</p>
      <a href="break.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 10 -->
    <div class="card-kecil">
      <p class="card-text">Continue</p>
      <a href="continue.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 11 -->
    <div class="card-kecil">
      <p class="card-text">Require</p>
      <a href="require.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

    <!-- Tugas 12 -->
    <div class="card-kecil">
      <p class="card-text">Include</p>
      <a href="include.php" class="btn btn-kecil" target="_blank">Lihat Tugas</a>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
