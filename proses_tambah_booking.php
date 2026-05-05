<?php
session_start();
include 'koneksi.php';

if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $whatsapp = $_POST['whatsapp'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $tanggal_event = $_POST['tanggal_event'];
    $paket = $_POST['paket'];
    $addons = $_POST['addons'];

    $query = mysqli_query($conn, "INSERT INTO bookings (nama, instansi, whatsapp, jumlah_peserta, tanggal_event, paket, addons) 
    VALUES ('$nama', '$instansi', '$whatsapp', '$jumlah_peserta', '$tanggal_event', '$paket', '$addons')");

    if($query) {
        header("Location: admin.php");
    } else {
        echo "Gagal nambahin data: " . mysqli_error($conn);
    }
}
?>