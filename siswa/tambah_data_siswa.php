<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(to right,#E0FFFF,#DCDCDC,#E0FFFF);
        }
        
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
            width: 50px;
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
       <ins><h1>Tambah Data Siswa</h1></ins>
    <form method="post" action="aksi_tambah_siswa.php">
        <table border="0">
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td><input type="text" name="nisn"></td>
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
        </table>

        <div align="center">
                <button type="submit">Save</button>&nbsp&nbsp&nbsp
                <button type="reset" >Reset</button>
    </form><br><br>

            <form method="post" action="tampil_siswa.php">
                <button type="submit">Back</button>
            </form>
        </div>
    </div>
    </div>

</body>
</html>