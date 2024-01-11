<?php
include "koneksi.php";
$user=$_POST["user"];
$pass=$_POST["password"];
$query="select*from admin where password='$_POST[password]'";
$query=mysqli_query($link,$query);
while($d = mysqli_fetch_array($query)){
$db_user= $d["user"];
$db_pass= $d["password"];

  if($user == $db_user) {
	  if($pass == $db_pass) {
	     ?>
	     <script type="text/javascript">alert("berhasil masuk");
	     window.location="galeri.php";
	     </script>
	     <?php
	  }else{
		  ?>
		  <script type="text/javascript">alert("password salah");
	     document.location="user_galeri.php";
	     </script>
	     <?php
	  }
  }else{
	  ?>
	  <script type="text/javascript">alert("user tidak tersedia");
	  document.location="user_galeri.php";
	  </script>
	  <?php
  }
}
?>