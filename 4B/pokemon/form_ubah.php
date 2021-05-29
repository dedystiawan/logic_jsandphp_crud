<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Ubah Data Pokemon</h1>
	<?php 
	include "koneksi.php";

	$id = $_GET['id'];

	$sql = $pdo->prepare("SELECT * FROM pokemon_tb");
	$sql->bindParam(':id', $id);
	$sql->execute();
	$data = $sql->fetch();
	 ?>

	 <form method="post" action="pokemon/proses_ubah.php?:id=<?php echo $id; ?>" enctype="multipart/form-data">
	 	<table cellpadding="8">
	 		<tr>
	 			<td>Nama Karakter</td>
	 			<td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Strength</td>
	 			<td><input type="text" name="str" value="<?php echo $data['str']; ?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Defence</td>
	 			<td><input type="text" name="def" value="<?php echo $data['def']; ?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Gambar</td>
	 			<td>
	 				<input type="file" name="photo">
	 			</td>
	 		</tr>
	 	</table>
	 	<hr>
	 	<input type="submit" value="Ubah" name="">
	 	<a href="pokemon/data_pokemon.php"><input type="button" value="Batal" name=""></a>
	 </form>
</body>
</html>