<?php
require 'functions.php';

$password = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);

$pass = $password;

$cek_user = mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE username = '$username' and password = '$password'");

$user_valid = mysqli_num_rows($cek_user);

if($user_valid > 0){

    $data = mysqli_fetch_assoc($cek_user);
    session_start();       
       $_SESSION["id_level"]=$data["id_level"];
      
	   $_SESSION["username"]=$data["username"];
	   $_SESSION["password"]=$data["password"];
      

       if($data['id_level']==1){
           header("location:pemilik/home.php");
       }
       else if($data['id_level']==2){
        header("location:pegawai/home.php");

       }else if($data['id_level']==3){
        header("location:pembeli/home.php");
       }
}else{
    echo "<script>alert('Maaf Username dan Password tidak terdaftar!');document.location='index.php'</script>";
}