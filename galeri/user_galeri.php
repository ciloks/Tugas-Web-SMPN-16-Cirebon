<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload file menggunakan php mysqli</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>

		/*NAVIGASI*/

.BagianAtas{
	position: sticky;
	top: 0px;
	background: yellow;
	margin-right: 0px;
	margin-top: -8px;
	margin-left: -12px;
	height: 50px;
	line-height: 50px;
	width: 1267px;
	border-bottom-style: solid;
	border-bottom-right-radius: 25px;
	border-bottom-left-radius: 25px;
	border-bottom-color: #F04519;
  z-index: 1000;

}

.Bagian1{
    display: inline-block;
    margin-left: 85px;
    font-size: 22px;
}

.Bagian1 a{
    text-decoration: none;
    color: black;
}

.Bagian2{
	display: inline-block;
	margin-left: 140px;
	font-size: 22px;
}

#pop2{
  display: block;
  transform: scale(0);
  opacity: 0;
}

#pop2:target{
  transition: all .5s linear;
  transform: scale(1);
  opacity: 1;
}

#pop4{
  display: block;
  transform: scale(0);
  opacity: 0;
}

#pop4:target{
  transition: all .5s linear;
  transform: scale(1);
  opacity: 1;
}

.dropdown {
    display: inline-block;
}

.dropdown a{
    text-decoration: none;
    color: black;
}

.isi-dropdown a:hover{
    color: #fff;
}

.isi-dropdown {
    position: absolute;
    margin-top: -7px;
  margin-left: -40px;
    display: none;
    box-shadow: 0px 8px 16px 0px black;
    z-index: 1;
    padding-right: 5px;
    background-color: rgba(225,225,225, 0.5);
  backdrop-filter: blur(2px);
    width: 100px;
    list-style: none;
}

.isi-dropdown a{
    color: blue;
}

.isi-dropdown a:hover{
    color: #232323;
    background: #f3f3f3;
}

.LogoHome{
    height: 72px;
    width: 72px;
	margin-bottom: 6px;
}

.Bagian3{
	position: absolute;
	display: inline-block;
	left: 610px;
	bottom: -30px;
	background-color: yellow;
	border-bottom-left-radius: 40px;
	border-bottom-right-radius: 40px;
	border-color: #F04519;
	border-style: solid;
	box-shadow: 0px 7px 14px 0px;
}

.Bagian4{
	display: inline-block;
	margin-left: 430px;
	font-size: 22px;
}

.Bagian4 a{
    text-decoration: none;
    color: black;
}

.Bagian5{
	display: inline-block;
	margin-left: 150px;
	font-size: 22px;
}

.Bagian6{
  display: inline-block;
  margin-left: 50px;
  font-size: 25px;
  rotate: 90deg;
  background-color: #e0e000;
  text-decoration: none;
  color: white;
  padding-left: 8px;
  padding-right: 8px;
}

.Bagian6 a{
  text-decoration: none;
  color: black;
}

		.container{
			background-color: white;
			padding: 3em;
			margin-bottom: 1.5rem;
			border-radius: 18px;
		}

		.judul{
			margin: 1.5rem;
		}

		.judul span{
			color: black;
			font-size: ;
			background-color: yellow;
			padding: 6px 25px;
			border-radius: 5px;
		}

		.img2{
		background-repeat:no-repeat;
        background-attachment:fixed;
		background-size: 100% 100%;
		}
		*{
			padding: 0px;
			margin: 0px;
		}
		body{
			background-color: #cfcfcf;
		}
		h2{
			padding: 2px;
			border-bottom: 2px solid black;
		}
		.tambah{
			background-color: #2298E6;
			text-decoration: none;
			border-radius: 5px;
			color: white;
			padding: 8px;
		}

		.tambah:Hover{
			text-decoration: none;
			background-color: #cfcfcf;
		}
		.isi{
			display: grid;
			grid-template-columns: repeat(3,1fr);
			margin-right: 50px;
			gap: 1rem;
		}
		.tampilan{
			background-color: yellow;
			width:290px;
			height: 240px; 
			border-radius: 5px;
			padding: 1.2em;
			margin-bottom: 1.5rem;
			transition: .5s;
		}
		.tampilan:Hover{
			scale: 1.2;
			background-color: grey;
			color: white;
			box-shadow: 0px 0px 15px black;
			border-radius: 25px;
		}
		.tampilan img{
			width:240px;
			height: 140px; 
			border: 0px; 
			border-radius: 10px; 
			margin: 4px;
		
          }
          .tampilan p{
          	text-align: center;
          }
          .edit,
          .hapus{
			text-decoration: none;
			border-radius: 5px;
			color: white;
			padding: 2px;
          }

		  .edit:hover,.hapus:hover{
			text-decoration: none;
			color: black;
		  }
		  
          .edit{
          	background-color: #2298E6;
              floating: left;
          }
          .hapus{
          	background-color:#B6000C;
              floating: right;
          }
          .edit:active,
          .hapus:active{
          	background-color: white;
              text-decoration: none;
              color: black;
          }

          /*TOMBOL KEMBALI*/

.tombolkembali a span{
    background-color: yellow;
    text-align: center;
    font-size: 15px;
    padding: 10px;
    border: 2px solid black;
}

.tombolkembali a span:hover{
    background-color: white;
    color: black;
    width: 150px;
    box-shadow: 0px 0px 10px black;
}

.tombolkembali a{
    text-decoration: none;
    color: black;
}
          
	</style>
</head>
<body>
		
			<!-- NAV -->

			<div class="BagianAtas">
			<div class="Bagian1"><a href="../background.html">Tentang Spenaz</div></a>

			<div class="Bagian2">
				<li class="dropdown"><a href="#pop2" class="pop2">Data</a>
					<ul class="isi-dropdown" id="pop2">
						<li class="sub-bagian"><a href="#">X</a></li>
						<li class="sub-bagian"><a href="../kelas.html">Siswa</a></li>
						<li class="sub-bagian"><a href="../guru/tampil_user_guru.php">Guru</a></li>
					</ul>
				</li>
			</div>

			<div class="Bagian3"><a href="../HomePage.html"><img class="LogoHome" src="../foto/Logo_Sekolah-removebg-preview.png"></a></div>

			<div class="Bagian4"><a href="../galeri.html">Gallery</div></a>
 
			<div class="Bagian5">
				<li class="dropdown"><a href="#pop4" class="pop4">Other</a>
					<ul class="isi-dropdown" id="pop4">
						<li><a href="#">X</a></li>
						<li><a href="../eskul.html">Eskul</a></li>
						<li><a href="../berita.html">News</a></li>
					</ul>
				</li>
			</div>

			<div class="Bagian6"><a href="#" target="_self"><span><b><</b></span></a></div>
			
		</div> <br>

		<h3><div class="judul" align="center"><span>GALLERY</span></div></h3>		
		<hr>
	<div class="container">
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasilhapus"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Dihapus
				</div> 								
				<?php
			}
		}
		?>
		<br>
		<a href="login_galeri.php" class="tambah">login admin</a>
		<br>		
		<br>
		<div class="isi">
		<?php
		$data = mysqli_query($link,"select * from galeri");
			while($d = mysqli_fetch_array($data)){
				?>
				<div class="tampilan">
				<img src="../fotogaleri/<?php echo $d['gambar'] ?>">
					<p><?php echo $d['judul']?></p>
				</div>
				<?php
		    }
		?>
		</div>

        <!-- TOMBOL KEMBALI -->

		<h3 align="center" class="tombolkembali"><a href="../HomePage.html"><span>Kembali</span></a></h3>
        
	</div>
</body>
</html>
