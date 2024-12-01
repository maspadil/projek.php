<?php

session_start();

include("../koneksi.php");

if(isset($_POST['simpan'])){
    $username = $_POST['username'];
    $email= $_POST['email'];
   

    $sql = "INSERT INTO players
    (username, email)
    VALUES ('$username','$email')";

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
