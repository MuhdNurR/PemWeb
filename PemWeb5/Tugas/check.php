<html>

<body style="margin-top:100px">

    <?php
    if (empty($_POST['nama'])) {
        header("location:empty.php");
    } else {
        echo "<center>Nama :" . $_POST['nama'] . "</center><br>";
        echo "<center>Email :" . $_POST['email'] . "</center><br>";
        echo "<center>Tanggal :" . date("m-F-Y, g:i:s a")  . "</center><br>";
    }
    ?>
</body>

</html>