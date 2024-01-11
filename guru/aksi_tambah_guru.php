
<?php 
include 'Koneksi.php';
$kodeguru = $_POST['kodeguru'];
$nuptk = $_POST['nuptk'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$lahir = $_POST['lahir'];
$alamat = $_POST['alamat'];
// $foto = $_POST['foto'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$ceknisn = mysqli_num_rows(mysqli_query($db_link, "SELECT KodeGuru FROM guru WHERE kodeguru='$_POST[kodeguru]'"));

	if($ceknisn > 0){
		echo "<script>alert('KodeGuru Sudah Digunakan');history.go(-1) </script>";


	}else{
	if(!in_array($ext,$ekstensi) ) {
	header("location:tampil_guru.php?alert=gagal_ekstensi");
	}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../fotoguru/'.$rand.'_'.$filename);
		mysqli_query($db_link, "INSERT INTO guru VALUES(NULL,'$kodeguru','$nuptk','$nip','$nama','$jk','$lahir','$alamat','$xx')");
		echo" 
		<script>
		alert('Data Berhasil di Tambah');
		document.location.href = 'tampil_guru.php';
		</script>
		";
	}else{
		header("location:tampil_guru.php?alert=gagal_ukuran");
	}
	}
}


// $sql="INSERT INTO guru (KodeGuru,NUPTK,NIP,Nama,JK,Lahir,Alamat,Foto) VALUES ('$kodeguru','$nuptk','$nip','$nama','$jk','$lahir','$alamat','foto')";
// $query=mysqli_query($db_link,$sql);
// $rand = rand();
// $ekstensi =  array('.png','.jpg','.jpeg','.gif');
// $filename = $_FILES['foto']['name'];
// $ukuran = $_FILES['foto']['size'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);

// if(!in_array($ext,$ekstensi) ) {
// 	header("location:tampil_guru.php?alert=gagal_ekstensi");
// }else{
// 	if($ukuran < 1044070){		
// 		$xx = $rand.'_'.$filename;
// 		move_uploaded_file($_FILES['foto']['tmp_name'], '../fotoguru/'.$rand.'_'.$filename);
// 		mysqli_query($db_link, "INSERT INTO guru VALUES(NULL,'$kodeguru','$nuptk','$nip','$nama','$jk','$lahir','$alamat','$foto','$xx')");
// 		header("<script>
// 		alert('Data Berhasil di Tambah');
// 		document.location.href = 'tampil_guru.php';
// 		</script>");
// 	}else{
// 		header("<script>
// 		alert('Ukuran Terlalu Besar');
// 		document.location.href = 'tambah_data_guru.php';
// 		</script>");
// 	}
// };

    // $query=mysqli_query($db_link,$sql);
//     if($query){
//         echo "
//     <script>
//     alert('Data Berhasil di Tambah');
//     document.location.href = 'tampil_siswa.php';
//     </script>
//     ";
//     }else{
//         echo"
//         <script> 
//         alert('Data Berhasil di Tambah');
//         document.location.href = 'tampil_siswa.php';
//         </script>
//     ";
//     }

// $rand = rand();
// $ekstensi =  array('.png','.jpg','.jpeg','.gif');
// $filename = $_FILES['foto']['name'];
// $ukuran = $_FILES['foto']['size'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
// if(!in_array($ext,$ekstensi) ) {
// 	header("location:tampil_guru.php?alert=gagal_ekstensi");
// }else{
// 	if($ukuran < 1044070){		
// 		$xx = $rand.'_'.$filename;
// 		move_uploaded_file($_FILES['foto']['tmp_name'], 'fotoguru/'.$rand.'_'.$filename);
// 		mysqli_query($db_link, "INSERT INTO guru VALUES(NULL,'$kodeguru','$nuptk','$nip','$nama','$jk','$lahir','$alamat','$xx')");
// 		header("<script>
// 		alert('Data Berhasil di Tambah');
// 		document.location.href = 'tampil_guru.php';
// 		</script>");
// 	}else{
// 		header("<script>
// 		alert('Ukuran Terlalu Besar');
// 		document.location.href = 'tambah_data_guru.php';
// 		</script>");
// 	}
// }
?>