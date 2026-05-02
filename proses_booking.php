<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama           = mysqli_real_escape_string($conn, $_POST['nama']);
    $instansi       = mysqli_real_escape_string($conn, $_POST['instansi']);
    $whatsapp       = mysqli_real_escape_string($conn, $_POST['whatsapp']);
    $tanggal_event  = mysqli_real_escape_string($conn, $_POST['tanggal_event']);
    $paket          = mysqli_real_escape_string($conn, $_POST['paket']);
    $jumlah_peserta = mysqli_real_escape_string($conn, $_POST['jumlah_peserta']);
    $addons         = mysqli_real_escape_string($conn, $_POST['addons']);
    $notes          = mysqli_real_escape_string($conn, $_POST['notes']);

    $query = "INSERT INTO bookings (nama, instansi, whatsapp, tanggal_event, paket, jumlah_peserta, addons, notes) 
              VALUES ('$nama', '$instansi', '$whatsapp', '$tanggal_event', '$paket', '$jumlah_peserta', '$addons', '$notes')";

    if (mysqli_query($conn, $query)) {
        // Ambil ID terakhir untuk dikirim ke success page
        $last_id = mysqli_insert_id($conn);
        header("Location: success.php?id=" . $last_id);
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>