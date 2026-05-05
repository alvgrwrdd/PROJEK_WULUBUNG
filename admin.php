<?php
session_start(); // Mulai session

// Cek apakah admin sudah login? Kalau belum, lempar ke login.php
if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

// Hapus Data
if(isset($_GET['delete'])) {
    $id_del = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM bookings WHERE id='$id_del'");
    header("Location: admin.php");
}

$result = mysqli_query($conn, "SELECT * FROM bookings ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Wulubung Hill</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet" />
    
    <!-- Link ke Master CSS -->
    <link rel="stylesheet" href="css/style1.css">
    
    <style>
        /* Styling Khusus Dashboard Admin */
        body { background-color: var(--earth-light); }

        .admin-hero {
            background: linear-gradient(135deg, var(--primary-mid), var(--primary-dark));
            padding: 8rem 0 5rem;
            color: var(--white);
            margin-bottom: -3rem; /* Biar tabel kelihatan numpuk ke atas */
        }
        
        .table-custom {
            background: var(--white);
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 12px 40px var(--shadow);
        }
        
        .table-custom thead {
            background-color: var(--primary-dark);
            color: var(--white);
        }
        
        .table-custom thead th {
            font-weight: 700;
            border-bottom: none;
            padding: 1.2rem 1rem;
            letter-spacing: 0.05em;
            font-size: 0.85rem;
            text-transform: uppercase;
        }
        
        .table-custom tbody td {
            padding: 1.2rem 1rem;
            vertical-align: middle;
            color: var(--text-mid);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .table-custom tbody tr:hover {
            background-color: rgba(229,154,47,0.04);
        }
        
        .btn-delete {
            background: #dc3545;
            color: white;
            border-radius: 0.6rem;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 0.5rem 1rem;
            border: none;
            text-decoration: none;
            transition: all 0.2s;
            display: inline-block;
        }
        
        .btn-delete:hover {
            background: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(220,53,69,0.3);
            color: white;
        }
    </style>
</head>
<body>

    <!-- ── NAVBAR ─────────────────────────────── -->
    <nav class="form-nav">
        <a href="index.php" class="nav-logo">Wulu<span>bung</span></a>
        <div class="d-flex align-items-center gap-4">
            <span class="text-white d-none d-md-inline fw-bold" style="font-size: 0.85rem; letter-spacing: 0.1em; color: var(--accent) !important;">ADMIN PANEL</span>
            <a href="index.php" class="nav-back text-decoration-none d-none d-md-block" style="color: rgba(255,255,255,0.7);">Lihat Website</a>
            
            <!-- TOMBOL LOGOUT -->
            <a href="logout.php" class="btn btn-sm btn-danger fw-bold rounded-pill px-3">Logout</a>
        </div>
    </nav>

    <!-- ── HEADER ADMIN ───────────────────────── -->
    <div class="admin-hero">
    <div class="container px-4">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3">
            <div>
                <div class="section-label" style="color: var(--accent);">Manajemen Reservasi</div>
                <h1 class="font-playfair fw-bold mb-2">Data Booking Masuk</h1>
                <p class="mb-0" style="color: rgba(255,255,255,0.7); font-size: 1.05rem;">Kelola semua permintaan reservasi Wulubung Hill di sini.</p>
            </div>
            <!-- TOMBOL TAMBAH BOOKING BARU -->
            <a href="tambah_booking.php" class="btn text-white fw-bold px-4 py-2" style="background-color: var(--accent); border-radius: 0.8rem; box-shadow: 0 4px 15px rgba(229,154,47,0.3);">
                Tambah Reservasi 
            </a>
        </div>
    </div>
</div>

    <!-- ── TABEL DATA ─────────────────────────── -->
    <div class="container px-4 position-relative z-2" style="padding-bottom: 7rem;">
        <div class="table-custom">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Submit</th>
                            <th>Pemohon</th>
                            <th>Instansi</th>
                            <th>WhatsApp</th>
                            <th>Jadwal Event</th>
                            <th>Paket</th>
                            <th>Pax</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class="fw-bold" style="color: var(--primary-light);">#<?= $row['id'] ?></td>
                            <td style="font-size: 0.85rem; color: var(--text-light);"><?= date('d/m/Y H:i', strtotime($row['tanggal_booking'])) ?></td>
                            <td class="fw-bold" style="color: var(--primary-dark);"><?= $row['nama'] ?></td>
                            <td><?= $row['instansi'] ? $row['instansi'] : '<span class="text-muted fst-italic">Personal</span>' ?></td>
                            <td>
                                <a <?= $row['whatsapp'] ?>" target="_blank" class="text-decoration-none d-inline-flex align-items-center gap-1" style="color: #25d366; font-weight: 700;">
                                     <?= $row['whatsapp'] ?>
                                </a>
                            </td>
                            <td class="fw-bold" style="color: var(--accent-dark);"><?= date('d/m/Y', strtotime($row['tanggal_event'])) ?></td>
                            <td>
                                <span class="badge" style="background: rgba(44,62,80,0.1); color: var(--primary-mid); padding: 0.4rem 0.6rem; font-weight:700;">
                                    <?= $row['paket'] ?>
                                </span>
                            </td>
                            <td class="fw-bold text-center"><?= $row['jumlah_peserta'] ?></td>
                            <td class="text-center">
                                <a href="edit_booking.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning fw-bold text-dark mb-1" style="border-radius: 0.6rem; padding: 0.4rem 1rem;">Edit</a>
                                <br>
                                <a href="admin.php?delete=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data booking atas nama <?= $row['nama'] ?>?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                        
                        <!-- Kalau database kosong -->
                        <?php if(mysqli_num_rows($result) == 0) { ?>
                        <tr>
                            <td colspan="9" class="text-center py-5 text-muted">
                                <div class="fs-1 mb-2">📭</div>
                                Belum ada data booking yang masuk.
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