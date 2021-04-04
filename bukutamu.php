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

//buat tabel
$tabel = "CREATE TABLE buku_tamu (
ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAMA VARCHAR(200) NOT NULL,
EMAIL VARCHAR(50) NOT NULL,
ISI TEXT
)";

//cek apakah program berhasil dijalankan
if (mysqli_query($conn, $tabel)) {
  echo "Table created successfully";
}
else {
  echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
