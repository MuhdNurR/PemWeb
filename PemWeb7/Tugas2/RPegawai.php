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

$sql = "SELECT id, nama, jabatan, gaji, alamat, id_departemen FROM pegawai";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Id : " . $row["id"] . "<br> Nama : " . $row["nama"] . " <br> Jabatan : " . $row["jabatan"] . " <br> Gaji : " . $row["gaji"] . " <br> Alamat : " . $row["alamat"] . " <br> Id_Departemen : " . $row["id_departemen"];
    }
} else {
    echo " 0 results";
}

mysqli_close($conn);
