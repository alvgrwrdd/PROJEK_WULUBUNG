<?php
session_start();
include 'koneksi.php';

$pesan = '';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
    if(mysqli_num_rows($cek) > 0){
        $pesan = '<div class="alert alert-warning text-center small">Username sudah dipakai! Cari yang lain.</div>';
    } else {
        mysqli_query($conn, "INSERT INTO admin (username, password) VALUES ('$username', '$password')");
        $pesan = '<div class="alert alert-success text-center small">Berhasil daftar! Silakan <a href="login.php">Login</a>.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Admin - Wulubung Hill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { background: linear-gradient(135deg, var(--primary-mid), var(--primary-dark)); min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .login-card { background: var(--white); border-radius: 1.5rem; padding: 3rem; width: 100%; max-width: 400px; box-shadow: 0 24px 80px rgba(0,0,0,0.4); }
        .login-logo { font-family: 'Playfair Display', serif; font-size: 2rem; font-weight: 900; color: var(--primary-dark); text-align: center; margin-bottom: 2rem; }
        .login-logo span { color: var(--accent); }
        .form-control { padding: 0.8rem 1rem; border-radius: 0.8rem; background: var(--earth-light); border: 1px solid rgba(0,0,0,0.1); }
        .btn-login { background: var(--accent); color: var(--white); padding: 0.8rem; border-radius: 0.8rem; font-weight: 700; width: 100%; border: none; transition: transform 0.2s; }
        .btn-login:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(229,154,47,0.3); color: var(--white); }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-logo">Wulu<span>bung</span></div>
        <p class="text-center text-muted mb-4 small">Daftarkan akun admin baru.</p>
        
        <?= $pesan ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label fw-bold small" style="color: var(--primary-mid);">Username</label>
                <input type="text" name="username" class="form-control" required placeholder="Buat username">
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold small" style="color: var(--primary-mid);">Password</label>
                <input type="password" name="password" class="form-control" required placeholder="Buat password">
            </div>
            <button type="submit" name="register" class="btn-login">Daftar Akun</button>
        </form>
        
        <div class="text-center mt-4">
            <small>Sudah punya akun? <a href="login.php" class="text-decoration-none" style="color: var(--accent); font-weight: bold;">Login di sini</a></small>
        </div>
    </div>
</body>
</html>