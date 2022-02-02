<?php
require '../../functions.php';
$kd_barang = $_GET["kd_barang"];

if( hapusDataBarang($kd_barang) > 0 ) {
	echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = '../home.php';
		</script>";
} else {
	echo "<script>
			alert('data gagal dihapus!');
			document.location.href = '../home.php';
		</script>";
}
