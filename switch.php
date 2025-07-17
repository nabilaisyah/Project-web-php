<!DOCTYPE html>
<html>
<head>
    <title>switch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background-color: #d1dbe4;
        }

        .navbar {
            background-color: #194a7a !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .nav-link.active {
            color: white !important;
            font-weight: 500;
        }

        .header {
            background: linear-gradient(90deg, #7593af, #5d7894);
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .content-box {
            background-color: white;
            max-width: 800px;
            margin: 0 auto 60px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            font-size: 18px;
        }

        pre {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            font-size: 16px;
            overflow-x: auto;
        }

        h4 {
            font-weight: 600;
            margin-top: 30px;
        }

        hr {
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="daftartugas.php">Daftar Tugas Latihan PBW2</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="header">
        <h1>Switch</h1>
    </div>

    <div class="content-box">
        <h4>Hasil Output:</h4>
        <p>
            <?php
                $i = 1; // Pastikan variabel $i sudah dideklarasikan dengan nilai tertentu
                // Percabangan dengan switch
                switch ($i) {
                    case 0:
                        echo "i sama dengan 0<br>";
                        break;
                    case 1:
                        echo "i sama dengan 1<br>";
                        break;
                    case 2:
                        echo "i sama dengan 2<br>";
                        break;
                }
             ?>
        </p>
       <hr>

        <h4>Kode PHP yang digunakan:</h4>
        <pre>
&lt;?php
$i = 1; 
switch ($i) {
  case 0:echo "i sama dengan 0";
    break;
  case 1:echo "i sama dengan 1";
    break;
  case 2:echo "i sama dengan 2";
    break;}
    ?&gt;
        </pre>

    </div>

</body>
</html>
