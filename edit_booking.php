<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM bookings WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if(!$data) {
    header("Location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking - Wulubung Hill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body style="background-color: var(--earth-light);">

    <nav class="form-nav">
        <a href="index.php" class="nav-logo">Wulu<span>bung</span></a>
        <a href="admin.php" class="nav-back text-decoration-none" style="color: rgba(255,255,255,0.7);">← Kembali ke Panel Admin</a>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="card border-0 shadow-lg" style="border-radius: 1.5rem; overflow: hidden;">
                    <div class="card-header border-0 text-white p-4" style="background: linear-gradient(135deg, var(--primary-mid), var(--primary-dark));">
                        <h4 class="mb-0" style="font-family: 'Playfair Display', serif; font-weight: 700;">Edit Data Reservasi #<?= $data['id'] ?></h4>
                        <p class="mb-0 text-white-50" style="font-size: 0.85rem;">Perbarui informasi booking klien jika ada perubahan jadwal atau paket.</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5">
                        <form action="update_booking.php" method="POST">
                            
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-muted small">Nama Klien</label>
                                    <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama']) ?>" required>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label class="form-label fw-bold text-muted small">Instansi / Perusahaan</label>
                                    <input type="text" name="instansi" class="form-control" value="<?= htmlspecialchars($data['instansi']) ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-muted small">Nomor WhatsApp</label>
                                    <input type="text" name="whatsapp" class="form-control" value="<?= htmlspecialchars($data['whatsapp']) ?>" required>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label class="form-label fw-bold text-muted small">Jumlah Peserta (Pax)</label>
                                    <input type="number" name="jumlah_peserta" class="form-control" value="<?= $data['jumlah_peserta'] ?>" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-muted small">Tanggal Event</label>
                                    <input type="date" name="tanggal_event" class="form-control" value="<?= $data['tanggal_event'] ?>" required>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label class="form-label fw-bold text-muted small">Pilihan Paket</label>
                                    <select name="paket" class="form-select" required>
                                        <option value="BeFun" <?= ($data['paket'] == 'BeFun') ? 'selected' : '' ?>>Paket BeFun</option>
                                        <option value="BeHappy" <?= ($data['paket'] == 'BeHappy') ? 'selected' : '' ?>>Paket BeHappy</option>
                                        <option value="BeBetter" <?= ($data['paket'] == 'BeBetter') ? 'selected' : '' ?>>Paket BeBetter</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold text-muted small">Add-ons (Fasilitas Tambahan)</label>
                                <input type="text" name="addons" class="form-control" value="<?= htmlspecialchars($data['addons']) ?>">
                                <div class="form-text" style="font-size: 0.75rem;">Edit dipisahkan dengan koma. Contoh: Paint Ball, Coffee Break</div>
                            </div>

                            <hr class="mb-4">

                            <div class="d-flex gap-2 justify-content-end">
                                <a href="admin.php" class="btn btn-light fw-bold px-4">Batal</a>
                                <button type="submit" name="update" class="btn text-white fw-bold px-4" style="background-color: var(--accent);">Simpan Perubahan</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>