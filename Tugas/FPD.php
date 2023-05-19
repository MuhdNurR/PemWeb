<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <title>Pengisian Formulir</title>
    </head>
    <body class="gambarbackgroundlogin">
        <!-- Cek apakah sudah login -->
        <?php 
            session_start();
            if($_SESSION['status']!="login"){
                header("location:login.php?pesan=belum_login");
            }

            if(isset($_GET['tgl_isi'])){
                if($_GET['tgl_isi'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Tanggal Pengisian Formulir Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['jenis_pendaftaran'])){
                if($_GET['jenis_pendaftaran'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Jenis Pendaftaran Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tgl_masuk_sekolah'])){
                if($_GET['tgl_masuk_sekolah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Tanggal Masuk Sekolah Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nis'])){
                if($_GET['nis'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> NIS Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nomor_peserta_ujian'])){
                if($_GET['nomor_peserta_ujian'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Nomor Peserta Ujian Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['paud'])){
                if($_GET['paud'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> PAUD Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tk'])){
                if($_GET['tk'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> TK Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['no_skhun'])){
                if($_GET['no_skhun'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> No SKHUN Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['no_ijazah'])){
                if($_GET['no_ijazah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> No Ijazah Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['hobi'])){
                if($_GET['hobi'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Hobi Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['citacita'])){
                if($_GET['citacita'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Cita - Cita Belum Di Isi !</h5>";
                }
            }
            
        ?>
        <div style="background-color:white;">
            <h4 class="mt-3">
                Selamat datang, <?php echo $_SESSION['username']; ?>!
            </h4>
        </div>
        <h1 align="center" class="fw-bold">FORMULIR PESERTA DIDIK</h1>

        <div class="container border border-3 border-dark" style="background-color:white;">
            <form action="cek_fpd.php" method="post">
                <table class="mt-2">
                    <tr>
                        <td>Tanggal </td>
                        <td>: <input type="date" name="tgl_isi"></td>
                    </tr>
                </table>
                <div class="judulbghitam mt-2">
                    <p> REGISTASI PESERTA DIDIK </p>
                </div>
                <table>
                    <tr>
                        <td width="40px">1. </td>
                        <td width="250px">Jenis Pendaftaran</td>
                        <td>: 
                            <input type="radio" name="jenis_pendaftaran" value="Siswa Baru"> Siswa Baru
                            <input type="radio" name="jenis_pendaftaran" value="Pindahan"> Pindahan
                        </td>
                    </tr>
                    <tr>
                        <td>2. </td>
                        <td>Tanggal Masuk Sekolah</td>
                        <td>: <input type="date" name="tgl_masuk_sekolah"></td>
                    </tr>
                    <tr>
                        <td>3. </td>
                        <td>NIS</td>
                        <td>: <input style="width:300px;" type="text" name="nis"></td>
                    </tr>
                    <tr>
                        <td>4. </td>
                        <td>Nomor Peserta Ujian</td>
                        <td>: 
                            <input style="width:400px;" type="text" name="nomor_peserta_ujian">
                            <br>
                            <p style="margin:0; font-style:italic;">* Nomor peserta Ujian adalah 20 Digit yang tertera dalam sertifikat <span style="color: red; font-weight: bold; font-style:italic;">SKHUN SD</span>, diisi bagi peserta didik jenjang SMP </p>
                        </td>
                    </tr>
                    <tr>
                        <td>5. </td>
                        <td>Apakah Pernah PAUD</td>
                        <td>: 
                            <input type="radio" name="paud" value="Ya"> Ya 
                            <input type="radio" name="paud" value="Tidak"> Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>6. </td>
                        <td>Apakah Pernah TK</td>
                        <td>: 
                            <input type="radio" name="tk" value="Ya"> Ya 
                            <input type="radio" name="tk" value="Tidak"> Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>7. </td>
                        <td>No. Seri SKHUN Sebelumnya</td>
                        <td>: <input style="width:350px;" type="text" name="no_skhun"> <span style="margin:0; font-style:italic;"> Diisi 16 Digit yang tertera di <span style="color: red; font-weight: bold; font-style:italic;"> SKHUN SD </span> - diisi Bagi PD Jenjang SMP</span></td>
                    </tr>
                    <tr>
                        <td>8. </td>
                        <td>No. Seri Ijazah Sebelumnya</td>
                        <td>: <input style="width:350px;" type="text" name="no_ijazah"> <span style="margin:0; font-style:italic;"> Diisi 16 Digit yang tertera di <span style="color: red; font-weight: bold; font-style:italic;"> Ijazah SD </span> - diisi Bagi PD Jenjang SMP</span></td>
                    </tr>
                    <tr>
                        <td>9. </td>
                        <td>Hobi</td>
                        <td>: 
                            <select name="hobi">
                                <option value="Olah Raga">Olah Raga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Membaca">Membaca</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Travelin">Travelin</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>10. </td>
                        <td>Cita-Cita</td>
                        <td>: 
                            <select name="citacita">
                                <option value="PNS">PNS</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <button class="mt-3 mb-3" type="submit" value="simpan">Lanjut</button>
            </form>
        </div>
    </body>
</html>