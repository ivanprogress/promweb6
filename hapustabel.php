<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- form di table utk submmit hapus data untuk tabel  -->
    <form action="hapustabelact.php" method="post">
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="130">Masukkan nama yang ingin anda hapus: </td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="btnSubmit" value="Hapus"> <!-- button submit -->
            <input type="reset" name="reset" value="Reset"> <!-- button reset  -->
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
