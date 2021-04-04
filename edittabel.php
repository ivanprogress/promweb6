<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- form di table utk submmit data untuk tabel  -->
    <form action="edittabelact.php" method="post">
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="130">ID anda : </td>
          <td><input type="text" name="id"></td>
        </tr>
        <tr>
          <td width="130">Nama : </td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td width="130">Departemen : </td>
          <td><input type="text" name="departemen"></td>
        </tr>
        <tr>
          <td width="130">Asal : </td>
          <td><input type="text" name="asal"></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="btnSubmit" value="Submit"> <!-- button submit -->
            <input type="reset" name="reset" value="Reset"> <!-- button reset  -->
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
