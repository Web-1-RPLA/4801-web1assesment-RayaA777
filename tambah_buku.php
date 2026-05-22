<?php
include 'koneksi.php';

if(isset($_POST['register'])){

    $kode_buku = $_POST['kode_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah_stok = $_POST['jumlah_stok'];

    $query = mysqli_query($koneksi, "INSERT INTO buku(kode_buku,judul,pengarang,tahun_terbit,jumlah_stok)
    VALUES('$kode_buku','$judul','$pengarang','$tahun_terbit','$jumlah_stok')");

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
 <title> 49-01 607062500022 Raya Anandya Adimukti</title>
<body>

    <div class="container">
        <h1> Tambah Buku</h1>
        <a href = index.php >Home </a>
<link rel="stylesheet" href="style.css">
       <form method="POST">
    <label>Kode Buku <span class="wajib"></span></label>
     <div class = "form-group">
     <input type="text" name="kode_buku" placeholder="Kode Buku" required></div>

    <label>Judul Buku<span class="wajib"></span></label> <div class = "form-group">
     <input type="text" name="judul" placeholder="Judul Buku" required></div>

    <label>Pengarang <span class="wajib"></span></label> <div class = "form-group">
     <input type="text" name ="pengarang" placeholder="Pengarang" required></div>

    <label>Tahun Terbit <span class="wajib"></span></label>
       <div class = "form-group">
     <input type = "number" name = "tahun_terbit" placeholder = "Tahun Terbit" required></div>

     <label> Jumlah Stok <span class = "wajib"></span></label>
     <div class = "from group">
    <input type = "number" name = "jumlah_stok" placeholder = "Jumlah Stok" required></div>
     <button type="submit" name="register"> Simpan Buku </button>
     
     <a href= buku.php> Batal </a>


</form>
    
</div>
</body>
</html>