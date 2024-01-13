<?php
include 'config.php';
if (isset($_POST['submit'])) {
  $id_member = $_POST['id_member'];
  $nm_member = $_POST['nm_member'];
  $alamat_member = $_POST['alamat_member'];
  $telepon = $_POST['telepon'];
  $email = $_POST['email'];
  $NIK = $_POST['NIK'];

  //menentukan ekstension gambar
  $ekstensi_diperbolehkan  = array('png', 'jpg');

  //mengambil nama file
  $nama = $_FILES['petugasFoto']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran  = $_FILES['petugasFoto']['size'];
  $file_tmp = $_FILES['petugasFoto']['tmp_name'];

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 1044070) {
      //menyimpan file ke folder image		
      move_uploaded_file($file_tmp, '../images/' . $nama);
      $query = mysqli_query($conn, "INSERT INTO login VALUES(NULL,'$id_member', '$nm_member', '$alamat_member','$telepon','$email', '$NIK')");
      if ($query) {
        echo "<script>alert('Data berhasil disimpan!')</script>";
        echo "<script>location='index.php'</script>";
      } else {
        echo "<script>alert('Data tidak dapat disimpan!')</script>";
        echo "<script>location='tambah.php'</script>";
      }
    } else {
      echo "<script>alert('Data melebihi 1MB!')</script>";
      echo "<script>location='tambah.php'</script>";
    }
  } else {
    echo "<script>alert('ekstensi gambar harus png atau jpg')</script>";
    echo "<script>location='index.php'</script>";
  }
}
