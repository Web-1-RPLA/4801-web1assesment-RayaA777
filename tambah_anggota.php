<?php
include 'koneksi.php';

if(isset($_POST['register'])){

    $nama = $_POST['nama'];
    $nim_nip = $_POST['nim_nip'];
    $jurusan_prodi = $_POST['jurusan_prodi'];
    $no_telepon = $_POST['no_telepon'];

    $query = mysqli_query($koneksi, "INSERT INTO anggota(nama,nim_nip,jurusan_prodi,no_telepon)
    VALUES('$nama','$nim_nip','$jurusan_prodi','$no_telepon')");

    if($query){
        echo "
        <script>
            alert('Register berhasil');
            window.location='index.php';
        </script>
        ";
    }else{
        echo "Gagal register";
    }
}
?>

</head>
<body>
     <title> 49-01 607062500022 Raya Anandya Adimukti</title>
    <div class="container">
        <h1> Tambah Anggota</h1>
        <a href = index.php >Home </a>
            <link rel="stylesheet" href="style.css">
       <form method="POST">
    <label>Nama <span class="wajib"></span></label>
     <div class = "form-group">
     <input type="text" name="nama" placeholder="Nama" required></div>

    <label>NIM/NIP <span class="wajib"></span></label> <div class = "form-group">
     <input type="text" name="nim_nip" placeholder="NIM/NIP" required></div>


    <label>Jurusan <span class="wajib"></span></label> <div class = "form-group">
     <input type="text" name ="jurusan_prodi" placeholder="Jurusan" required></div>

    <label>No Telepon <span class="wajib"></span></label>
       <div class = "form-group">
     <input type = "number" name = "no_telepon" placeholder = "Nomor Telepon" required></div>
     <button type="submit" name="register"> Simpan </button>

</form>
    
</div>
</body>
</html>