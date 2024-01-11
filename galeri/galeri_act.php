<?php 
include 'koneksi.php';
$judul = $_POST['judul'];
 
$rand = rand();
$ekstensi =  array('img','png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:galeri.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 10440700){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../fotogaleri/'.$rand.'_'.$filename);
		mysqli_query($link, "INSERT INTO galeri VALUES(NULL,'$judul','$xx')");
		header("location:galeri.php?alert=berhasil");
	}else{
		header("location:galeri.php?alert=gagal_ukuran");
	}
}