<!DOCTYPE html>
<html>
<head>
	<title>Upload file menggunakan php mysqli</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.img{
		background-repeat:no-repeat;
        background-attachment:fixed;
		background-size: 100% 100%;
		}
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

<?php
require  "koneksi.php";

$no=$_GET['id'];
$sql= "SELECT * FROM galeri WHERE no like '$no'";
$galeri = query($sql);
?>

	<form action="" method="post" enctype="multipart/form-data">
	<div class="container">
		<h3>Tambah Gambar</h3>
		<div class="group">
			<label for="judul">Judul:</label><br>
			<input type="text" class="input" name="judul" placeholder="JUDUL!" required
            value="<?= $galeri[0]['judul'] ?>">
		</div>
		<div class="group">
			<label for="foto">foto:</label><br>
			<img src="../fotogaleri/<?= $galeri[0]['gambar'] ?>" style="width: 120px; margin-bottom: 5px;" ><br>
			<input type="file" class="input" name="foto" accept="image/*"  value="<?= $galeri[0]['gambar'] ?>"><br>
			<span style="color: red; font-size: 10px;">hanya dapat mengimput IMG|JPG|JPEG|PNG|WEBP
		</div>
		<div class="group">
			<input type="submit" value="simpan" class="kirim" name="kirim">
		</div>
	</div>
	<?php
	if ( isset($_POST['kirim']) ) {
		$judul = $_POST['judul'];

		$rand = rand();
		$ekstensi =  array('png','jpg','jpeg','gif');
		$filename = $_FILES['foto']['name'];
		$ukuran = $_FILES['foto']['size'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);

		// var_dump($judul);
		// echo "<br>";
		// var_dump($filename);

		if (($filename && $ukuran) == NULL) {
			$sqlUtanpaGambar = "UPDATE galeri SET judul='$judul'
			where no like '$no'";
			mysqli_query($link,$sqlUtanpaGambar);

			echo "
			<script>
			alert('Data Berhasil di Edit');
			document.location.href = 'galeri.php';
			</script>
			";
		}
		elseif(!in_array($ext,$ekstensi) ) {
			echo"<script>alert('gagal ekstensi');document.location.href= 'tampil_guru.php';</script>";
		}else{
			if($ukuran < 10440700){		
				$xx = $rand.'_'.$filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], '../fotogaleri/'.$xx);
				$sqlU= "UPDATE galeri 
				SET
				judul='$judul',
				gambar='$xx'
				WHERE no like '$no'";
				mysqli_query($link,$sqlU);
				echo" 
				<script>
				alert('Data Berhasil di Edit');
				document.location.href = 'galeri.php';
				</script>
				";
			}else{
				header("location:tampil_guru.php?alert=gagal_ukuran");
			}
		}
	}
	?>
	</form>
</body>
</html>
