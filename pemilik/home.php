<?php
session_start();
require '../functions.php';


$barang = query("SELECT * from tbl_barang");

?>
<html>

<head>
  <title>Home Pemilik</title>
  <link rel="stylesheet" href="../assets/css/home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


  <div class="wrapper">
    <div class="sidebar">
      <h2>Pemilik.</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Kelola Data Produk</a></li>
        <li><a href="#">Kelola Data Transaksi</a></li>
        <li><a href="#">Kelola Data Konsumen</a></li>
        <li><a href="#">Kelola Data Laporan</a></li>


        <div class="botomnavbar">
          <a href="logout.php"><i></i>Logout</a>
        </div>
      </ul>
    </div>
    <div class="main_content">
      <div class="header"><?= $_SESSION['username'] ?> </div>
      <div class="info">
      </div>
    </div>

  </div>

  <div class="title">
    <h1>Tabel Data</h1>
    <p>Selamat Datang, <?= $_SESSION['username'] ?> anda berhasil login sebagai Pemilik.</p>
    <button> <a style="color: white;" href="tambah.php">Tambah Data</button>
  </div>


  <div class="main_table">

    <table>
      <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>Jumlah Barang</th>

      </tr>
      <?php if (empty($barang)) : ?>
        <tr>
          <td colspan="7" align="center">data buku tidak ditemukan</td>
        </tr>
      <?php endif; ?>

      <?php $i = 1; ?>
      <?php foreach ($barang as $row) { ?>
        <tr>

          <td><?= $i; ?></td>

          <td><?= $row["kd_barang"]; ?></td>
          <td><?= $row["nama_barang"]; ?></td>
          <td><?= $row["satuan"]; ?></td>
          <td><?= $row["harga"]; ?></td>
          <td><?= $row["jumlah"]; ?></td>


        </tr>
        <?php $i++; ?>
      <?php } ?>
    </table>

  </div>

</body>

</html>