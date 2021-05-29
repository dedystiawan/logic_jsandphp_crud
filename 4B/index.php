<!DOCTYPE html>
<html>
<head>
    <title>Pokemon</title>
</head>
<body>
    <h1>Data Pokemon</h1>
    <a href="pokemon/data_pokemon.php">Tambah Data Pokemon</a>
    <a href="simpan_elemen.php">Tambah Data Elemen</a>
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Karakter</th>
            <th>Strength</th>
            <th>Defence</th>
            <th>Elemen</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php  
        include "koneksi.php";

        $sql = $pdo->prepare("SELECT pokemon_tb.*, element_tb.* FROM pokemon_tb JOIN detail_pokemon 
        ON pokemon_tb.id=detail_pokemon.id_pokemon JOIN element_tb 
        ON detail_pokemon.id_element=element_tb.id");
        $sql->execute();

        while($data = $sql->fetch()){
        echo "<tr>";
        echo "<td><img src='images/".$data['photo']."' width='100' height='100'></td>";
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['str']."</td>";
        echo "<td>".$data['def']."</td>";
        echo "<td>".$data['name_element']."</td>";
        echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
        echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
        echo "</tr>";
        }
        ?>
    </table>
</body>
</html>