<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body align="center">
    <h2>Manajamen Data Siswa </h2><hr>
<form method="post" action="tambah_data_siswa.php">
    <button type="submit">Tambah</button>
    <br><br>

    <div class="">
    <table border="1" align="center">
        <thead>
          <tr>
            <th>NIS </th>
            <th>NISN</th>
            <th>NAMA</th>
            <th>JK</th>
            <th>Aksi</th>
          </tr>
        </thead>
    </div>
  </form>
    <?php
        include "Koneksi.php";
        $sql="SELECT * FROM siswa;";
        $query=mysqli_query($db_link,$sql);
        while($data=mysqli_fetch_array($query)){
            echo"

            <tr>
                <td>$data[NIS]</td>
                <td>$data[NISN]</td>
                <td>$data[Nama]</td>
                <td>$data[Jk]</td>
                <td>
                    <a href='edit_siswa.php?NIS=$data[NIS]'>Edit</a> || <a href='hapus_siswa.php?NIS=$data[NIS]'>Hapus</a>
                </td>
                
            ";
        }
        ?>
    </table>

</body>
</html>