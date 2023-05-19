<?php

include_once("koneksi.php");

session_start();
if ($_SESSION['level'] == "") {
    header("location: login.php?pesan=gagal");
}

$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"><img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="dashboardadmin.php" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Rumah</span>
                </a>
                <div class="nav_list">
                    <a href="dashboardadmin.php" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="dashboardadminpeserta.php" class="nav_link active">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Peserta Didik</span>
                    </a>
                    <a href="dashboardadminortu.php" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Orang Tua</span>
                    </a>
                </div>
            </div>
            <a href="logout.php" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->

    <div class="height-100">
        <div class="container" style="margin-top: 80px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            DATA PESERTA
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO.</th>
                                            <th scope="col">TANGGAL</th>
                                            <th scope="col">JENIS PENDAFTARAN</th>
                                            <th scope="col">TANGGAL MASUK</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">NOMOR PESERTA</th>
                                            <th scope="col">PAUD</th>
                                            <th scope="col">TK</th>
                                            <th scope="col">NOMOR SKHUN</th>
                                            <th scope="col">NOMOR IJAZAH</th>
                                            <th scope="col">HOBI</th>
                                            <th scope="col">CITA CITA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM pesertadidik");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $row['tanggal'] ?></td>
                                                <td><?php echo $row['jenis_pendaftaran'] ?></td>
                                                <td><?php echo $row['tanggal_masuk'] ?></td>
                                                <td><?php echo $row['nis'] ?></td>
                                                <td><?php echo $row['no_peserta'] ?></td>
                                                <td><?php echo $row['paud'] ?></td>
                                                <td><?php echo $row['tk'] ?></td>
                                                <td><?php echo $row['no_skhun'] ?></td>
                                                <td><?php echo $row['no_ijazah'] ?></td>
                                                <td><?php echo $row['hobi'] ?></td>
                                                <td><?php echo $row['cita_cita'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <a href="action/cetakDataPesertaDidik.php"><button class="btn btn-primary">Print</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="script.js"></script>

</html>