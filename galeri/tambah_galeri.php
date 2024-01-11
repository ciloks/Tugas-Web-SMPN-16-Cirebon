<!DOCTYPE html>
<html>
<head>
	<title>Upload file menggunakan php mysqli</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		*{
			padding: 0px;
			margin: 0px;
		}
		body{
			background-color: green;
		}
		.container{
			background-color: white;
			margin: 50px;
			border-radius: 5px;
			padding: 10px;
		}
		.container h3{
			text-align: center;
			margin-bottom: 20px;
			border-bottom: 2px solid grey;
			font-size: 25px;
		}
		.group{
			align-item: center;
			text-align: center;
			margin-bottom: 15px;
		}
		input{
			width: 220px;
			font-weight: bold;
			padding: 10px;
			Border: 1px solid #2298e6;
			background-color: #BEBEBE;
			border-radius: 10px;
		}
		.kirim{
			background-color: #2298e6;
			Border: 1px solid #BEBEBE;
			border-radius: 5px;
			color: white;
			margin-top: 10px;
			width: 100px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="galeri_act.php" method="post" enctype="multipart/form-data">
	<div class="container">
		<h3>Tambah Gambar</h3>
		<div class="group">
			<label for="judul">Judul:</label><br>
			<input type="text" class="input" name="judul" placeholder="JUDUL!" required="required">
		</div>
		<div class="group">
			<label for="foto">foto:</label><br>
			<input type="file" class="input" name="foto" required="required" accept="image/*"><br>
			<span style="color: red; font-size: 10px;">hanya dapat mengimput IMG|JPG|JPEG|PNG|WEBP
		</div>
		<div class="group">
			<input type="submit" value="simpan" class="kirim">
		</div>
	</div>
	</form>
</body>
</html>
