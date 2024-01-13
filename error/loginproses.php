<?php

session_start();

include 'config.php';

$user = $_POST['user'];
$pass = $_POST['pass'];


$login = mysqli_query($koneksi, "SELECT * from user where username='$user' and password='$pass'");
$cek = mysqli_num_rows($login);

if($cek > 0){

$data = mysqli_fetch_assoc($login);

if($data['level']=="admin"){

    $_SESSION['user'] = $user;
    $_SESSION['level'] = "admin";
    header("location:index.php");

}else if($data['level']=="petugas"){

    $_SESSION['user'] = $user;
    $_SESSION['level'] = "petugas";
    header("location:index.php");

    }else{

    header("location:index.php?pesan=gagal");
}

    }else{

    header("location:index.php?pesan=gagal");
}

?>