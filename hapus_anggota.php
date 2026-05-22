<?php
require_once "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM anggota WHERE id=" . $id;

if (mysqli_query($koneksi, $sql)) {
    header("refresh:3;url=index.php");
    echo "<p>Data berhasil dihapus.</p>";
} else {
    echo "<p>Ups, data gagal dihapus :(</p>";
}
?>