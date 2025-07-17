<!-- LOGIKA REGISTRASI -->
<?php
include 'connections.php';
session_start();

if(isset($_SESSION['login_user'])){
    header("location: index.php");
    exit();
}

if(isset($_POST['register'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    $query = $conn->prepare("INSERT INTO tb_user (username, password) VALUES (?, ?)");
    $query->bind_param("ss", $username, $password);
    if($query->execute()) {
        $success = "Registrasi berhasil! Silakan login.";
    } else {
        $error = "Registrasi gagal, coba lagi.";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dfe6e9; /* abu muda */
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            transition: all 0.3s ease;
        }
        
        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .register-title {
            color: #004b6b;
            font-weight: bold;
            margin-bottom: 5px;
            transition: all 0.3s ease;
        }
        
        .register-title:hover {
            color: #003852;
            transform: scale(1.05);
        }
        
        .form-label {
            transition: all 0.3s ease;
        }
        
        .form-label:hover {
            color: #004b6b;
            font-weight: bold;
        }
        
        .form-control {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px;
            transition: all 0.3s ease;
        }
        
        .form-control:hover {
            border-color: #004b6b;
            background-color: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: #004b6b;
            box-shadow: 0 0 0 0.2rem rgba(0, 75, 107, 0.1);
            background-color: #ffffff;
            transform: scale(1.02);
        }
        
        .btn-custom {
            background-color: #004b6b;
            color: white;
            border-radius: 8px;
            padding: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s;
        }
        
        .btn-custom:hover::before {
            left: 100%;
        }
        
        .btn-custom:hover {
            background-color: #003852;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 75, 107, 0.4);
        }
        
        .btn-custom:active {
            transform: translateY(0px);
            box-shadow: 0 4px 12px rgba(0, 75, 107, 0.3);
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .success-message:hover {
            background-color: #c3e6cb;
            transform: scale(1.02);
        }
        
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .error-message:hover {
            background-color: #f1b0b7;
            transform: scale(1.02);
        }
        
        a {
            color: #004b6b;
            transition: all 0.3s ease;
        }
        
        a:hover {
            text-decoration: underline;
            color: #003852;
            font-weight: bold;
        }
        
        hr {
            transition: all 0.3s ease;
        }
        
        hr:hover {
            border-color: #004b6b;
            border-width: 2px;
        }
    </style>
  </head>
  <body class="vh-100 d-flex justify-content-center align-items-center">
     
    <!-- Form Registrasi -->
    <form class="form-container" method="POST">
        <div class="register-header">
            <h3 class="register-title">Form Registrasi</h3>
            <hr>
        </div>

        <?php if (isset($error)){ ?>
            <div class="error-message">
                <?php echo $error; ?>
            </div>
        <?php } elseif (isset($success)) { ?>
            <div class="success-message">
                <?php echo $success; ?>
            </div>
        <?php } ?>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-custom" name="register">Register</button>
        </div>

        <div class="text-center mt-3">
            <p>Sudah memiliki akun? <a href="login.php">Login</a></p>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>