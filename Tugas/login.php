<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body class="gambarbackgroundlogin">
        <!-- cek pesan notifikasi -->
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<script>alert('Username atau Password salah!!')</script>";
                }else if($_GET['pesan'] == "logout"){
                    echo "<script>alert('Anda telah berhasil logout')</script>";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "<script>alert('Anda harus login untuk mengakses halaman ini!!')</script>";
                }
            }
        ?>
        <br>
        <br>
        <!-- Main Konten -->
        <div class="container">
            <div class="row position-absolute top-50 start-50 translate-middle" style="width: 500px; background-color:#F0F600; padding: 30px; border-radius: 15px; box-shadow: 0px 0px 7px 0px #000;">
                <form method="post" action="cek_login.php">
                    <h1 style="text-align: center; font-weight: bold;">Welcome</h1>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="form-group mt-3">
                        <label>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******" name="password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="lihatpassword()"> Show Password </input>
                    </div>
                    <br>
                    <input style="background-color: #00E5E8; width: 415px;" type="submit" value="LOGIN" class="rounded"></input>
                </form>
            </div>
        </div>
        
        <!-- Bootstrap core JavaScript Ditempatkan dibawah sendiri adalah untuk mempercepat proses load web-->
        <script>
            function lihatpassword(){
                var pass = document.getElementById("exampleInputPassword1");
                if (pass.type=="password") {
                    pass.type="email"
                } 
                else {
                    pass.type="password"
                }
            }
        </script>
    </body>
</html>