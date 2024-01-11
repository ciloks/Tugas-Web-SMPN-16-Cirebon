<?php
// include 'Koneksi.php';
// if( isset($_POST['hidden']) ){
// $kodeguru = $_POST['kodeguru'];
// $nuptk = $_POST['nuptk'];
// $nip = $_POST['nip'];
// $nama = $_POST['nama'];
// $jk = $_POST['jk'];
// $lahir = $_POST['lahir'];
// $alamat = $_POST['alamat'];
// // $foto = $_POST['foto'];

// $rand = rand();
// $ekstensi =  array('png','jpg','jpeg','gif');
// $filename = $_FILES['foto']['name'];
// $ukuran = $_FILES['foto']['size'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);

// if(!in_array($ext,$ekstensi) ) {
// 	header("location:tampil_guru.php?alert=gagal_ekstensi");
// }else{
// 	if($ukuran < 1044070){		
// 		$xx = $rand.'_'.$filename;
// 		move_uploaded_file($_FILES['foto']['tmp_name'], '../fotoguru/'.$rand.'_'.$filename);
// 		mysqli_query($db_link, "UPDATE guru SET(NULL,'$kodeguru','$nuptk','$nip','$nama','$jk','$lahir','$alamat','$xx')");
// 		echo" 
// 		<script>
// 		alert('Data Berhasil di Tambah');
// 		document.location.href = 'tampil_guru.php';
// 		</script>
// 		";
// 	}else{
// 		header("location:tampil_guru.php?alert=gagal_ukuran");
// 	}
// }
// }



if ( isset($_POST['hidden']) ){
    $kodeguru=$_POST['kodeguru'];
    $nuptk=$_POST['nuptk'];
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];
    $lahir=$_POST['lahir'];
    $alamat=$_POST['alamat'];
    // $foto=$_POST['foto'];   

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) ) {
        echo"<script>alert('gagal ekstensi');document.location.href= 'tampil_guru.php';</script>";
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../fotoguru/'.$xx);
            $sqlU= "UPDATE guru 
            SET KodeGuru='$kodeguru',
            NUPTK='$nuptk',
            NIP='$nip',
            Nama='$nama',
            JK='$jk',
            Lahir='$lahir',
            Alamat='$alamat',
            Foto='$xx'
            WHERE id_guru = '$idguru'";
            mysqli_query($db_link,$sqlU);
            echo" 
            <script>
            alert('Data Berhasil di Edit');
            document.location.href = 'tampil_guru.php';
            </script>
            ";
}else{
    header("location:tampil_guru.php?alert=gagal_ukuran");
        }
    }
}

?>