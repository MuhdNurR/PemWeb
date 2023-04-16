<!DOCTYPE html>
<html>

<head>
    <title>Biodata</title>
</head>

<body>
    <h1>BIODATA DIRI</h1>
    <form method="post" action="proses.php">
        <table>
            <input type="image" src="" alt="">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="number" name="umur" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
                    <input type="radio" name="jk" value="Perempuan" required>Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>