<?php
$koneksi = mysqli_connect("localhost","root","","ukk_kasir");

//Check connection
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>