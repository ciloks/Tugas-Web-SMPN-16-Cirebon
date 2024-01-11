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
            width: 78px;
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
    $idguru=$_GET['id_guru'];
    $sql= "SELECT * FROM guru WHERE id_guru like '$idguru'";
    $guru = query($sql);
?>

<div class="wrap">
    <div class="container">
    <ins><h1>Detail Data Guru 

    </h1></ins>
    <form method="post" action="" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label for="nuptk">KODE GURU </td>
            <td>: </label></td>
            <td><input type="text" name="kodeguru" id="kodeguru" required disabled
            value="<?= $guru[0]['KodeGuru'] ?>"></td>
        </tr>
        <tr>
            <td><label for="nuptk">NUPTK </td>
            <td>: </label></td>
            <td><input type="text" name="nuptk" id="nuptk" required disabled
            value="<?= $guru[0]['NUPTK'] ?>"></td>
        </tr>
        <tr>
            <td><label for="nip">NIP</td>
            <td> : </label></td>
            <td><input type="text" name="nip" id="nip" required disabled
            value="<?= $guru[0]['NIP'] ?>"></td>
        </tr>
        <tr>
            <td><label for="nama">NAMA</td>
            <td> : </label></td>
            <td><input type="text" name="nama" id="nama" required disabled
            value="<?= $guru[0]['Nama'] ?>"></td>
        </tr>
        <tr>
            <td><label for="jk">JK</td>
            <td>:</label></td>
            <td><input type="text" name="Jk" id="Jk" required disabled
            value="<?= $guru[0]['JK'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="lahir">LAHIR</td>
            <td>:</label></td>
            <td><input type="date" name="lahir" id="lahir" required disabled
            value="<?= $guru[0]['Lahir'] ?>"></td>
        </tr>
        <tr>
            <td><label for="alamat">ALAMAT</td>
            <td>: </label></td>
            <td><input type="text" name="alamat" id="alamat" required disabled
            value="<?= $guru[0]['Alamat'] ?>"></td>
        </tr>
        <tr>
            <td><label for="foto">FOTO <br><br><br></td>
            <td>: <br><br><br></label></td>
            <td><img src="../fotoguru/<?= $guru[0]['Foto'] ?>" style="width: 120px;float: left;margin-bottom: 5px;" >
            </td>
        </tr>
    </table><br>
        <div align="center">
            <div class="a">
            <a style="text-decoration: none;" href="tampil_user_guru.php">KEMBALI</a>
            </div>
        </div>
    </div>
</div>




<?php

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

    $ceknisn = mysqli_num_rows(mysqli_query($db_link, "SELECT KodeGuru FROM guru WHERE id_guru='$_POST[kodeguru]'"));

	if($ceknisn > 0){
		echo "<script>alert('KodeGuru Sudah Digunakan');history.go(-1) </script>";

	}else{

   if(($filename && $ukuran) == NULL){ 
    $sqlU= "UPDATE guru
    SET
     KodeGuru='$kodeguru',
        NUPTK='$nuptk',
        NIP='$nip',
        Nama='$nama',
        JK='$jk',
        Lahir='$lahir',
        Alamat='$alamat'
        WHERE id_guru like '$idguru'";

        mysqli_query($db_link,$sqlU);

        echo "
        <script>
        alert('Data Berhasil di Edit');
        document.location.href = 'tampil_guru.php';
        </script>
        ";
   }
    elseif(!in_array($ext,$ekstensi) ) {
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
}

    // $sql= "UPDATE guru
    //     SET KodeGuru='$kodeguru',
    //         NUPTK='$nuptk',
    //         NIP='$nip',
    //         Nama='$nama',
    //         JK='$jk',
    //         Lahir='$lahir',
    //         Alamat='$alamat',
    //         Foto='$xx'
    //         WHERE id_guru like '$idguru'";


    // mysqli_query($db_link,$sql);

    // echo "
    // <script>
    // alert('Data Berhasil di Edit');
    // document.location.href = 'tampil_guru.php';
    // </script>
    // ";


?>

</table>
</from>
    
</body>
</html>