<?php
session_start();
require '../../functions.php';


// ambil data di URL
$kd_barang = $_GET["kd_barang"];

//query data siswa berdasarkan id nya
$brg = query("SELECT * FROM tbl_barang WHERE kd_barang = '$kd_barang'")[0];

if (isset($_POST["ubah"])) {
    // cek apakah data berhasil di ubah atau tidak
    if (ubahDataBarang($_POST) > 0) {
      echo "
          <script>
          alert('Data Berhasil Diubah!');
          document.location.href = '../home.php';
          </script>
        ";
    } else {
      echo "
          <script>
          alert('Data Gagal Diubah!');
          document.location.href = 'ubah.php';
          </script>
        ";
    }
  }

?>
<html>

<head>
    <title>Home Pegawai</title>
   
    <link rel="stylesheet" href="../../assets/css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <div class="wrapper">
        <div class="sidebar">
            <h2>Pegawai</h2>
            <ul>
                <li><a href="../home.php">Home</a></li>
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
            <div class="header"> <?= $_SESSION['username'] ?> </div>
            <div class="info">
            </div>
        </div>

    </div>

    <div class="title">
        <h1>Ubah Data Barang</h1>
       
    </div>

    <div class="main-form">
        <form action="" method="post" >

           
            <div class="form-group">
                <label for="kd_barang">Kode Barang : </label>
                <input type="hidden" name="kd_barang" id="kd_barang" required value="<?= $brg["kd_barang"]; ?>" autocomplete="off" class="form-control" placeholder="Masukkan Kd Barang" >
                <input type="text" name="kd_barang" id="kd_barang" required value="<?= $brg["kd_barang"]; ?>" autocomplete="off" class="form-control" placeholder="Masukkan Kd Barang" disabled>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang : </label>
                <input type="text" name="nama_barang" id="nama_barang" required value="<?= $brg["nama_barang"]; ?>" autocomplete="off"class="form-control" placeholder="Masukkan Nama Pengarang">
            </div>

            <div class="form-group">
                <label for="satuan">Satuan : </label>
                <input type="text" name="satuan" id="satuan" required value="<?= $brg["satuan"]; ?>" autocomplete="off"class="form-control" placeholder="Masukkan Penerbit Buku">
            </div>

            <div class="form-group">
                <label for="harga">Harga : </label>
                <input type="number" name="harga" id="harga" required value="<?= $brg["harga"]; ?>" class="form-control" placeholder="Masukkan Kode Buku">
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah Barang : </label>
                <input type="number" name="jumlah" id="jumlah" required value="<?= $brg["jumlah"]; ?>" class="form-control" placeholder="Masukkan Jumlah Barang">
            </div>



         


            <hr>

            <button class="btn btn-primary" type="submit" name="ubah">Ubah Data!</button>



        </form>
    </div>




</body>

</html>