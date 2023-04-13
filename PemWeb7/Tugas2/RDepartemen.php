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

    $sql = "SELECT id, nama_departemen FROM departemen";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Id : " . $row["id"] . "<br>" . $row["nama_departemen"] . "<br>";
        }
    } else {
        echo " 0 results";
    }

    mysqli_close($conn);
    ?>