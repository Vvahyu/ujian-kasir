<?php
include 'config.php';
if (isset($_POST['submit'])) {
  $user = $_POST['user'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];
  $level = $_POST['level'];

  $query = "SELECT user FROM login WHERE user='$user'";
  $result = mysqli_query($conn, $query);
  if ($d = mysqli_num_rows($result) != 0) {
    echo "<script>alert('Username sudah ada!')</script>";
    echo "<script>location='tambah.php'</script>";
  } else {
    if ($pass1 != $pass2) {
      echo "<script>alert('Password tidak sama!')</script>";
      echo "<script>location='tambah.php'</script>";
    } else {
      $query = "INSERT INTO login VALUES (null, '$user', '$pass1', '$level')";
      $result = mysqli_query($conn, $query);
      echo "<script>alert('Data berhasil disimpan!')</script>";
      echo "<script>location='index.php'</script>";
    }
  }
}
