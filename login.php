<?php
session_start();
include 'koneksi.php';

if(isset($_SESSION['admin_logged_in'])) {
    header("Location: admin.php");
    exit;
}

$error = '';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    
    if(mysqli_num_rows($query) > 0) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = 'Username atau Password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Wulubung Hill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style2.css">
    <style>
        body {
            background: linear-gradient(135deg, var(--primary-mid), var(--primary-dark));
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: var(--white);
            border-radius: 1.5rem;
            padding: 3rem; /* Ini yang bikin lega (jarak dari pinggir) */
            width: 100%;
            max-width: 400px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2); /* Tambahin bayangan dikit biar cakep */
        }
        .login-logo {
           
            font-size: 2rem;
            font-weight: 900;
            color: var(--primary-dark);
            text-align: center;
            
        }
        .login-logo span { color: var(--accent); }
        .form-control {
            padding: 0.8rem 1rem; 
            border-radius: 0.8rem;
            background: var(--earth-light);
            border: 1px solid rgba(0,0,0,0.1);
        }
        
        .btn-login {
            background: var(--accent);
            color: var(--white);
            padding: 0.8rem; 
            border-radius: 0.8rem;
            font-weight: 700;
            width: 100%;
            border: none;
            transition: transform 0.2s;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(229,154,47,0.3);
        }   
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-logo">Wulu<span>bung</span></div>
        <p class="text-center text-muted mb-4">Silakan login untuk masuk ke panel admin.</p>
        
        <?php if($error): ?>
            <div class="alert alert-danger text-center py-2" style="font-size: 0.85rem; border-radius: 0.5rem;">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label fw-bold" style="font-size: 0.85rem; color: var(--primary-mid);">Username</label>
                <input type="text" name="username" class="form-control" required placeholder="Masukkan username">
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold" style="font-size: 0.85rem; color: var(--primary-mid);">Password</label>
                <input type="password" name="password" class="form-control" required placeholder="Masukkan password">
            </div>
            <button type="submit" name="login" class="btn-login">Login Masuk</button>
        </form>
        
    </div>

</body>
</html>