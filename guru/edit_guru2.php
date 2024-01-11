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
    <ins><h1>Edit Data Guru</h1></ins>
    <form method="post" action="proses_edit.php">
    <table>
        <tr>
            <td><label for="kodeguru">Kode Guru </td>
            <td>: </label></td>
            <td><input type="text" name="kodeguru" id="kodeguru" required="" 
            value="<?= $guru[0]['KodeGuru'] ?>"></td>
        </tr>
        <tr>
            <td><label for="nuptk">NUPTK </td>
            <td>: </label></td>
            <td><input type="text" name="nuptk" id="nuptk" required=""
            value="<?= $guru[0]['NUPTK'] ?>"></td>
        </tr>
        <tr>
            <td><label for="nip">NIP</td>
            <td> : </label></td>
            <td><input type="text" name="nip" id="nip" required=""
            value="<?= $guru[0]['NIP'] ?>"></td>
        </tr>
        <tr>
            <td><label for="nama">NAMA</td>
            <td> : </label></td>
            <td><input type="text" name="nama" id="nama" required=""
            value="<?= $guru[0]['Nama'] ?>"></td>
        </tr>
        <tr>
            <td><label for="jk">JK</td>
            <td>:</label></td>
            <td><select name="jk" id="jk">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="lahir">LAHIR</td>
            <td>:</label></td>
            <td><input type="date" name="lahir" id="lahir" required=""
            value="<?= $guru[0]['Lahir'] ?>"></td>
        </tr>
        <tr>
            <td><label for="alamat">ALAMAT</td>
            <td>: </label></td>
            <td><input type="text" name="alamat" id="alamat" required=""
            value="<?= $guru[0]['Alamat'] ?>"></td>
        </tr>
        <tr>
            <td><label for="foto">FOTO <br><br><br></td>
            <td>: <br><br><br></label></td>
            <td><img src="../fotoguru/<?= $guru[0]['Foto'] ?>" style="width: 120px;float: left;margin-bottom: 5px;" ></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="file" name="foto" id="foto"
            value="">
            <span style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</span><br></td><br>
        </tr>
    </table><br>
        <div align="center">
            <input type="hidden" name="hidden">
            <button type="submit">SAVE</button>&nbsp&nbsp
            <button type="reset">CANCEL</button><br><br>
            <div class="a">
            <a style="text-decoration: none;" href="tampil_guru.php">KEMBALI</a>
            </div>
        </div>
    </form>
    </div>
</div>



</table>
    
</body>
</html>