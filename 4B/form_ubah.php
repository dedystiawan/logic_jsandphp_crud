<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Ubah Data</h1>
	<?php 
	include "koneksi.php";

	$id = $_GET['id'];

	$sql = $pdo->prepare("SELECT pokemon_tb.*, element_tb.* FROM pokemon_tb JOIN detail_pokemon 
        ON pokemon_tb.id=detail_pokemon.id_pokemon JOIN element_tb 
        ON detail_pokemon.id_element=element_tb.id WHERE pokemon_tb.id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();
	$data = $sql->fetch();
	 ?>

	 <form method="post" action="proses_ubah.php?:id=<?php echo $id; ?>" enctype="multipart/form-data">
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
	 			<td>Elemen</td>
	 			<td>
	 				<select name="name_element" id="name_element">
	 					<?php 
	 						$query_element="SELECT * FROM element_tb";
	 						$sql_element=mysql_query($query_element);
	 						while ($data_element=mysql_fetch_array($sql_element)) {
	 							if ($data['name_element']==$data_element['id_e']) {
	 								$select="selected";
	 							} else {
	 								$select="";
	 							}
	 							echo "<option $select>".$data_element['name_element']."</option>";
	 						}
	 					 ?>
	 				</select>
	 			</td>
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
	 	<a href="index.php"><input type="button" value="Batal" name=""></a>
	 </form>
</body>
</html>