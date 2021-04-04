<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //deklarasi variabel
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    //mengkoneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //cek Koneksi
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    //ambil data dari db
    $sql = "SELECT kode, negara, champion FROM liga";

    //hasilnya
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      //data dari tiap baris
      while ($row = mysqli_fetch_assoc($result)) {
        echo "Kode: " . $row["kode"] . " - Negara: " . $row["negara"] . $row["champion"] . "<br>";
      }
    }else {
      echo "0 results";
    }

    mysqli_close($conn);
     ?>
  </body>
</html>
