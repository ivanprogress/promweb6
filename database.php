<?php
//deklarasi variabel
$servername = "localhost";
$username = "root";
$password = "";

//mengkoneksi
$conn = mysqli_connect($servername, $username, $password);

//cek Koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//membuat database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
}
else {
  echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
