<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$universitas = $_POST['universitas'];
$jurusan = $_POST['jurusan'];
$whatsapp = $_POST['whatsapp'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into peserta values('','$nama','$universitas','$jurusan','$whatsapp','$alamat')");
 
// mengalihkan halaman kembali ke home.php
header("location:home.php");
 
?>