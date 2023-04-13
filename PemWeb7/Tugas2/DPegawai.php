<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

$sql = "DELETE FROM pegawai WHERE id = 1;";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
