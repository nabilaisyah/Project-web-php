<!DOCTYPE html>
<html>
<head>
    <title>Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #d1dbe4);
            min-height: 100vh;
            color: #2d3436;
        }

        .header {
            background: linear-gradient(90deg, #7593af);
            color: white;
            padding: 40px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .profile-container {
            background: linear-gradient(135deg, #e3f2fd, #cfd8dc); /* biru muda ke abu lembut */
            max-width: 850px;
            margin: auto;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            border-radius: 15px;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 35px;
        }

        .profile-photo {
            flex: 0 0 180px;
            height: 180px;
            background: url(fotoktm.jpg) center/cover no-repeat;
            border-radius: 10px;
            margin-right: 35px;
            border: 3px solid #004343;
        }

        .profile-info {
            flex: 1;
        }

        .profile-info h1 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
            color: #004343;
        }

        .profile-info p {
            margin: 10px 0;
            font-size: 16px;
        }

        .label {
            font-weight: 600;
            color: #004343;
        }

        .navbar {
            box-shadow: 0 2px 8px #194a7a;
            background-color: #194a7a;
        }

        .btn-danger {
            background-color: #004343;
            border: none;
        }

        .nav-link.active {
            font-weight: 500;
            color: #ffffff !important;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
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
    <div class="header">
        <h1>Data Diri Mahasiswa</h1>
    </div>

    <!-- Profile Section -->
    <div class="profile-container">
        <div class="profile-photo"></div>
        <div class="profile-info">
            <?php
            $npm = "230157201057";
            $nama = "Nabila Nur Aisyah";
            $jurusan = "Sistem Informasi";
            $matakuliah = "Pemograman Berbasis Web 2";
            $kelas = "4PSI2";

            echo "<h1>$nama</h1>";
            echo "<p><span class='label'>NPM</span><span class='value'>: $npm</span></p>";
            echo "<p><span class='label'>Jurusan</span><span class='value'>: $jurusan</span></p>";
            echo "<p><span class='label'>Mata Kuliah</span><span class='value'>: $matakuliah</span></p>";
            echo "<p><span class='label'>Kelas</span><span class='value'>: $kelas</span></p>";
        ?>
        </div>
    </div>

</body>
</html>
