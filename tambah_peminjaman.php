<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="card">

<h2>Peminjaman Buku</h2>

<form action="tambah_peminjaman.php" method="POST">

<label>Buku</label><select name="id_buku">
 
<?php

$buku = mysqli_query($koneksi, "SELECT * FROM buku");

while($b = mysqli_fetch_array($buku)){
?>

<option value="<?php echo $b['id_buku']; ?>">

<?php echo $b['judul']; ?>

</option>

<?php } ?>

</select>

<br>

<label>Anggota</label>

<select name="id_anggota">

<?php

$anggota = mysqli_query($koneksi, "SELECT * FROM anggota");

while($u = mysqli_fetch_array($anggota)){
?>

<option value="<?php echo $u['id_anggota']; ?>"> <?php echo $u['nama']; ?>

</option>

<?php } ?>

</select>

<br> <input type="date"name="tanggal_pinjam"required>

<button type="submit">Pinjam</button>

</form>
<hr>
