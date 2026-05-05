<?php
session_start();

if(isset($_SESSION['admin_logged_in'])) {
    header("Location: admin.php");
    exit;
}

$error = '';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'admin' && $password === '123') {
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
    <link rel="stylesheet" href="css/style1.css">
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
            border-radius: 15px;
            padding: 3px;
            width: 100%;
            max-width: 400px;
          
        }
        .login-logo {
           
            font-size: 2rem;
            font-weight: 900;
            color: var(--primary-dark);
            text-align: center;
            
        }
        .login-logo span { color: var(--accent); }
        .form-control {

            border-radius:15px;
            background: var(--earth-light);
          
        }
        
        .btn-login {
            background: var(--accent);
            color: var(--white);
            font-weight: 700;
            width: 100%;
            border: none;
            
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
        
        <div class="text-center mt-4">
            <a href="index.php" class="text-muted text-decoration-none" style="font-size: 0.85rem;">← Kembali ke Website</a>
        </div>
    </div>

</body>
</html>