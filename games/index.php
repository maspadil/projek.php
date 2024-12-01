<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DATA GAME</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
            .navbar {
                display: flex;
                flex-direction: column;
            }
            </style>
</head>
<body>
                <ul class="navlist">
                        <li><a href="index.php">Data game</a></li>
                        <li><a href="../players/index.php">Data players</a></li>
                    </ul>    

    <h2>Data GAME</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>

        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>NAMA GAME</th>
                <th>GENRE</th>
                <th>HARGA</th>
                <th><a href="tambah_game.php">Tambah Data</a></th>
</tr>
</thead>
<tbody>
    <?php
    $no = 1;
    $query = $db->query("SELECT * FROM games");
    while ($games = $query->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $games['nama_game'] ?></td>
        <td><?php echo $games ['genre'] ?></td>
        <td><?php echo $games ['harga'] ?></td>
        <td align="center">
        <a href="edit_game.php?id=<?php echo $games['game_id'] ?>">Edit</a>
        <a onclick="return confirm('Anda yakin ingin menghapus data?')"href="hapus_game.php?id=<?php echo $games ['game_id'] ?>">Hapus</a>
        </td>
        </tr>
        <?php
}
        ?>
        </tbody>
        </table>
        <p>Total : <?php echo mysqli_num_rows($query) ?></p>
        </body
        </html>
