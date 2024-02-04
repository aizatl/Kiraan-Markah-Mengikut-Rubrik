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
  <title>Evaluasi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kiraMarkah'])) {


    $idea = $_POST["idea"];
    $Penyampaian = $_POST["Penyampaian"];
    $kreativeDanInovasi = $_POST["kreativeDanInovasi"];
    $kekemasan = $_POST["kekemasan"];

    // Process the data using if-else statements
    if ($idea && $Penyampaian && $kreativeDanInovasi && $kekemasan ) {
      $averageScore = round(($idea + $Penyampaian + $kreativeDanInovasi + $kekemasan) / 4);
      ?>
      <form class="" action="bb.php" method="">
        <?php
        echo "<center><h2>Nama Pelajar: $names[0]</h2>";
        echo "<center><h1>Tahap Penguasaan: $averageScore</h1>";
         ?>
      </form>
      <?php

    } else {
        // Handle the case where some fields are not filled
        echo "Isi semua dahulu";
    }
} else {



 ?>


  <?php
if($bilPelajar == 1 && $kategori == "Individu"){
   ?>
   <form action="markahPemerhatian.php" method="post">
     <h1>PEMBENTANGAN INDIVIDU</h1>
     <h3><?php echo $names[0]; ?></h3>
     <img src="pemerhatian-pembentangan-individu.png" alt="#"><br><br>
     <table>
       <tr>
           <th></th>
           <th>1</th>
           <th>2</th>
           <th>3</th>
           <th>4</th>
           <th>5</th>
           <th>6</th>
       </tr>
       <tr>
         <td>Idea</td>
         <td><input type="radio" id="idea" name="idea" value="1"></td>
         <td><input type="radio" id="idea" name="idea" value="2"></td>
         <td><input type="radio" id="idea" name="idea" value="3"></td>
         <td><input type="radio" id="idea" name="idea" value="4"></td>
         <td><input type="radio" id="idea" name="idea" value="5"></td>
         <td><input type="radio" id="idea" name="idea" value="6"></td>
       </tr>
       <tr>
         <td>Penyampaian</td>
         <td><input type="radio" id="Penyampaian" name="Penyampaian" value="1"></td>
         <td><input type="radio" id="Penyampaian" name="Penyampaian" value="2"></td>
         <td><input type="radio" id="Penyampaian" name="Penyampaian" value="3"></td>
         <td><input type="radio" id="Penyampaian" name="Penyampaian" value="4"></td>
         <td><input type="radio" id="Penyampaian" name="Penyampaian" value="5"></td>
         <td><input type="radio" id="Penyampaian" name="Penyampaian" value="6"></td>
       </tr>

       <tr>
         <td>Kreativiti dan Inovasi</td>
         <td><input type="radio" id="kreativeDanInovasi" name="kreativeDanInovasi" value="1"></td>
         <td><input type="radio" id="kreativeDanInovasi" name="kreativeDanInovasi" value="2"></td>
         <td><input type="radio" id="kreativeDanInovasi" name="kreativeDanInovasi" value="3"></td>
         <td><input type="radio" id="kreativeDanInovasi" name="kreativeDanInovasi" value="4"></td>
         <td><input type="radio" id="kreativeDanInovasi" name="kreativeDanInovasi" value="5"></td>
         <td><input type="radio" id="kreativeDanInovasi" name="kreativeDanInovasi" value="6"></td>
       </tr>

       <tr>
         <td>Kekemasan</td>
         <td><input type="radio" id="kekemasan" name="kekemasan" value="1"></td>
         <td><input type="radio" id="kekemasan" name="kekemasan" value="2"></td>
         <td><input type="radio" id="kekemasan" name="kekemasan" value="3"></td>
         <td><input type="radio" id="kekemasan" name="kekemasan" value="4"></td>
         <td><input type="radio" id="kekemasan" name="kekemasan" value="5"></td>
         <td><input type="radio" id="kekemasan" name="kekemasan" value="6"></td>
       </tr>
     </table>

     <input type="submit" id="submit" name="kiraMarkah" value="Submit">
   </form>
 <?php }
 elseif ($kategori == "Berkumpulan") {
   ?>
   <form action="kiraKira.php" method="post">
     <h1>PEMBENTANGAN INDIVIDU DALAM KUMPULAN</h1>
     <img src="pemerhatian-pembentangan-individu.png" alt="#"><br><br>
     <?php
for ($i = 0; $i < $bilPelajar; $i++) {
    ?>
    <table>
        <tr>
            <th colspan="7"><center><?php echo $names[$i]; ?></th>
        </tr>
        <tr>
            <th></th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
        </tr>
        <tr>
            <td>Idea</td>
            <?php for ($j = 1; $j <= 6; $j++) { ?>
                <td><input type="radio" id="idea_<?php echo $i; ?>" name="idea[<?php echo $i; ?>]" value="<?php echo $j; ?>"></td>
            <?php } ?>
        </tr>
        <tr>
            <td>Penyampaian</td>
            <?php for ($j = 1; $j <= 6; $j++) { ?>
                <td><input type="radio" id="Penyampaian_<?php echo $i; ?>" name="Penyampaian[<?php echo $i; ?>]" value="<?php echo $j; ?>"></td>
            <?php } ?>
        </tr>
        <tr>
            <td>Kreativiti dan Inovasi</td>
            <?php for ($j = 1; $j <= 6; $j++) { ?>
                <td><input type="radio" id="kreativeDanInovasi_<?php echo $i; ?>" name="kreativeDanInovasi[<?php echo $i; ?>]" value="<?php echo $j; ?>"></td>
            <?php } ?>
        </tr>
        <tr>
            <td>Kekemasan</td>
            <?php for ($j = 1; $j <= 6; $j++) { ?>
                <td><input type="radio" id="kekemasan_<?php echo $i; ?>" name="kekemasan[<?php echo $i; ?>]" value="<?php echo $j; ?>"></td>
            <?php } ?>
        </tr>
    </table>
    <?php
}
?>

      <h1>MARKAH SECARA KUMPULAN</h1>
      <img src="pemerhatian-pembentangan-kumpulan.png" alt="#"><br><br>
      <table>
        <tr>
          <th colspan="7"><center><?php echo $namaKumpulan; ?></th>
        </tr>
        <tr>
            <th></th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
        </tr>
        <tr>
          <td>idea</td>
          <td><input type="radio" id="ideaKumpulan" name="ideaKumpulan" value="1"></td>
          <td><input type="radio" id="ideaKumpulan" name="ideaKumpulan" value="2"></td>
          <td><input type="radio" id="ideaKumpulan" name="ideaKumpulan" value="3"></td>
          <td><input type="radio" id="ideaKumpulan" name="ideaKumpulan" value="4"></td>
          <td><input type="radio" id="ideaKumpulan" name="ideaKumpulan" value="5"></td>
          <td><input type="radio" id="ideaKumpulan" name="ideaKumpulan" value="6"></td>
        </tr>
        <tr>
          <td>Penyampaian</td>
          <td><input type="radio" id="PenyampaianKumpulan" name="PenyampaianKumpulan" value="1"></td>
          <td><input type="radio" id="PenyampaianKumpulan" name="PenyampaianKumpulan" value="2"></td>
          <td><input type="radio" id="PenyampaianKumpulan" name="PenyampaianKumpulan" value="3"></td>
          <td><input type="radio" id="PenyampaianKumpulan" name="PenyampaianKumpulan" value="4"></td>
          <td><input type="radio" id="PenyampaianKumpulan" name="PenyampaianKumpulan" value="5"></td>
          <td><input type="radio" id="PenyampaianKumpulan" name="PenyampaianKumpulan" value="6"></td>
        </tr>

        <tr>
          <td>Kreativiti dan Inovasi</td>
          <td><input type="radio" id="kreativeDanInovasiKumpulan" name="kreativeDanInovasiKumpulan" value="1"></td>
          <td><input type="radio" id="kreativeDanInovasiKumpulan" name="kreativeDanInovasiKumpulan" value="2"></td>
          <td><input type="radio" id="kreativeDanInovasiKumpulan" name="kreativeDanInovasiKumpulan" value="3"></td>
          <td><input type="radio" id="kreativeDanInovasiKumpulan" name="kreativeDanInovasiKumpulan" value="4"></td>
          <td><input type="radio" id="kreativeDanInovasiKumpulan" name="kreativeDanInovasiKumpulan" value="5"></td>
          <td><input type="radio" id="kreativeDanInovasiKumpulan" name="kreativeDanInovasiKumpulan" value="6"></td>
        </tr>

        <tr>
          <td>Kerjasama</td>
          <td><input type="radio" id="kerjasamaKumpulan" name="kerjasamaKumpulan" value="1"></td>
          <td><input type="radio" id="kerjasamaKumpulan" name="kerjasamaKumpulan" value="2"></td>
          <td><input type="radio" id="kerjasamaKumpulan" name="kerjasamaKumpulan" value="3"></td>
          <td><input type="radio" id="kerjasamaKumpulan" name="kerjasamaKumpulan" value="4"></td>
          <td><input type="radio" id="kerjasamaKumpulan" name="kerjasamaKumpulan" value="5"></td>
          <td><input type="radio" id="kerjasamaKumpulan" name="kerjasamaKumpulan" value="6"></td>
        </tr>

        <tr>
          <td>Kekemasan</td>
          <td><input type="radio" id="kekemasanKumpulan" name="kekemasanKumpulan" value="1"></td>
          <td><input type="radio" id="kekemasanKumpulan" name="kekemasanKumpulan" value="2"></td>
          <td><input type="radio" id="kekemasanKumpulan" name="kekemasanKumpulan" value="3"></td>
          <td><input type="radio" id="kekemasanKumpulan" name="kekemasanKumpulan" value="4"></td>
          <td><input type="radio" id="kekemasanKumpulan" name="kekemasanKumpulan" value="5"></td>
          <td><input type="radio" id="kekemasanKumpulan" name="kekemasanKumpulan" value="6"></td>
        </tr>
    </table>
     <input type="submit" id="submit" name="kiraMarkahKumpulanPemerhatian" value="Hantar">
   </form>
   <?php
 } ?>
</body>
</html>
<?php } ?>
