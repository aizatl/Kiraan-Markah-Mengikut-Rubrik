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
$kelas = $_POST["kelas"]; //terimaPost
$tema = $_POST["tema"]; //terimaPost
$tajuk = $_POST["tajuk"]; //terimaPost
$names = array_fill(0, $bilPelajar, null);

for ($i=1; $i <=$bilPelajar; $i++) {
  $names[$i-1] =  $_POST["namaPelajar".$i.""]; //terimaPost
}


echo "Email: " . $email . "<br>";
echo "Nama Guru: " . $namaGuru . "<br>";
echo "Bilangan Pelajar: " . $bilPelajar . "<br>";
echo "Kategori: " . $kategori . "<br>";
echo "Jenis Pentaksiran: " . $jenisPentaksiran . "<br>";

echo "Nama Sekolah (from POST): " . $namaSekolah . "<br>";
echo "Kelas (from POST): " . $kelas . "<br>";
echo "Tema (from POST): " . $tema . "<br>";
echo "Tajuk (from POST): " . $tajuk . "<br>";

for ($i = 0; $i < $bilPelajar; $i++) {
    echo "Student " . ($i+1) . ": " . $names[$i] . "<br>";
}
 ?>
