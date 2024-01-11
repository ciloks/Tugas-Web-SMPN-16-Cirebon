<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	include "Koneksi.php";
	$nis = $_POST['nis'];
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];

	$ceknisn = mysqli_num_rows(mysqli_query($db_link, "SELECT NISN FROM siswa WHERE nisn='$_POST[nisn]'"));
	$ceknis = mysqli_num_rows(mysqli_query($db_link, "SELECT NIS FROM siswa WHERE nis='$_POST[nis]'"));

	if($ceknisn > 0 ||  $ceknis > 0){
		echo "<script>alert('NIS Atau NISN Sudah Digunakan');history.go(-1) </script>";

	}else{
		$sql = "insert into siswa (nis, NISN, nama, jk) values ('$nis', '$nisn', '$nama', '$jk')";

		$query = mysqli_query($db_link,$sql);

		if ($query) {
			echo "<script>alert('Data Telah Tersimpan');document.location.href='tampil_siswa.php';</script>";
		}else{
			echo "Data Gajadi Disimpan";
		}
	}

?>
    
</body>
</html>