<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Teacher Evaluation Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the POST data
    $namaGuru = $_POST["namaGuru"];
    $pendahuluan = $_POST["pendahuluan"];
    $isiHuraian = $_POST["isiHuraian"];
    $penyampaian = $_POST["penyampaian"];
    $kejelasanDanIntonasiSuara = $_POST["KejelasandanIntonasiSuara"];
    $disiplinMasa = $_POST["disiplinMasa"];
    $penampilan = $_POST["penampilan"];

    // Process the data using if-else statements
    if ($pendahuluan && $isiHuraian && $penyampaian && $kejelasanDanIntonasiSuara && $disiplinMasa && $penampilan) {
      //$averageScore = intval(($pendahuluan + $isiHuraian + $penyampaian + $kejelasanDanIntonasiSuara + $disiplinMasa + $penampilan) / 6);
      $averageScore = round(($pendahuluan + $isiHuraian + $penyampaian + $kejelasanDanIntonasiSuara + $disiplinMasa + $penampilan) / 6);

      echo "<center><p style='font-size: 18px; font-weight: bold;'>Nama Guru: $namaGuru</p>";
      echo "<p style='font-size: 16px;'>Average Score: $averageScore</p>";

    } else {
        // Handle the case where some fields are not filled
        echo "Please fill out all fields in the form.";
    }
} else {



 ?>

<body>
  <form action="secondPage.php" method="post">
    <label for="namaGuru">Nama Guru:</label>
    <input type="text" id="namaGuru" name="namaGuru" required><br><br>

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
        <td>Pendahuluan</td>
        <td><input type="radio" id="pendahuluan" name="pendahuluan" value="1"></td>
        <td><input type="radio" id="pendahuluan" name="pendahuluan" value="2"></td>
        <td><input type="radio" id="pendahuluan" name="pendahuluan" value="3"></td>
        <td><input type="radio" id="pendahuluan" name="pendahuluan" value="4"></td>
        <td><input type="radio" id="pendahuluan" name="pendahuluan" value="5"></td>
        <td><input type="radio" id="pendahuluan" name="pendahuluan" value="6"></td>
      </tr>
      <tr>
        <td>Isi dan Huraian</td>
        <td><input type="radio" id="isiHuraian" name="isiHuraian" value="1"></td>
        <td><input type="radio" id="isiHuraian" name="isiHuraian" value="2"></td>
        <td><input type="radio" id="isiHuraian" name="isiHuraian" value="3"></td>
        <td><input type="radio" id="isiHuraian" name="isiHuraian" value="4"></td>
        <td><input type="radio" id="isiHuraian" name="isiHuraian" value="5"></td>
        <td><input type="radio" id="isiHuraian" name="isiHuraian" value="6"></td>
      </tr>

      <tr>
        <td>Penyampaian</td>
        <td><input type="radio" id="penyampaian" name="penyampaian" value="1"></td>
        <td><input type="radio" id="penyampaian" name="penyampaian" value="2"></td>
        <td><input type="radio" id="penyampaian" name="penyampaian" value="3"></td>
        <td><input type="radio" id="penyampaian" name="penyampaian" value="4"></td>
        <td><input type="radio" id="penyampaian" name="penyampaian" value="5"></td>
        <td><input type="radio" id="penyampaian" name="penyampaian" value="6"></td>
      </tr>

      <tr>
        <td>Kejelasan dan Intonasi Suara</td>
        <td><input type="radio" id="KejelasandanIntonasiSuara" name="KejelasandanIntonasiSuara" value="1"></td>
        <td><input type="radio" id="KejelasandanIntonasiSuara" name="KejelasandanIntonasiSuara" value="2"></td>
        <td><input type="radio" id="KejelasandanIntonasiSuara" name="KejelasandanIntonasiSuara" value="3"></td>
        <td><input type="radio" id="KejelasandanIntonasiSuara" name="KejelasandanIntonasiSuara" value="4"></td>
        <td><input type="radio" id="KejelasandanIntonasiSuara" name="KejelasandanIntonasiSuara" value="5"></td>
        <td><input type="radio" id="KejelasandanIntonasiSuara" name="KejelasandanIntonasiSuara" value="6"></td>
      </tr>

      <tr>
        <td>Disiplin Masa</td>
        <td><input type="radio" id="disiplinMasa" name="disiplinMasa" value="1"></td>
        <td><input type="radio" id="disiplinMasa" name="disiplinMasa" value="2"></td>
        <td><input type="radio" id="disiplinMasa" name="disiplinMasa" value="3"></td>
        <td><input type="radio" id="disiplinMasa" name="disiplinMasa" value="4"></td>
        <td><input type="radio" id="disiplinMasa" name="disiplinMasa" value="5"></td>
        <td><input type="radio" id="disiplinMasa" name="disiplinMasa" value="6"></td>
      </tr>

      <tr>
        <td>Penampilan</td>
        <td><input type="radio" id="penampilan" name="penampilan" value="1"></td>
        <td><input type="radio" id="penampilan" name="penampilan" value="2"></td>
        <td><input type="radio" id="penampilan" name="penampilan" value="3"></td>
        <td><input type="radio" id="penampilan" name="penampilan" value="4"></td>
        <td><input type="radio" id="penampilan" name="penampilan" value="5"></td>
        <td><input type="radio" id="penampilan" name="penampilan" value="6"></td>
      </tr>
    </table>

    <input type="submit" id="submit" value="Submit">
  </form>
</body>
</html>
<?php } ?>
