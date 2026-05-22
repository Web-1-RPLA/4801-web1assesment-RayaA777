<?php

include 'koneksi.php';

$id_anggota = $_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];



$query = mysqli_query($koneksi,
"INSERT INTO peminjaman
(id_buku, id_anggota, tanggal_pinjam, tanggal_kembali, $tanggal_kembali)
VALUES
('$id_buku','$id_anggota','$tanggal_pinjam','$tanggal_kembali',)
");

if($query){

    header('Location: peminjaman.php');

}else{

    echo "Gagal";

}

?>