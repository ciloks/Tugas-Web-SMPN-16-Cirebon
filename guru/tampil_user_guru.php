<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="StyleHomePage.css">
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
            10px 10px 0px #D2691E,
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

  .navbar{
  background-color: rgba(225,225,225,0.5);
  backdrop-filter: blur(2px);
  border: 5px solid grey;
  height: 150px;
  border-radius: 10px;
  margin-left: 185px;
  margin-right: 185px;
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

.div1{
        /* display: grid;
        place-items: center; */
        text-align: center; 
    font-family: sans-serif;
    border-width: 5px;
    border-radius: 7px;
}

.div{
        display: grid;
        place-items: center;
       
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
  background-color: #a41b1b;
  color: white;
  text-align: center;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
  text-align: center;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
  background-color: white;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #dad7d7;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #a41b1b;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

button{
  width: 65px;
  font-family: comic sans ms;
  color: white;
  height: 30px;
  background-color: rgb(83, 83, 149);
  border-radius: 7px;   
}

.tombol{
position: absolute;
top: 2%;
right: 2%;
}

span{
  /* border: 4px solid rgb(143, 143, 163); */
  width: 50px;
  font-family: comic sans ms;
  color: white;
  height: 50px;
  background-color: #DC143C;
  border: 4px solid  #778899;
  border-radius: 7px;
  text-align: center;

}

.input{
width: 60px;
font-family: comic sans ms;
color: white;
height: 30px;
background-color: #DC143C;
border: 4px solid rgb(143, 143, 163);
border-radius: 7px;
text-decoration: none;
}

.a{
  width: 70px;
  font-family: comic sans ms;
  color: white;
  height: 30px;
  background-color: #B22222;
  border: 4px solid  #778899;
  border-radius: 7px;
  text-decoration: none;
}

.img{
  width: 55px; 
  height: 60px;
  border-radius: 3px;
  
}

</style>
</head>
<body>

  <div class="">
      <main>Tabel Guru</main>
  </div><br><br>

<div class="navbar">
  <form method="post" action="hasil_cari_guru.php">
    <div class="div1">
      <br>
        <span>Masukkan Nama :&nbsp&nbsp</span> <input type="text" name="cari">
          <span>Berdasarkan : &nbsp</span>
            <select name="pilihan">
              <option value="Nama">Nama</option>
              <option value="KodeGuru">KodeGuru</option>
            </select>

            <input type="submit" value="cari" class="input" disable>
            <input type="reset" value="reset" class="input" disable>
    </div><br>
  </form>

  <div align="center">
    <form method="post" action="tambah_data_guru.php">
      <!-- <button type="submit">Tambah</button> -->
    </form><br>
    <a href="../HomePage.html" class="a">HOME</a>
  </div>

</div>

<div align="center">
  <a href="login_guru.php" class="tombol"><img src="user.png" alt="login" width="30"></a>
</div>


  <div class="div">
   <table class="content-table" width="80%">
        <thead>
          <tr>
            <th>KODE GURU</th>
            <th>NUPTK </th>
            <th>NAMA</th>
            <th>JK</th>
            <th>FOTO</th>
            <th>AKSI</th>
          </tr> 
        </thead>
</form>
        <?php
        include "Koneksi.php";
        $data = mysqli_query($db_link,"select * from guru");
        while($d = mysqli_fetch_array($data)){
          ?>
          <tr>
            <td><?php echo $d['KodeGuru']; ?></td>
            <td><?php echo $d['NUPTK']; ?></td>
            <td><?php echo $d['Nama']; ?></td>
            <td><?php echo $d['JK']; ?></td>
            <td><img class="img" src="../fotoguru/<?php echo $d['Foto'] ?>"></td>
            <td><a  class="a" href="detail_guru_user.php?id_guru=<?php echo $d['id_guru']; ?>"> Detail </a></td>
          
          </tr>
          <?php
        }
        ?>
    </table>

</body>
</html>