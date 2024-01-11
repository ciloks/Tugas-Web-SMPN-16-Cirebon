<?php
$host="localhost";
$user="root";
$password="";
$db="Sekolah";
$link=mysqli_connect($host, $user, $password, $db);

function query($sql){
    global $link;

    $hsl=mysqli_query($link,$sql);
    $rows=[];

    while($row= mysqli_fetch_assoc($hsl)){
        $rows[]=$row;
    }
    return $rows;
}
?>
