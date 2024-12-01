<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DATA PLAYERS</title>
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
                        <li><a href="../players/index.php">Data players</a></li>
                        <li><a href="../games/index.php">Data game</a></li>
                    </ul>    

              
    <h2>Data PLAYERS</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>

        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>USERNAME</th>
                <th>EMAIL</th>

                <th><a href="tambah_players.php">Tambah Data</a></th>
</tr>
</thead>
<tbody>
    <?php
    $no = 1;
    $query = $db->query("SELECT * FROM players");
    while ($players = $query->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $players['username'] ?></td>
        <td><?php echo $players ['email'] ?></td> 
        <td align="center">
        <a href="edit_players.php?id=<?php echo $players['player_id'] ?>">Edit</a>
        <a onclick="return confirm('Anda yakin ingin menghapus data?')"href="hapus_players.php?id=<?php echo $players ['player_id'] ?>">Hapus</a>
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
