<!DOCTYPE html>
<html>
    <head>
        <title>GAMES FADIL</title>
</head>
<body>
    <h3>Tambah Data GAME</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
<tr>
    <td>NAMA GAME</td>
    <td><input type="text" name="nama_game" required></td>
</tr>
<tr>
    <td>GENRE</td>
    <td>
                    <select name="genre" style="width: 100%" required>
                        <option value="" selected disabled>Pilih Genre</option>
                        <option value="Action">Action</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Horror">Horror</option>
                        <option value="RPG">RPG</option>
                        <option value="Shooter">Shooter</option>
                    </select>
                </td>
</tr>
<tr>
    <td>HARGA</td>
    <td><input type="text" name="harga" required>
</td>

</table>
<button type="submit" name="simpan">Simpan</button>

