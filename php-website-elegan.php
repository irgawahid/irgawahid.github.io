<?php

// Fungsi untuk membaca data login dari file teks
function read_login_data() {
  $file = fopen("login.txt", "r");
  $data = fgets($file);
  fclose($file);

  return explode(":", $data);
}

// Fungsi untuk memeriksa apakah username dan password valid
function is_login_valid($username, $password) {
  $data = read_login_data();

  return $username == $data[0] && $password == $data[1];
}

// Fungsi untuk memproses login
function process_login() {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if (is_login_valid($username, $password)) {
    // Login berhasil
    // Lakukan tindakan selanjutnya, misalnya mengarahkan pengguna ke halaman lain
  } else {
    // Login gagal
    // Tampilkan pesan kesalahan
  }
}

// Jika halaman ini diakses dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  process_login();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <form action="login.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
  </form>
</body>
</html>
