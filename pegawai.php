<?php
//deklarasi variabel
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promweb6";

//mengkoneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

//cek Koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//buat tabel departemen
$buattabel = "CREATE TABLE DEPARTEMEN
(
   DEPARTEMEN_ID        varchar(5) not null  comment '',
   NAMA_DEPARTEMEN      varchar(20)  comment '',
   PRIMARY KEY (DEPARTEMEN_ID)
)";
//cek apakah program berhasil dijalankan
if (mysqli_query($conn, $buattabel)) {
  echo "Tabel departemen telah dibuat"."<br>";
}
else {
  echo "Tabel departemen gagal dibuat: " . mysqli_error($conn)."<br>";
}

//buat tabel pegawai
$buattabel = "CREATE TABLE PEGAWAI
(
   ID                   int(5) not null AUTO_INCREMENT comment '',
   NAMA                 varchar(20)  comment '',
   DEPARTEMEN_ID        varchar(5)  comment '',
   ASAL                 varchar(20)  comment '',
   PRIMARY KEY (ID)
)";
//cek apakah program berhasil dijalankan
if (mysqli_query($conn, $buattabel)) {
  echo "Tabel pegawai telah dibuat"."<br>";
}
else {
  echo "Tabel pegawai gagal dibuat: " . mysqli_error($conn)."<br>";
}


// relasi
$buattabel = "ALTER TABLE PEGAWAI ADD constraint FK_PEGAWAI_BEKERJA_DEPARTEM foreign key (DEPARTEMEN_ID)
      references DEPARTEMEN (DEPARTEMEN_ID) on delete restrict on update restrict;
";
//cek apakah program berhasil dijalankan
if (mysqli_query($conn, $buattabel)) {
  echo "Tabel relasi telah dibuat"."<br>";
}
else {
  echo "Tabel relasi gagal dibuat: " . mysqli_error($conn)."<br>";
}


//isi tabel departemen
$isitabel = "INSERT INTO DEPARTEMEN (DEPARTEMEN_ID, NAMA_DEPARTEMEN)
VALUES ('5', 'Direktur'), ('4', 'CEO'), ('3', 'Sekretaris'), ('2', 'Bendahara'), ('1', 'Pembicara')";
//cek apakah program berhasil dijalankan
if (mysqli_query($conn, $isitabel)) {
  echo "Tabel departemen sukses terisi <br>";
}
else {
  echo "Tabel departemen Error : " . $isitabel ."<br>" . mysqli_error($conn);
}
//isi tabel pegawai
$isitabel = "INSERT INTO PEGAWAI (NAMA, DEPARTEMEN_ID, ASAL)
VALUES ('Ivan Faiz', '5', 'Surabaya'), ('Elon Musk', '4', 'New York')
, ('Mark Zuck', '2', 'Washington'), ('Hillary A Ton', '1', 'London')
,('Steve Pekerjaan', '3', 'Lembah Silikon')";
//cek apakah program berhasil dijalankan
if (mysqli_query($conn, $isitabel)) {
  echo "Tabel pegawai sukses terisi <br>";
}
else {
  echo "Tabel pegawai Error : " . $isitabel ."<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
