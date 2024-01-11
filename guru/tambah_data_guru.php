<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgba(225,225,225,0.5);
            font-family: 'DynaPuff', cursive;
        }

    /* @import url('https://fonts.googleapis.com/css2?family=Caveat&family=DynaPuff&family=Montserrat:wght@500&display=swap');

    span{
        font-size: 7rem;
        letter-spacing: 0.5rem;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-shadow: 
            7px 7px orange
            18px 18px black;
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke-width: 4px;
        -webkit-text-stroke-color: white;
        } */
        
        .wrap{
            width: 40%;
            margin: auto;
            color: white;
            border-radius: 10px;
            font-family: comic sans ms;
            background-color: #008B8B;
            
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
            width: 60px;
            font-family: comic sans ms;
            height: 30px;
            background-color: #00ffff;
            border-radius: 7px;
        }


    </style>
</head>
<body>



<div class="wrap">
        <div class="container">
            <ins><h1>Tambah Data Guru</h1></ins>
    <form method="post" action="aksi_tambah_guru.php" enctype="multipart/form-data">
        <table border="0">
        <tr>
            <td>Kode Guru</td>
            <td>:</td>
            <td><input type="text" name="kodeguru"></td>
        </tr>
        <tr>
            <td>NUPTK</td>
            <td>:</td>
            <td><input type="text" name="nuptk"></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><input type="text" name="nip"></td>
        </tr>
        <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
        </tr>
        <tr>
               <td>JK</td>
               <td>:</td>
               <td>
                     <select name="jk">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
        </tr>
        <tr>
                <td>Lahir</td>
                <td>:</td>
                <td><input type="date" name="lahir"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Foto <br><br><br><br><br></td>
            <td>: <br><br><br><br><br></td>
            <td><input type="file" name="foto" required="required">
            <span style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gifbr <br><br><br></span></td>
            
        </tr>
        </table>

        <div align="center">
                <button type="submit">Save</button>&nbsp&nbsp&nbsp
                <button type="reset" >Reset</button>
    </form><br><br>

            <form method="post" action="tampil_guru.php">
                <button type="submit">Kembali</button>
            </form>
        </div>
    </div>
    </div>
    
</body>
</html>