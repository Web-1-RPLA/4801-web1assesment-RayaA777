<?php
require_once "koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM anggota WHERE id=$id";

$result = mysqli_query($koneksi, $sql);

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>607062500022 Raya Anandya Adimukti</title>

</head>
<body>
    <div class="container">
        <h1> Edit Anggota</h1>
        <a href = index.php >Home </a>

       <form method="POST">
    <label>Nama <span class="wajib"></span></label>
     <div class = "form-group">
     <input type="text" name="nama" placeholder="Nama" required value="<?php echo $data['nama']; ?>"></div>

    <label>NIM/NIP <span class="wajib"></span></label> <div class = "form-group">
     <input type="text" name="nim_nip" placeholder="NIM/NIP" required value="<?php echo $data['nim_nip']; ?>" ></div>


    <label>Jurusan <span class="wajib"></span></label> <div class = "form-group">
     <input type="text" name ="jurusan_prodi" placeholder="Jurusan" required value="<?php echo $data['jurusan_prodi']; ?>"></div>

    <label>No Telepon <span class="wajib"></span></label>
       <div class = "form-group">
     <input type = "number" name = "no_telepon" placeholder = "Nomor Telepon" required value="<?php echo $data['no_telepon']; ?>"></div>

     <button type="submit" name="register"> Update </button>

</form>
    
</div>
</body>
</html>
