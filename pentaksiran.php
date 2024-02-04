<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
$email = $_POST["email"]; //terima
$namaGuru = $_POST["namaGuru"]; //terima
$_SESSION['email'] = $email;//bagi
$_SESSION['namaGuru'] = $namaGuru;//bagi
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pentaksiran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
    <style media="screen">
      input[type="email"], input[type="text"], input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
   <form action="maklumatMurid.php" method="post">
     <center><h1>Pentaksiran</h1></center>
     <label for="jenisPentaksiran">Jenis Pentaksiran:</label>
     <select name="jenisPentaksiran" id="jenisPentaksiran" required>
       <option value="" disabled selected>Pilih Satu</option>
       <option value="Lisan">Lisan</option>
       <option value="Pemerhatian">Pemerhatian</option>
       <option value="Penulisan">Penulisan</option>
     </select>

     <label for="kategori">Kategori:</label>
     <select name="kategori" id="kategori" required>
       <option value="" disabled selected>Pilih Satu</option>
       <option value="Individu">Individu</option>
       <option value="Berkumpulan">Berkumpulan</option>
     </select>
     <div id="additionalContent" style='display: none;'>
       <label for="bilPelajar">Bilangan Pelajar dalam Kumpulan:</label>
       <input type="number" id="bilPelajar" name="bilPelajar" value = "1" min = "1" required >
    </div>
    <script>
  document.getElementById("kategori").addEventListener("change", function() {
    var selectElement = document.getElementById("kategori");
    var additionalContent = document.getElementById("additionalContent");

    if (selectElement.value === "Berkumpulan") {
      additionalContent.style.display = "block";
    } else {
      additionalContent.style.display = "none";
    }
  });
</script>
     <input type="submit" id="submit" value="Seterusnya">
   </form>

  </body>
</html>
