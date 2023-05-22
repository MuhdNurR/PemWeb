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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<!DOCTYPE html>
<html>

<head>
    <title>Example</title>

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
                    <a href="dashboardadmin.php" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="dashboardadminpeserta.php" class="nav_link ">
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
    </div> <!--Container Main start-->


    <div class="height-100">
        <div class="container" style="margin-top: 80px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            DATA DIRI SISWA
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO.</th>
                                            <th scope="col">NAMA LENGKAP</th>
                                            <th scope="col">JENIS KELAMIN</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">TEMPAT LAHIR</th>
                                            <th scope="col">TANGGAL LAHIR</th>
                                            <th scope="col">AGAMA</th>
                                            <th scope="col">BERKEBUTUHAN KHUSUS</th>
                                            <th scope="col">ALAMAT</th>
                                            <th scope="col">RT</th>
                                            <th scope="col">RW</th>
                                            <th scope="col">DUSUN</th>
                                            <th scope="col">DESA</th>
                                            <th scope="col">KECAMATAN</th>
                                            <th scope="col">KODE POS</th>
                                            <th scope="col">TEMPAT TINGGAL</th>
                                            <th scope="col">TRANSPORTASI</th>
                                            <th scope="col">NO HP</th>
                                            <th scope="col">TELP</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">KPS/PKH/KIP</th>
                                            <th scope="col">NO KPS/PKH/KIP</th>
                                            <th scope="col">KEWARGANEGARAAN</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM datadiri");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $row['nama_lengkap'] ?></td>
                                                <td><?php echo $row['jenis_kelamin'] ?></td>
                                                <td><?php echo $row['nisn'] ?></td>
                                                <td><?php echo $row['nik'] ?></td>
                                                <td><?php echo $row['tempat_lahir'] ?></td>
                                                <td><?php echo $row['tanggal_lahir'] ?></td>
                                                <td><?php echo $row['agama'] ?></td>
                                                <td><?php echo $row['berkebutuhan_khusus'] ?></td>
                                                <td><?php echo $row['alamat_jalan'] ?></td>
                                                <td><?php echo $row['rt'] ?></td>
                                                <td><?php echo $row['rw'] ?></td>
                                                <td><?php echo $row['nama_dusun'] ?></td>
                                                <td><?php echo $row['nama_kelurahan_desa'] ?></td>
                                                <td><?php echo $row['kecamatan'] ?></td>
                                                <td><?php echo $row['kode_pos'] ?></td>
                                                <td><?php echo $row['tempat_tinggal'] ?></td>
                                                <td><?php echo $row['moda_transportasi'] ?></td>
                                                <td><?php echo $row['nomor_hp'] ?></td>
                                                <td><?php echo $row['nomor_telp'] ?></td>
                                                <td><?php echo $row['email_pribadi'] ?></td>
                                                <td><?php echo $row['penerima_kps_pkh_kip'] ?> </td>
                                                <td><?php echo $row['no_kps_pkh_kip'] ?> </td>
                                                <td><?php echo $row['kewarganegaraan'] ?> </td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Edit</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <a href="action/cetakDataDiriMahasiswa.php"><button class="btn btn-primary">Print</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    document.addEventListener("DOMContentLoaded", function(event) {
        const Navbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="script.js"></script>

</html>