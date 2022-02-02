<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>alert('Selamat Anda Telah Berhasil Registrasi!')</script>";
  } else {
    echo mysqli_error($koneksi);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Native Pwpb</title>
</head>

<body>

  <div class="container">
    <h3>Register Form</h3>

    <form action="" method="POST">
    <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-login" placeholder="Masukkan Nama" required />
    
      <label>Email</label>
      <input type="text" name="email" class="form-login" placeholder="Masukkan Email" required />
     
      <label>Username</label>
      <input type="text" name="username" class="form-login" placeholder="Masukkan Username" required />
      <label>Password</label>
      <input type="password" name="password" class="form-login" placeholder="Masukkan Password" required />
      <label>No Telepon</label>
      <input type="number" name="telp" class="form-login" placeholder="Masukkan No Telepon" required />

      <button type="submit" name="register" class="btn-submit"><b>Sign Up</b></button>

      <div class="registrasi">
        Already have an account?
        <a href="index.php" class="register-link">Login here </a>

      </div>

    </form>
  </div>

</body>

</html>