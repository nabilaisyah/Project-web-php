<!DOCTYPE html>
<html>
<head>
    <title>Break</title>
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
        <h1>Break</h1>
    </div>

    <div class="content-box">
        <h4>Hasil Output:</h4>
        <p>
            <?php
                for ($i=1;$i<=10;$i++) //Perulangan dimulai dari 1 hingga maksimal 10
                { 
                if ($i==6) //Tapi saat $i mencapai 6, perulangan dihentikan dengan break
                break; 
                echo $i ." "; //Maka hanya angka 1 sampai 5 yang dicetak
                } 
                echo "Akhir pengulangan"; //mencetak tulisan "Akhir pengulangan"
                ?>
        </p>
       <hr>

        <h4>Kode PHP yang digunakan:</h4>
        <pre>
&lt;?php
for ($i=1;$i<=10;$i++) 
{ 
if ($i==6) 
break; 
echo $i ." "; 
} 
echo "Akhir pengulangan"; 
?&gt;
        </pre>

    </div>

</body>
</html>
