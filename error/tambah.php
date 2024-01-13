<?php
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah data</title>
</head>

<body>
  <h1>Tambah Data Petugas</h1>
  <form action="tambahProses.php" method="post" enctype="multipart/form-data">
    <label>id_member<br>
      <select name="id_member">
        <?php
        //menyeleksi data user
        $query = "SELECT * FROM member";
        $result = mysqli_query($conn, $query);
        while ($d = mysqli_fetch_assoc($result)) {
        ?>
          <option value="<?php echo $d['id']; ?>"><?php echo $d['id']; ?> <?php echo $d['level']; ?></option>
        <?php
        }
        ?>
      </select>
    </label><br>
    <label>nm_member<br>
      <input type="text" name="nm_member" required>
    </label><br>
    <label>alamat_member<br>
      <input type="text" name="alamat_member" required>
    </label><br>
    <label>telepon<br>
      <input type="text" name="telepon" required>
    </label><br>
    <label>email<br>
      <input type="text" name="email" required>
    </label><br>
    <label>NIK<br>
      <input type="text" name="NIK" required>
    </label><br>
    <label>Foto :<br>
      <input type="file" name="gambar" required>
    </label><br>
    <button><a href="index.php">Kembali</a></button>
    <input type="submit" name="submit">
  </form>
</body>

</html>