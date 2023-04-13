<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check Connection
    if (!$conn) {
        die("Connection failed : " . mysqli_connect_error());
    } else {
        echo "Connection Success<br>";
    }
    $sql = "INSERT INTO liga (kode, negara, champion)
    VALUES ('Jer','Jerman','4')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>

</html>