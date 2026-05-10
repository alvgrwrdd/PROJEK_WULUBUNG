<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $whatsapp = $_POST['whatsapp'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $tanggal_event = $_POST['tanggal_event'];
    $paket = $_POST['paket'];
    $addons = $_POST['addons'];

    $query = mysqli_query($conn, "UPDATE bookings SET 
        nama='$nama', 
        instansi='$instansi', 
        whatsapp='$whatsapp', 
        jumlah_peserta='$jumlah_peserta', 
        tanggal_event='$tanggal_event', 
        paket='$paket', 
        addons='$addons' 
        WHERE id='$id'");

    if($query) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Wah gagal update data nih. Coba cek query-nya: " . mysqli_error($conn);
    }
}
?>