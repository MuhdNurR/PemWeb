<!DOCTYPE html>
<html>

<head>
    <title>Biodata</title>
</head>

<body>
    <h1>BIODATA DIRI</h1>
    <?php
    // cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST['submit'])) {
        // ambil nilai dari form
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        // tampilkan nilai yang diambil dari form
        echo "<p>Nama : $nama</p>";
        echo "<p>Umur : $umur</p>";
        echo "<p>Jenis Kelamin : $jk</p>";
        echo "<p>Alamat : $alamat</p>";
    }
    ?>
</body>

</html>