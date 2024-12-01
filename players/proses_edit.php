<?php 

session_start(); 
include("../koneksi.php");


if (isset($_POST['simpan'])) {
    
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    
    $sql = "UPDATE players SET
        username='$username',
        email='$email'
        WHERE player_id=$id";

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