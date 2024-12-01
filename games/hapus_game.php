<?php
session_start();
include("../koneksi.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM games WHERE game_id = $id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal dihapus!";
    }

    header('Location: index.php');
} else {

    die("Akses ditolak");
}
?>
