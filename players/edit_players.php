<?php

include("../koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM players WHERE player_id = '$id'");
$players = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit PLAYER</title>
</head>
<body>
    <h3>Edit player</h3>
    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $players['player_id']; ?>">
    <table border="0">
        <tr>
            <td>NAMA PLAYER</td>
            <td>
                <input type="text" name="username" value="<?php echo $players['username']; ?>" required>
</td>
</tr>
<tr>
            <td>EMAIL</td>
            <td>
                <input type="text" name="email" value="<?php echo $players['email']; ?>" required>
</td>
</tr>

</tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>
