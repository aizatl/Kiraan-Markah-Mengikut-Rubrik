<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
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
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Evaluasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
  </head>
  <body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kiraMarkahKumpulanPemerhatian'])) {
  //kumpulan
  $ideaKumpulan = $_POST["ideaKumpulan"];
  $PenyampaianKumpulan = $_POST["PenyampaianKumpulan"];
  $kreativeDanInovasiKumpulan = $_POST["kreativeDanInovasiKumpulan"];
  $kerjasamaKumpulan = $_POST["kerjasamaKumpulan"];
  $kekemasanKumpulan = $_POST["kekemasanKumpulan"];

  $tahapPenguasaanKumpulan = round(($ideaKumpulan + $PenyampaianKumpulan + $kreativeDanInovasiKumpulan + $kerjasamaKumpulan + $kekemasanKumpulan) / 5);
  //Individu
  for ($i = 0; $i < $bilPelajar; $i++) {
      $ideaValuesArray[$i] = isset($_POST['idea'][$i]) ? $_POST['idea'][$i] : array();
      $penyampaianValuesArray[$i] = isset($_POST['Penyampaian'][$i]) ? $_POST['Penyampaian'][$i] : array();
      $kreativeDanInovasiValuesArray[$i] = isset($_POST['kreativeDanInovasi'][$i]) ? $_POST['kreativeDanInovasi'][$i] : array();
      $kekemasanValuesArray[$i] = isset($_POST['kekemasan'][$i]) ? $_POST['kekemasan'][$i] : array();
      $tahapPenguasaanIndividu[$i] = round(($ideaValuesArray[$i] + $penyampaianValuesArray[$i] + $kreativeDanInovasiValuesArray[$i] + $kekemasanValuesArray[$i]) / 4);
  }
  ?>
  <form class="" action="bb.php" method="">
    <?php
    echo "<center><h2>Nama Kumpulan: $namaKumpulan</h2>";
    echo "<center><h2>Tahap Penguasaan Kumpulan: $tahapPenguasaanKumpulan</h2>";
    echo "<center><h2>Tahap Penguasaan Individu </h2>";
    for ($i = 0; $i < $bilPelajar; $i++) {
      echo "<center><h2>Tahap Penguasaan $names[$i] : $tahapPenguasaanIndividu[$i]</h2>";
    }
     ?>
  </form>
  <?php


}else{
  echo "tak masuk";
}
 ?>


   </body>
 </html>
