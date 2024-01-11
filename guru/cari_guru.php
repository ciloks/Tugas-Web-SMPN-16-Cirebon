<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url(dedycorbuzer.jpg);

            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size: 100% 100%;

        }

        th{
            color: white;
        }

    </style>
</head>
<body>

<table align="center" border="1" height="350" width="350" bgcolor="white" style="background: rgba(0, 0, 0, 0.8);">
    <form method="post" action="hasil_cari_guru.php">
        <tr>
            <th colspan="2">Pencarian Data Guru</th>
        </tr>
        <tr>
            <th colspan="2" style="text-align:center;">
             <br>Masukkan Nama:<input type="text" name="cari"></br>
             <br>Pencarian Data &nbsp&nbsp
             <select name="pilihan">
                    <option value="NIP">NIP</option>
                    <option value="Nama">Nama</option>
              </select>
            </br>
            
           
            </th>
        </tr>
        <tr>
            <th colspan="3">
                <input type="submit" value="cari" target="_self">
                
            </th>
        </tr>
    </form>
    </table>

    <table align="right" border="0" bgcolor="white" style="color:blue; border-radius:4px;">
        <tr>
            <td>
                <b>Cari Data : <input type="text" name="cari"> Pencarian Data &nbsp&nbsp</b>
                <select name="pilihan">
                    <option value="NIP">NIP</option>
                    <option value="Nama">Nama</option>
                </select>
                <input type="submit" value="cari">
                <a href="tampil_guru.php" style="text-decoration: none;">Kembali </a>
            </td>
        </tr>
    </table>
</body>