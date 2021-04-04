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

//jadikan variabel dari html
$nama = $_POST['nama'];

//harus terisi semua
if (!empty($nama)) {
    //menambahkan tabel pegawai
  $tambahtabel = "DELETE FROM PEGAWAI WHERE NAMA='$nama'";

  //cek apakah program berhasil dijalankan
  if (mysqli_query($conn, $tambahtabel)) {
    echo "Data anda berhasil dihapus <br><br>";
  }
  else {
    echo "Data anda gagal dihapus : " . $isitabel ."<br>" . mysqli_error($conn);
  }
} else {
  echo "Nama Tidak Terisi<br><br>";
}

//ambil data dari db
$sql = "SELECT NAMA, DEPARTEMEN_ID, ASAL FROM PEGAWAI";

//hasilnya
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  //data dari tiap baris
  while ($row = mysqli_fetch_assoc($result)) {
    echo "Nama: " . $row["NAMA"] . " - Departemen: " . $row["DEPARTEMEN_ID"] . " - Asal: " .$row["ASAL"] . "<br>";
  }
}else {
  echo "0 results";
}

 ?>
