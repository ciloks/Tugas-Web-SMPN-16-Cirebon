<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'Koneksi.php';
    $user=$_POST['user'];
    $password=$_POST['password'];
    $sql="INSERT INTO admin (user,password) VALUES ('$user','$password')";
    $query=mysqli_query($db_link,$sql);
    if($query){
        echo "
    <script>
    alert('Data Berhasil di Tambah');
    document.location.href = 'tampil_siswa.php';
    </script>
    ";
    }else{
        echo"
        <script> 
        alert('Data Berhasil di Tambah');
        document.location.href = 'tampil_siswa.php';
        </script>
    ";
    }
    ?>
    
</body>
</html>