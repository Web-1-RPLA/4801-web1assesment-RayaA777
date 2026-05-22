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




<a href="tambah_peminjaman.php" class="write-diary-button" > Tambah Peminjaman</a>

<h2>Data Peminjaman</h2>
 <table>

<tr>
<th>No</th>
<th>Buku</th>
<th>User</th>
<th>Tanggal</th>
<th>Aksi</th>
</tr>

<?php

$no = 1;

$query = mysqli_query($koneksi,"SELECT peminjaman.*, buku.judul , anggota.nama FROM peminjaman JOIN buku ON peminjaman.id_buku = buku.id JOIN anggota
ON peminjaman.id = anggota.id_anggota");

while($data = mysqli_fetch_array($query)){
?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $data['judul']; ?></td>

<td><?php echo $data['nama']; ?></td>

<td><?php echo $data['tanggal_pinjam']; ?></td>

<td>

<a href="edit_peminjaman.php?id=<?php echo $data['id']; ?>">

<button>Edit</button>

</a>

<a href="hapus_peminjaman.php?id=<?php echo $data['id']; ?>">

<button>Hapus</button>

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>