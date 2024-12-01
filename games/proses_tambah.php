<?php

session_start();

include("../koneksi.php");

if(isset($_POST['simpan'])){
    $nama_game = $_POST['nama_game'];
    $genre = $_POST['genre'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO games
    (nama_game, genre, harga)
    VALUES ('$nama_game','$genre','$harga')";
    

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
    }
    header('Location: index.php');
} else {
    die("akses ditolak");
}
