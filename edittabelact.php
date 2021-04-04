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
$id = $_POST['id'];
$nama = $_POST['nama'];
$departemen = $_POST['departemen'];
$asal = $_POST['asal'];

//harus terisi semua
if (!empty($nama) & !empty($departemen) & !empty($asal) ) {
    //menambahkan tabel pegawai
  $tambahtabel = "UPDATE PEGAWAI SET NAMA='$nama', DEPARTEMEN_ID='$departemen', ASAL='$asal' WHERE ID='$id'";

  //cek apakah program berhasil dijalankan
  if (mysqli_query($conn, $tambahtabel)) {
    echo "Data anda berhasil di update <br><br>";
  }
  else {
    echo "Data anda gagal di update : " . $isitabel ."<br>" . mysqli_error($conn);
  }
} else {
  echo "Semuanya Harus Terisi<br><br>";
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
