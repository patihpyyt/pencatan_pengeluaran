<?php
$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "uang";

$koneksi = mysqli_connect($hostname, $user, $password, $db_name);

if (!$koneksi){
    die("koneksi gagal" . mysqli_connect_error());
}
?>