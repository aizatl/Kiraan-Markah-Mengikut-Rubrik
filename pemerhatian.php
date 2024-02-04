<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
//terima
$email = $_SESSION['email'];
$namaGuru = $_SESSION['namaGuru'];
$kategori = $_SESSION['kategori'];
$jenisPentaksiran = $_SESSION['jenisPentaksiran'];
$namaSekolah = $_SESSION['namaSekolah'];
$kelas = $_SESSION['kelas'];
$tema = $_SESSION['tema'];
$tajuk = $_SESSION['tajuk'];
$names = $_SESSION['names'];
$bilPelajar = $_SESSION['bilPelajar'];
$namaKumpulan = $_SESSION['namaKumpulan'];
//bagi
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
 ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Pemerhatian</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
    </head>
    <body>
     <form action="markahPemerhatian.php" method="post">
       <label for="">Kategori Pentaksiran Pemerhatian:</label>
       <select name="ketegoriPentaksiranPemerhatian" id="ketegoriPentaksiranPemerhatian" required>
         <option value="" disabled selected>Pilih Satu</option>
         <option value="Lisan">Pembentangan</option>
       </select>
       <input type="submit" id="submit" value="Seterusnya">
     </form>
    </body>
  </html>
