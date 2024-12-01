<?php 

session_start(); 
include("../koneksi.php");


if (isset($_POST['simpan'])) {
    
    $id = $_POST['id'];
    $nama_game = $_POST['nama_game'];
    $genre = $_POST['genre'];
    $harga = $_POST['harga'];

    
    $sql = "UPDATE games SET
        nama_game='$nama_game',
        genre='$genre',
        harga='$harga'
        WHERE game_id=$id";

        $query = mysqli_query($db, $sql);
        
        if ($query) {
            $_SESSION['nontifikasi'] = "data game berhasil diperbarui!";
        } else {
            $_SESSION['nontifikasi'] = "Data games gagal diperbarui!";
        }

        
        header('Location: index.php');
    } else {
        die("akses ditolak...");
    }
    ?>