<?php
session_start();

// Cek apakah admin sudah login
if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM bookings ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Wulubung Hill</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style2.css">

    <style>
        body {
            background-color: var(--earth-light);
        }

        .admin-hero {
            background: linear-gradient(135deg, var(--primary-mid), var(--primary-dark));
            padding: 8rem 0 5rem;
            color: white;
            margin-bottom: -3rem;
        }

        .table-custom {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 12px 40px var(--shadow);
        }

        .table-custom thead {
            background-color: var(--primary-dark);
            color: white;
        }

        .table-custom thead th {
            padding: 1.2rem 1rem;
            font-size: 0.85rem;
            text-transform: uppercase;
            border: none;
        }

        .table-custom tbody td {
            padding: 1rem;
            vertical-align: middle;
        }

        .table-custom tbody tr:hover {
            background-color: rgba(229,154,47,0.05);
        }

        .btn-edit {
            background: #0d6efd;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.6rem;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: bold;
            margin-right: 0.4rem;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.6rem;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            color: white;
            opacity: 0.9;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="form-nav">
    <a href="index.php" class="nav-logo">Wulu<span>bung</span></a>

    <div class="d-flex align-items-center gap-3">
        <a href="index.php" class="nav-back text-decoration-none">
            Lihat Website
        </a>

        <a href="logout.php" class="btn btn-danger btn-sm rounded-pill px-3 fw-bold">
            Logout
        </a>
    </div>
</nav>

<!-- HERO -->
<div class="admin-hero">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3">

            <div>
                <div class="section-label" style="color: var(--accent);">
                    Manajemen Reservasi
                </div>

                <h1 class="font-playfair fw-bold">
                    Data Booking Masuk
                </h1>

                <p style="color: rgba(255,255,255,0.7);">
                    Kelola seluruh data reservasi pelanggan di sini.
                </p>
            </div>

            <a href="tambah_booking.php"
               class="btn text-white fw-bold px-4 py-2"
               style="background-color: var(--accent); border-radius: 0.8rem;">
                Tambah Reservasi
            </a>

        </div>
    </div>
</div>

<!-- TABEL -->
<div class="container position-relative" style="padding-bottom: 6rem;">

    <div class="table-custom">
        <div class="table-responsive">

            <table class="table table-hover mb-0">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>WhatsApp</th>
                        <th>Tanggal Event</th>
                        <th>Paket</th>
                        <th>Peserta</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                <?php while($row = mysqli_fetch_assoc($result)) { ?>

                    <tr>

                        <td>
                            #<?= $row['id']; ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($row['nama']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($row['instansi']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($row['whatsapp']); ?>
                        </td>

                        <td>
                            <?= $row['tanggal_event']; ?>
                        </td>

                        <td>
                            <?= $row['paket']; ?>
                        </td>

                        <td>
                            <?= $row['jumlah_peserta']; ?> Pax
                        </td>

                        <td>

                            <!-- EDIT -->
                            <a href="edit_booking.php?id=<?= $row['id']; ?>"
                               class="btn-edit">
                               Edit
                            </a>

                            <!-- DELETE -->
                            <a href="hapus_booking.php?id=<?= $row['id']; ?>"
                               class="btn-delete"
                               onclick="return confirm('Yakin ingin menghapus data ini?')">
                               Hapus
                            </a>

                        </td>

                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>
    </div>
</div>

</body>
</html>