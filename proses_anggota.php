<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$nim_nip = $_POST['nim_nip'];
$jurusan_prodi = $_POST['jurusan_prodi'];
$no_telepon = $_POST['no_telepon'];

$query = mysqli_query($koneksi,"INSERT INTO anggota (nama, nim_nip, jurusan_prodi, no_telepon)
                                         VALUES('$nama_user','$nim_nip','$jurusan',$no_telepon')");


if($query){

    echo "
    <script>
    alert('User berhasil ditambah');
    window.location='index.php';
    </script>
    ";

}else{

    echo "Gagal";

}

?>