<!DOCTYPE html>
<html>
<head>
    <title>Pokemon</title>
</head>
<body>
    <h1>Data Pokemon</h1>
    <a href="simpan_pokemon.php">TambahPokemon</a>
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Karakter</th>
            <th>Strength</th>
            <th>Defence</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php  
        include "koneksi.php";

        $sql = $pdo->prepare("SELECT * FROM pokemon_tb");
        $sql->execute();

        while($data = $sql->fetch()){
        echo "<tr>";
        echo "<td><img src='images/".$data['photo']."' width='100' height='100'></td>";
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['str']."</td>";
        echo "<td>".$data['def']."</td>";
        echo "<td><a href='pokemon/form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
        echo "<td><a href='pokemon/proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
        echo "</tr>";
        }
        ?>
    </table>
</body>
</html>