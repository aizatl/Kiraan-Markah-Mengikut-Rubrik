<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
$email = $_SESSION['email'];//terima
$namaGuru = $_SESSION['namaGuru'];//terima
$bilPelajar = $_POST["bilPelajar"]; //terimaPost
$kategori = $_POST["kategori"]; //terimaPost
$jenisPentaksiran = $_POST["jenisPentaksiran"]; //terimaPost


$_SESSION['email'] = $email;//bagi
$_SESSION['namaGuru'] = $namaGuru;//bagi
$_SESSION['bilPelajar'] = $bilPelajar;//bagi
$_SESSION['kategori'] = $kategori;//bagi
$_SESSION['jenisPentaksiran'] = $jenisPentaksiran;//bagi
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Butiran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
  </head>
  <body>
   <form action="checkPath.php" method="post">
     <center><h1>Butiran</h1></center>
     <?php
     if($kategori == "Berkumpulan"){
       for ($i=1; $i <= $bilPelajar ; $i++) {
         echo "<label for='namaPelajar".$i."'>Nama Pelajar ".($i).":</label>";
         echo "<input type='text' id='namaPelajar".$i."' name='namaPelajar".$i."' required >";
       }
     }else if($kategori == "Individu"){
       for ($i=1; $i <= $bilPelajar ; $i++) {
       echo "<label for='namaPelajar'>Nama Pelajar:</label>";
       echo "<input type='text' id='namaPelajar".$i."' name='namaPelajar".$i."' required >";
      }
     }
      ?>
      <label for="">Nama Kumpulan:</label>
      <input type="text" id="namaKumpulan" name="namaKumpulan" required >

     <label for="namaSekolah">Nama Sekolah:</label>
     <input type="text" id="namaSekolah" name="namaSekolah" required >

     <label for="">Kelas:</label>
     <input type="text" id="kelas" name="kelas" required >

     <label for="tema">Tema:</label>
     <select name="tema" id="tema" required>
      <option value="" disabled selected>Pilih Satu</option>
      <option value="Kemahiran Geografi">Kemahiran Geografi</option>
      <option value="Geografi Fizikal">Geografi Fizikal</option>
      <option value="Geografi Manusia">Geografi Manusia</option>
      <option value="Geografi Kawasan">Geografi Kawasan</option>
      <option value="Isu dan Pengurusan Alam Sekitar">Isu dan Pengurusan Alam Sekitar</option>
    </select>

    <label for="tajuk">Tajuk (rujuk Standard Kandungan DSKP):</label>
    <img src="tajuk.png" alt="#"><br><br>
    <input type="text" id="tajuk" name="tajuk" required >
     <input type="submit" id="submit" value="Seterusnya">
   </form>
  </body>
</html>
