<?php
include "Koneksi.php";

$idsiswa = $_GET["id_siswa"];

if( hapus($idsiswa) > 0 ){
    echo "
    <script>
    alert('Data Berhasil di Hapus');
    document.location.href = 'tampil_siswa.php';
    </script>
    ";
} else {
    echo"
    <script>
    alert('Data Tidak Berhasil DiHapus');
    document.location.href = 'tampil_siswa.php';
    </script>
    ";
}
?>