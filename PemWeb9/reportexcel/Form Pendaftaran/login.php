<?php
/* 
if (!isset($_SESSION['login'])) {
    header("location: dashboard.php");
    exit;
} */
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Input</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    #border {
        box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    }

    body {
        background-image: url(img/bg.jpg);
        background-size: cover;
    }
</style>

<body>
    <?php
    if (isset($_GET['error'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . urldecode($_GET['error']) . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
        </div>';
    }
    ?>

    <div class="row justify-content-center mt ml-5 mr-5">
        <div class="container" style="margin-top: 10rem; margin-left: 25rem;margin-right:25rem">
            <div id="border" class="row bg-white" style="border-radius: 15px;padding: 0.5rem 0.75rem; ">
                <div class="container mr-3 ml-3 mt-4 mb-3">
                    <h3 class="text-center pb-3">Selamat Datang Di Website PPDB</h3>
                    <form method="post" action="action/loginakun.php" class="needs-validation" novalidate>
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><label for="email">Email</label></div>
                                <div class="col text-right"><span>Belum Punya Akun ? <a href="daftar.php"> Daftar Akun</a></span></div>
                            </div>
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                        </div>
                        <a class="fw-bold" href="lupapass.php">Lupa Password ? </a>
                        <div>
                            <button type="submit" class="btn btn-primary mt-3">Masuk</button>
                            <p class="m-0 p-0 pt-2 text-secondary">Dengan melakukan login berarti anda setuju dengan <br>Syarat dan Ketentuan yang berlaku.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript untuk Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>


</html>