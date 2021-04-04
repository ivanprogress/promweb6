<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php //deklarasi skrip php
      $con = mysqli_connect("localhost","root","","my_db");

      //mengecek koneksi
      if(mysqli_connect_error()){
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
        exit();
      }
      else {
        echo "Koneksi berhasil";
      }
     ?>
  </body>
</html>
