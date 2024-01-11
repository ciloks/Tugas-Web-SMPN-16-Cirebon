<?php
include "Koneksi.php";

$idguru = $_GET['id_guru'];
$query= "DELETE FROM guru where id_guru='$idguru'";
$result= mysqli_query($db_link,$query);

if( hapus($idguru) > 0 ){
    echo "
    <script>
    alert('Data Tidak Berhasil di Hapus');
    document.location.href = 'tambah_data_guru.php';
    </script>
    ";
} else {
    echo"
    <script>
    alert('Data Berhasil DiHapus');
    document.location.href = 'tampil_guru.php';
    </script>
    ";
}
?>