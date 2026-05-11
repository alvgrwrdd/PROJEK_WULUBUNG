<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM bookings WHERE id='$id'");

    if($query){
        header("Location: admin.php");
        exit;
    } else {
        echo "Gagal menghapus data";
    }
}
?>