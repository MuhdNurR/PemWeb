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

    $sql = "INSERT INTO pegawai (id, nama, jabatan, gaji, alamat, id_departemen)
    VALUES ('1','Muhammad Nur Rachman N. S','Asisten Dosen', '1000000', 'Jalan Penjaringan Asri IX' , '1')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>