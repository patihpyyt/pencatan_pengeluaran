<?php

include 'uang.php';

if(isset($_POST['submit'])){
$dete = $_POST['dete'];
$kategori = $_POST['kategori'];
$pengeluaran = $_POST['pengeluaran'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, " INSERT INTO pengeluaran (tanggal, kategori, jumlah, keterangan) VALUES ('$dete' , '$kategori', '$pengeluaran', '$keterangan')");


 echo "data behasil ditambahkan";
}
?>