<body>
    <h1>Data Anggota</h1>
    <a href="index.php" class="write-diary-button" > Home</a>
    <a href="tambah_buku.php" class="write-diary-button">Tambah Buku</a>
<link rel="stylesheet" href="style.css">
    <title>607062500022 Raya Anandya Adimukti</title>
    <?php
    require_once "koneksi.php";

    $sql = "SELECT * FROM buku ORDER BY id DESC";
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>ID.</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
        </tr>
        <?php
        $nomor = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td>
                    <b><?php echo $row['kode_buku']; ?></b><br/>
                   <td> <?php echo $row['judul']; ?><br/>
                  </td>
                  <td>  <?php echo $row['pengarang']; ?><br/>
                   </td>
                   <td> <?php echo $row['tahun_terbit']; ?>
                    <td> <?php echo $row['jumlah_stok']; ?>
                </td>
                
            </tr>
        <?php
        $nomor++;
        }
        ?>
    </table>
    <?php
    } else {
        echo '<div class="empty-message">Belum ada data buku.</div>';
    }
    ?>
</body>
</html>