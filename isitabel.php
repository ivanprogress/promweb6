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

//isi tabel
$tabel = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4'), ('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')";

//cek apakah program berhasil dijalankan
if (mysqli_query($conn, $tabel)) {
  echo "New record created successfully";
}
else {
  echo "Error : " . $tabel ."<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
