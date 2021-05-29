<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Tambah Pokemon</h1>
	<form method="post" action="/pokemon/proses_simpan_pokemon.php" enctype="multipart/form-data">
	<table cellpadding="8">
		<tr>
			<td>Nama Karakter</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Strength</td>
			<td><input type="text" name="str"></td>
		</tr>
		<tr>
			<td>Defence</td>
			<td><input type="text" name="def"></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input type="file" name="photo"></td>
		</tr>
	</table>
	<hr>
	<input type="submit" value="Simpan" name="">
	<a href="index.php"><input type="button" value="Batal" name=""></a>
		
	</form>
</body>
</html>