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



<div class="container" >
<h3 >Login Form</h3>

<form action="cek-login.php" method="POST">
  <label>Username</label>
  <input type="text" name="username" class="form-login" placeholder="Masukkan Username" required/>
<br>
  <label>Password</label>
  <input type="password" name="password" class="form-login" placeholder="Masukkan Password" required/>

 

  <button type="submit" class="btn-submit"><b>Sign In</b></button>

  <div class="registrasi">
  Don't have an account?
  <a href="registrasi.php" class="register-link">Register here </a>
 
  </div>

</form>
</div>
  
</body>
</html>