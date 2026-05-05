<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Booking Manual - Wulubung Hill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
                        <h4 class="mb-0 font-playfair fw-bold">Tambah Reservasi Manual</h4>
                        <p class="mb-0 text-white-50 small">Input data klien yang melakukan booking melalui WhatsApp/Telepon.</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5">
                        <form action="proses_tambah_booking.php" method="POST">
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-muted small">Nama Klien</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label class="form-label fw-bold text-muted small">Instansi / Perusahaan</label>
                                    <input type="text" name="instansi" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-muted small">Nomor WhatsApp</label>
                                    <input type="text" name="whatsapp" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label class="form-label fw-bold text-muted small">Jumlah Peserta (Pax)</label>
                                    <input type="number" name="jumlah_peserta" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-muted small">Tanggal Event</label>
                                    <input type="date" name="tanggal_event" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label class="form-label fw-bold text-muted small">Pilihan Paket</label>
                                    <select name="paket" class="form-select" required>
                                        <option value="BeFun">Paket BeFun</option>
                                        <option value="BeHappy">Paket BeHappy</option>
                                        <option value="BeBetter">Paket BeBetter</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold text-muted small">Add-ons (Fasilitas Tambahan)</label>
                                <input type="text" name="addons" class="form-control" placeholder="Contoh: Coffee Break, Dokumentasi">
                            </div>

                            <hr class="mb-4">

                            <div class="d-flex gap-2 justify-content-end">
                                <a href="admin.php" class="btn btn-light fw-bold px-4">Batal</a>
                                <button type="submit" name="tambah" class="btn text-white fw-bold px-4" style="background-color: var(--accent);">Simpan Kasus</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>