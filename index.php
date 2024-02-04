<?php session_start(); ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Home</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
   </head>
   <body>
    <form action="pentaksiran.php" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required >

      <label for="namaGuru">Nama Guru:</label>
      <input type="text" id="namaGuru" name="namaGuru" required >
      <input type="submit" id="submit" value="Seterusnya">
    </form>
   </body>
 </html>
