<?php
session_start();

?>
<html>

<head>
  <title>Home Pembeli</title>
  <link rel="stylesheet" href="../assets/css/home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <div class="wrapper">
    <div class="sidebar">
      <h2>Pemilik</h2>
      <ul>
        <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
        <li><a href="#"><i class="fas fa-user"></i>Data Produk</a></li>
        <li><a href="#"><i class="fas fa-address-card"></i>Data Transaksi</a></li>
        <li><a href="#"><i class="fas fa-project-diagram"></i>Data Konsumen</a></li>
        <li><a href="#"><i class="fas fa-blog"></i>Data Laporan</a></li>


        <div class="botomnavbar">
          <a href="../logout.php"><i></i>Logout</a>
        </div>
      </ul>
    </div>
    <div class="main_content">
      <div class="header">Welcome!! Have a nice day.</div>
      <div class="info">

      </div>
    </div>
  </div>
</body>

</html>