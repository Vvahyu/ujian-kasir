<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h1>Tambah Data User</h1>
  <form action="tambahProsesuser.php" method="post">
    <label>Username :<br>
      <input type="text" name="user" required autofocus>
    </label><br>
    <label>Password :<br>
      <input type="password" name="password1" required>
    </label><br>
    <label>Confirm Password :<br>
      <input type="password" name="password2" required>
    </label><br>
    <label>Level :<br>
      <select name="level">
       <option value="admin">admin</option>
       <option value="petugas">petugas</option>
       <option value="guest">guest</option>
      </select>
    </label><br>
    <button><a href="index.php">Kembali</a></button><input type="submit" name="submit">
  </form>
</body>

</html>