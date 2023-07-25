<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$universitas = $_POST['universitas'];
$jurusan = $_POST['jurusan'];
$whatsapp = $_POST['whatsapp'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE peserta SET nama='$nama',universitas='$universitas',jurusan='$jurusan',whatsapp='$whatsapp',alamat='$alamat'");
 
// mengalihkan halaman kembali ke home.php
header("location:home.php");
 
?>