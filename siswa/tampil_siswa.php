<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compitable" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<style>
@font-face {
    font-family: "Meta";
    font-style: normal;
    font-weight: normal;
    src: url("https://www.axis-praxis.org/fonts/webfonts/MetaVariableDemo-Set.woff2");
}

body{
  background-image: url(background\ smp\ rendi.jpeg);
  background-repeat:no-repeat;
  background-attachment:fixed;
	background-size: 100% 100%;
}

body{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    display: grid;
    justify-content: first baseline;
    align-items: center;
    /* background-color: #8357eb; */
}

main{
    transition: all 0.5s;
    -webkit-text-stroke: 4px #F8F8FF;
    font-variation-settings: "wght" 900,"ital" 1;
    font-size: 7rem;
    text-align: center;
    color: transparent;
    font-family: "Meta", sans-serif;
    text-shadow: 
    10px 10px 0px #07bccc,
    15px 15px 0px #e601c0,
    20px 20px 0px #e9019a,
    25px 25px 0px #f40468,
    45px 45px 10px #482896;
    cursor: pointer;

}

main:hover{
    font-variation-settings: "wght"100,"ital"0;
    text-shadow: none;
}

h1{
text-align: center; 
font-family: sans-serif;
border-width: 5px;
border-radius: 7px;
}

.gambar{
/* background-image: url(https://m.facebook.com/SMP-Negeri-16-Cirebon-112983578801725/); */
position: relative;
    left: 25px;
    border: 3px;
    border-radius: 3px;
    width : 80x; 
    height: 80px;
    border-width: 3px;
    border-style: solid;
    border-color: white;
}

* {
font-family: sans-serif; 
}

.div{
display: grid;
place-items: center;

}
.navbar{
  background-color: rgba(225,225,225,0.5);
  backdrop-filter: blur(2px);
  border: 5px solid grey;
  height: 150px;
  border-radius: 10px;
  margin-left: 155px;
  margin-right: 155px;
}

.div1{
/* display: grid;
place-items: center; */
text-align: center; 
font-family: sans-serif;
border-width: 5px;
border-radius: 7px;
}

.content-table {
border-collapse: collapse;
margin: 12px 0;
font-size: 0.9em;
min-width: 500px;
border-radius: 5px 5px 0 0;
overflow: hidden;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

}

.content-table thead tr {
background-color: #009879;
color: white;
text-align: center;
font-weight: bold;
}

.content-table th,
.content-table td {
padding: 12px 15px;
}

.content-table tbody tr {
border-bottom: 1px solid #dddddd;
background-color: white;
}

.content-table tbody tr:nth-of-type(even) {
background-color: #dad7d7;
}

.content-table tbody tr:last-of-type {
border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
font-weight: bold;
color: #009879;
}

.tombol{
position: absolute;
top: 2%;
right: 2%;
}

button{
width: 65px;
font-family: comic sans ms;
color: white;
height: 30px;
background-color: rgb(83, 83, 149);
border-radius: 7px;
}

.input{
width: 60px;
font-family: comic sans ms;
color: white;
height: 30px;
background-color: rgb(38, 78, 53);
border: 4px solid rgb(143, 143, 163);
border-radius: 7px;
text-decoration: none;
}

span{
border: 4px solid rgb(143, 143, 163);
width: 50px;
font-family: comic sans ms;
color: white;
height: 50px;
background-color: rgb(38, 78, 53);
border-radius: 7px;
text-align: center;

}

.a{
width: 65px;
font-family: comic sans ms;
color: white;
height: 30px;
background-color: rgb(38, 78, 53);
border: 4px solid  rgb(83, 83, 149);
border-radius: 7px;
text-decoration: none;
}
</style>
</head>
<body >
  <div class="">
    <div class="">
      <main>Table Siswa</main>
    </div>
  </div><br><br>
  
  <div class="navbar">
    <form method="post" action="hasil_cari_siswa.php">
      <div class="div1">
        <br>
          <span>Masukkan Nama :&nbsp&nbsp</span> <input type="text" name="cari">
            <span>Berdasarkan : &nbsp</span>
              <select name="pilihan">
                <option value="NIS">NIS</option>
                <option value="Nama">Nama</option>
              </select>

              <input type="submit" value="cari" class="input">
              <input type="reset" value="reset" class="input">
      </div><br>
    </form>

    <div align="center">
      <form method="post" action="tambah_data_siswa.php">
        <button type="submit">Tambah</button>
      </form><br>
      <a href="../kelas.html" class="a">HOME</a>
    </div>

  </div>

    
  <br>

  <div align="center">
      <a href="login_admin_siswa.php" class="tombol"><img src="user.png" alt="login" width="30"></a>
  </div>

  <div class="div">
    <table class="content-table" width="70%">
        <thead>
          <tr>
            <th>NIS </th>
            <th>NISN</th>
            <th>NAMA</th>
            <th>JK</th>
            <th>AKSI</th>
          </tr>
        </thead>
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
                    <a class='a'href='edit_siswa.php?id_siswa=$data[id_siswa]'>Edit</a> || <a class='a' href='hapus_siswa.php?id_siswa=$data[id_siswa]'>Hapus</a>
                </td>
                ";
        }
        ?>
    </table>

</body>
</html>