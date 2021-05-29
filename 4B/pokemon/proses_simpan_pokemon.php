<?php 
	include 'koneksi.php';

	$name = $_POST['name'];
	$str = $_POST['str'];
	$def = $_POST['def'];
	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];

	$fotobaru = date('dmYHis').$photo;

	$path = "images/".$fotobaru;

	if (move_uploaded_file($tmp, $path)) {
		$sql = $pdo->prepare("INSERT INTO pokemon_tb(name, str, def, photo) VALUES(:name, :str, :def, :photo)");
		$sql->bindParam(':name', $name);
		$sql->bindParam(':str', $str);
		$sql->bindParam(':def', $def);
		$sql->bindParam(':photo', $fotobaru);
		$sql->execute();

		if ($sql) {
			header("location: index.php");
		} else {
			echo "Maaf, terjadi kesalahan saat melakukan input data";
			echo "<br><a href='simpan_pokemon.php'>Kembali Ke Form</a> ";
		}
	}else{
		echo "Maaf, Gambar gagal di upload";
		echo "<br><a href='simpan_pokemon.php'>Kembali ke form</a>";
	}
 ?>