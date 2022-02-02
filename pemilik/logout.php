<?php

session_start();
unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['telp']);

session_destroy();
echo "<script>alert('Anda telah keluar dari halaman Pemilik');document.location='../index.php'</script>";