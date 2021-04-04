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
$tabel = "CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kode VARCHAR(3) NOT NULL,
negara VARCHAR(30) NOT NULL,
champion int(3)
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
