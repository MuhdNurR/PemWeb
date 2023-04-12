<?php
if (empty($_POST['nama'])) {
    header("location:kosong.php");
} else {
    echo "<center>Nama :" . $_POST['nama'] . "</center><br>";
}
