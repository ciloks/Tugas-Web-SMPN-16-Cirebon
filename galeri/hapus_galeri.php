<?php
include "koneksi.php";

$data = mysqli_query($link,"select * from galeri where no = '$_GET[id]' ");
$d = mysqli_fetch_array($data);

$foto = $d['gambar'];
if(file_exists('foto/'.$foto)){
	unlink('foto/'.$foto);
}
$query = "delete from galeri where no = '$_GET[id]' ";
mysqli_query($link,$query);
header("location:galeri.php?alert=berhasilhapus");
?>