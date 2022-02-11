<?php
session_start();
require '../../functions.php';


$barang = query("SELECT * from tbl_barang");
if (isset($_POST["tambah"])) {
    if (tambahDataBarang($_POST) > 0) {
        echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = '../home.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = '../tambah.php';
			  </script>";
    }
}

?>
<html>

<head>
    <title>Tambah Pegawai</title>
   
    <link rel="stylesheet" href="../../assets/css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <div class="wrapper">
        <div class="sidebar">
            <h2>Pegawai</h2>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Kelola Data Produk</a></li>
                <li><a href="#">Kelola Data Transaksi</a></li>
                <li><a href="#">Kelola Data Konsumen</a></li>
                <li><a href="#">Kelola Data Laporan</a></li>


                <div class="botomnavbar">
                    <a href="../logout.php"><i></i>Logout</a>
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
        <h1>Tambah Data Barang</h1>
       
    </div>

    <div class="main-form">
        <form action="" method="post" >
           
            <div class="form-group">
                <label for="kd_barang">Kd Barang : </label>
                <input type="text" name="kd_barang" id="kd_barang" required autocomplete="off" class="form-control" placeholder="Kode Barang">
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang : </label>
                <input type="text" name="nama_barang" id="nama_barang" required autocomplete="off" class="form-control" placeholder="Nama Barang">
            </div>

            <div class="form-group">
                <label for="satuan">Satuan : </label>
                <input type="text" name="satuan" id="satuan" required autocomplete="off" class="form-control" placeholder="Satuan Barang">
            </div>

            <div class="form-group">
                <label for="harga">Harga : </label>
                <input type="number" name="harga" id="harga" required autocomplete="off" class="form-control" placeholder="Harga Barang">
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah Barang : </label>
                <input type="number" name="jumlah" id="jumlah" required autocomplete="off" class="form-control" placeholder="Jumlah Barang">
            </div>



         


            <hr>

            <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>



        </form>
    </div>




</body>

</html>