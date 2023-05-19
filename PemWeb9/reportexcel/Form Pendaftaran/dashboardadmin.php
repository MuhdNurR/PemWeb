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
    <title>Document</title>

</head>

<style>
    @media screen and (min-width: 768px) {
        .show {
            width: calc(1518px) !important;
            ;
        }
    }

    #myTable th,
    #myTable td {
        min-width: 150px;
    }

    #nav-tab {
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
    }

    #nav-home {
        width: 100% !important;
    }

    #nav-profile {
        width: 100% !important;
    }

    #nav-contact {
        width: 100% !important;
    }
</style>
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
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Rumah</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Users</span>
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

    <div class="height-100"> */
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
                                            <th scope="col">ALAMT</th>
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
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">CRUD TOOLS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Hapus</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Edit</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active text-black-50" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque odio nulla debitis eligendi autem amet doloremque, eaque magni quod necessitatibus dolorum ratione deleniti aliquam eveniet illo nemo, ipsam sit ad obcaecati rerum esse corrupti beatae placeat! Cumque, perspiciatis iste, reprehenderit corporis architecto repudiandae provident autem, cupiditate id voluptates quasi illum? Dicta vitae alias, et fugiat accusantium minus a! Maiores eius molestias quae harum, maxime obcaecati soluta, inventore fugiat perferendis deserunt odio cum facilis. Officiis voluptates, totam magni iure facere fugit perferendis quia, odit quisquam a veritatis eos, assumenda tenetur corporis aspernatur in sit deserunt illo numquam dolorem voluptatum necessitatibus accusamus ducimus quam! Aperiam, numquam provident? Esse aliquam eum voluptatum soluta culpa ullam aut ut, amet vel iusto itaque omnis dignissimos voluptate velit eius sequi et libero tempore, nisi animi est recusandae harum possimus. Aut neque quas totam explicabo a, porro officiis, beatae, expedita ad vero reiciendis possimus sed quam aspernatur accusantium illum maxime quae nisi corporis dolor unde debitis placeat facere architecto. Tempora libero totam iste quo debitis qui possimus itaque accusantium voluptates? Corporis perspiciatis impedit quae omnis maxime delectus possimus temporibus natus dolores minima voluptate voluptatem quam debitis consectetur, nobis rem corrupti? Ab esse, labore maiores praesentium delectus ipsa.</div>
                                <div class="tab-pane fade text-black-50" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate eum quod eligendi aperiam in molestiae suscipit, expedita voluptate voluptatum, error veritatis, quidem odit tempora? Provident nam facere sequi earum sunt nemo blanditiis aliquam voluptas consectetur. Beatae, quae omnis est dolorum aspernatur exercitationem excepturi reprehenderit! Eveniet amet suscipit in odio dolor dignissimos quasi a eaque, nam hic vitae quae fuga nobis totam explicabo ipsum veritatis voluptatem. Omnis fugiat voluptatem quam porro nulla similique voluptas velit excepturi consequuntur sed animi, dolorum exercitationem quasi. Modi ipsam porro voluptate, dicta laudantium sed aliquid quisquam mollitia fugiat minima! Tenetur modi mollitia molestiae provident vel possimus officia omnis aperiam sequi tempora dolores, at maxime commodi vero, odit perspiciatis nihil? Voluptatum vitae architecto, cupiditate est ab explicabo porro necessitatibus similique animi ad perferendis tenetur natus ipsa aut culpa blanditiis tempora fugiat enim odio iusto suscipit libero dolorum! Saepe nesciunt, possimus, ipsum tenetur tempore error fugiat ducimus deleniti odit asperiores vero beatae minima pariatur natus praesentium sunt ut deserunt dolore et impedit voluptatem quia! Et suscipit illum quae maxime maiores totam consequatur necessitatibus neque omnis tenetur commodi repellat non molestiae quisquam porro reiciendis, assumenda esse consectetur pariatur quas repellendus harum doloribus nam! Dolorum minus velit architecto atque numquam?</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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

</html>