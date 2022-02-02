<?php
//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "db_toko");

function query($sql)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $sql);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function tambahDataBarang($data)
{
	global $koneksi;

	$kd_barang = htmlspecialchars($data["kd_barang"]);
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$satuan = htmlspecialchars($data["satuan"]);
	$harga = htmlspecialchars($data["harga"]);
	$jumlah = htmlspecialchars($data["jumlah"]);

	$sql = "INSERT INTO tbl_barang
				VALUES
			( '$kd_barang', '$nama_barang', '$satuan', '$harga', '$jumlah')";

	mysqli_query($koneksi, $sql);

	return mysqli_affected_rows($koneksi);
}

function hapusDataBarang($kd_barang) {
	global $koneksi;
	mysqli_query($koneksi, "delete from tbl_barang where kd_barang = '$kd_barang'");
	return mysqli_affected_rows($koneksi);
}

function ubahDataBarang($data)
{
	global $koneksi;

	$kd_barang = htmlspecialchars($data["kd_barang"]);
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$satuan = htmlspecialchars($data["satuan"]);
	$harga = htmlspecialchars($data["harga"]);
	$jumlah = htmlspecialchars($data["jumlah"]);

	$sql = "UPDATE tbl_barang SET
				kd_barang = '$kd_barang',
				nama_barang = '$nama_barang',
				satuan = '$satuan',
				harga = '$harga',
				jumlah = '$jumlah'
				
			WHERE
			kd_barang = '$kd_barang'
			";

	mysqli_query($koneksi, $sql);

	return mysqli_affected_rows($koneksi);
}




