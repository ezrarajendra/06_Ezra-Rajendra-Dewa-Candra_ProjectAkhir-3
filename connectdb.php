<?php
$koneksi = mysqli_connect("localhost","root","mysql","db_hov");
if (mysqli_connect_errno()){
    echo "KONEKSI DATABASE GAGAL : " . mysqli_connect_error();
}
?>