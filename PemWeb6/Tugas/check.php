<html>

<body style="margin-top:100px; text-align:center;">

    <?php
    if (empty($_POST['nama'] && $_POST['email'])) {
        header("location:empty.php");
    } else {
        echo "<center>Nama :" . $_POST['nama'] . "</center><br>";
        echo "<center>Email :" . $_POST['email'] . "</center><br>";
        echo "<center>Tanggal :" . date("m-F-Y, g:i:s a")  . "</center><br>";
    }
    ?>
    <a href="input.php"><button>Kembali</button></a>
</body>

</html>