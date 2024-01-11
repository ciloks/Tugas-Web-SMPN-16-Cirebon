<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(to right,#E6E6FA,#F0F8FF,#E6E6FA);
        }
        
        .wrap{
            width: 40%;
            margin: auto;
            color: white;
            border-radius: 10px;
            font-family: comic sans ms;
            background-color: #000080;
            
        }

        .container{
            padding: 5px;
            margin: 10%;
        }
        
        h1{
            text-align: center;
        }

        table{
            margin: auto;
            padding-bottom: 5px;
        }

        table td{
            padding: 5px;
        }

        button{
            width: 65px;
            font-family: comic sans ms;
            height: 30px;
            background-color: #00ffff;
            border-radius: 7px;
        }

        .a{
            text-decoration: none;
            width: 65px;
            font-family: comic sans ms;
            height: 30px;
            background-color: #00ffff;
            border-radius: 7px;
            border: 3px solid black;

        }
    </style>
</head>
<body>
    <?php
    require  "Koneksi.php";
    $idsiswa=$_GET['id_siswa'];
    $siswa = query("SELECT * FROM siswa WHERE id_siswa = '$idsiswa'");
    ?>

<div class="wrap">
    <div class="container">
    <ins><h1>Edit Data Siswa</h1></ins>
    <form method="post" action="">
    <table>
        <tr>
            <td><label for="nis">NIS </td>
            <td>: </label></td>
            <td><input type="text" name="nis" id="nis" required
            value="<?= $siswa[0]['NIS'] ?>"></td>
        </tr>
        <tr>
            <td><label for="nisn">NISN</td>
            <td>:</label></td>
            <td><input type="text" name="nisn" id="nisn" required
            value="<?= $siswa[0]['NISN'] ?>"></td>
        </tr>
        <tr>
            <td><label for="nama">NAMA</td>
            <td> : </label></td>
            <td><input type="text" name="nama" id="nama" required
            value="<?= $siswa[0]['Nama'] ?>"></td>
        </tr>
        <tr>
            <td><label for="jk">JK</td>
            <td>:</label></td>
            <td><select name="jk" id="jk">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
    </table><br>
        <div align="center">
            <input type="hidden" name="hidden">
            <button type="submit">SAVE</button>&nbsp&nbsp
            <button type="reset">CANCEL</button><br><br>
            <div class="a">
            <a href="tampil_siswa.php">BACK<a>
            </div>
        </div>
    </div>
</div>




<?php

if ( isset($_POST['hidden']) ){
    $nis=$_POST['nis'];
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];

    $sql= "UPDATE siswa
        SET NIS='$nis',
            NISN='$nisn',
            Nama='$nama',
            Jk='$jk'
            Where id_siswa like $idsiswa";

    mysqli_query($db_link,$sql);

    echo "
    <script>
    alert('Data Berhasil di Edit');
    document.location.href = 'tampil_siswa.php';
    </script>
    ";
}
?>

</table>
    

</body>
</html>