<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
$email = $_SESSION['email'];
$namaGuru = $_SESSION['namaGuru'];//terima
$bilPelajar = $_SESSION['bilPelajar'];//terima
$kategori = $_SESSION['kategori'];//terima
$jenisPentaksiran = $_SESSION['jenisPentaksiran'];//terima
$namaSekolah = $_POST["namaSekolah"]; //terimaPost
$namaKumpulan = $_POST["namaKumpulan"]; //terimaPost
$kelas = $_POST["kelas"]; //terimaPost
$tema = $_POST["tema"]; //terimaPost
$tajuk = $_POST["tajuk"]; //terimaPost
$names = array_fill(0, $bilPelajar, null);
for ($i=1; $i <=$bilPelajar; $i++) {
  $names[$i-1] =  $_POST["namaPelajar".$i.""]; //terimaPost
}
//bagiSession
$_SESSION['email'] = $email;
$_SESSION['namaGuru'] = $namaGuru;
$_SESSION['bilPelajar'] = $bilPelajar;
$_SESSION['kategori'] = $kategori;
$_SESSION['jenisPentaksiran'] = $jenisPentaksiran;
$_SESSION['namaSekolah'] = $namaSekolah;
$_SESSION['kelas'] = $kelas;
$_SESSION['tema'] = $tema;
$_SESSION['tajuk'] = $tajuk;
$_SESSION['names'] = $names;
$_SESSION['namaKumpulan'] = $namaKumpulan;

if($jenisPentaksiran == "Pemerhatian"){
  echo "<script>
  window.location.href='pemerhatian.php';
  </script>";
}
?>
