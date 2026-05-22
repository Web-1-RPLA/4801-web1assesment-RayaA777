<body>
    <h1>Data Anggota</h1>
    <a href="index.php" class="write-diary-button" > Home</a>
    <a href="tambah_anggota.php" class="write-diary-button">Tambah Anggota</a>
<link rel="stylesheet" href="style.css">
<title>607062500022 Raya Anandya Adimukti</title>
    
    <?php
    require_once "koneksi.php";

    $sql = "SELECT * FROM anggota ORDER BY id DESC";
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM/NIP</th>
            <th>Jurusan</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php
        $nomor = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td>
                    <b><?php echo $row['nama']; ?></b><br/>
                   <td> <?php echo $row['nim_nip']; ?><br/>
                  </td>
                  <td>  <?php echo $row['jurusan_prodi']; ?><br/>
                   </td>
                   <td> <?php echo $row['no_telepon']; ?>
                </td>
                
                <td>
                  
                    <a href="edit_anggota.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>

                  
                    <a href="hapus_anggota.php?id=<?php echo $row['id']; ?>"
                       class="btn-hapus"
                       onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php
        $nomor++;
        }
        ?>
    </table>
    <?php
    } else {
        echo '<div class="empty-message">Data tabel atau anggota kosong.</div>';
    }
    ?>
</body>
</html>