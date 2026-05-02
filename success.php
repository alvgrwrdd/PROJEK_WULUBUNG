<?php
include 'koneksi.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Ambil data booking terakhir
$query = mysqli_query($conn, "SELECT * FROM bookings WHERE id = '$id'");
$d = mysqli_fetch_assoc($query);

// Jika tidak ada id, redirect ke form booking
if (!$d) {
    header("Location: index.php");
    exit();
}

// Format Pesan WhatsApp
$wa_admin = "6281234567890"; // Ganti dengan nomor WA Admin Wulubung
$pesan_wa = "Halo Admin Wulubung,%0A%0ASaya telah melakukan booking melalui website.%0A*Nama:* ".$d['nama']."%0A*Instansi:* ".$d['instansi']."%0A*Paket:* ".$d['paket']."%0A*Jumlah Peserta:* ".$d['jumlah_peserta']." pax%0A*Tanggal Event:* ".$d['tanggal_event']."%0A*Addons:* ".$d['addons']."%0A%0AMohon info lebih lanjut. Terima kasih!";
$wa_url = "https://wa.me/".$wa_admin."?text=".$pesan_wa;

// Fungsi tglIndo jika belum terdefinisikan secara global
function tglIndo($tanggal){
    $bulan = array (1 => 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking Berhasil — Wulubung Hill</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
  
  <!-- Tambahkan link ini -->
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body class="success-body">

<a href="index.php" class="success-logo">Wulu<em>bung</em></a>

<div class="success-card">
  <div class="success-icon-wrap">🎉</div>
  <div class="success-badge">✓ Booking Terkirim</div>
  <h1 class="success-title">Booking Request<br>Submitted!</h1>
  <p class="success-sub">
    Terima kasih, <strong><?= htmlspecialchars($d['nama']) ?></strong>!
    Permintaan booking Anda telah kami terima. Tim Wulubung Hill akan menghubungi Anda
    via WhatsApp dalam <strong>1×24 jam</strong>.
  </p>

  <div class="success-detail-box">
    <div class="success-row">
      <span class="success-dl">Nama</span>
      <span class="success-dv"><?= htmlspecialchars($d['nama']) ?></span>
    </div>
    <div class="success-row">
      <span class="success-dl">Instansi</span>
      <span class="success-dv"><?= htmlspecialchars($d['instansi']) ?></span>
    </div>
    <div class="success-row">
      <span class="success-dl">WhatsApp</span>
      <span class="success-dv"><?= htmlspecialchars($d['whatsapp']) ?></span>
    </div>
    <div class="success-row">
      <span class="success-dl">Peserta</span>
      <span class="success-dv"><?= (int)$d['jumlah_peserta'] ?> orang</span>
    </div>
    <div class="success-row">
      <span class="success-dl">Tanggal</span>
      <span class="success-dv"><?= tglIndo($d['tanggal_event']) ?></span>
    </div>
    <div class="success-row">
      <span class="success-dl">Paket</span>
      <span class="success-dv"><?= htmlspecialchars($d['paket']) ?></span>
    </div>
    <div class="success-row">
      <span class="success-dl">Add-ons</span>
      <span class="success-dv"><?= empty($d['addons']) ? '—' : htmlspecialchars($d['addons']) ?></span>
    </div>
    <?php if ($d['notes']): ?>
    <div class="success-row">
      <span class="success-dl">Catatan</span>
      <span class="success-dv" style="font-weight:400"><?= nl2br(htmlspecialchars($d['notes'])) ?></span>
    </div>
    <?php endif; ?>
  </div>

  <a href="<?= htmlspecialchars($wa_url) ?>" target="_blank" class="btn-wa">
    💬 Chat Admin via WhatsApp
  </a>
  <a href="index.php" class="btn-home">← Kembali ke Halaman Utama</a>


</div>

</body>
</html>