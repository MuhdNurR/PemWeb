<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <title>Hasil Pengisian Formulir</title>
    </head>
    <body class="gambarbackgroundlogin">
        <!-- Cek apakah sudah login -->
        <?php 
            session_start();
            if($_SESSION['status']!="login"){
                header("location:login.php?pesan=belum_login");
            }
        ?>
        
        <div style="background-color:white;">
            <h4 class="mt-3">
                Selamat datang, <?php echo $_SESSION['username']; ?>!
            </h4>
        </div>
        <h1 align="center" class="fw-bold">HASIL FORMULIR PESERTA DIDIK</h1>
        
        <div class="container border border-3 border-dark" style="background-color:white;">
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
                <p style="color:red; margin-bottom:0px; font-style:italic;">*Pilih terlebih dahulu!</p>
                <select name="id" style="width:200px;">
                    <?php
                        include "koneksi.php";
                        // Query menampilkan id formulir
                        $query = mysqli_query($koneksi, "SELECT * FROM data_diri ORDER BY id");
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?=$data['id'];?>">
                        <?php echo $data['nama_lengkap'];?>
                    </option>
                    <?php
                        }
                    ?>
                </select>
                <input type="submit" value="Pilih">
            </form>
            
            <br>

            <?php
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];

                    // Menampilkan data berdasarkan pilihan combobox ke dalam form
                    $tamFPD = mysqli_query($koneksi, "SELECT * FROM regis_peserta_didik WHERE id='$id'");
                    $tFPD = mysqli_fetch_array($tamFPD);
                    $tamFDP = mysqli_query($koneksi, "SELECT * FROM data_diri WHERE id='$id'");
                    $tFDP = mysqli_fetch_array($tamFDP);
                    $tamFDO = mysqli_query($koneksi, "SELECT * FROM data_ortu WHERE id='$id'");
                    $tFDO = mysqli_fetch_array($tamFDO);
            ?>
            <form action="#" method="POST">
                <table class="mt-2">
                    <tr>
                        <td>Tanggal</td>
                        <td>: <input type="date" name="tgl_isi" value="<?php echo $tFPD['tgl_isi']; ?>" disabled readonly></td>
                    </tr>
                </table>
                <table border="0" cellpadding="2">
                    <div class="judulbghitam mt-2">
                        <p> REGISTASI PESERTA DIDIK </p>
                    </div>
                    <tr>
                        <td width="40px">1. </td>
                        <td width="250px">Jenis Pendaftaran</td>
                        <td>: <input type="text" name="jenis_pendaftaran" value="<?php echo $tFPD['jenis_pendaftaran']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>2. </td>
                        <td>Tanggal Masuk Sekolah</td>
                        <td>: <input type="date" name="tgl_masuk_sekolah" value="<?php echo $tFPD['tgl_masuk_sekolah']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>3. </td>
                        <td>NIS</td>
                        <td>: <input style="width:300px;" type="text" name="nis" value="<?php echo $tFPD['nis']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>4. </td>
                        <td>Nomor Peserta Ujian</td>
                        <td>: 
                            <input style="width:400px;" type="text" name="nomor_peserta_ujian" value="<?php echo $tFPD['nomor_peserta_ujian']; ?>" disabled readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>5. </td>
                        <td>Apakah Pernah PAUD</td>
                        <td>: <input type="text" name="paud" value="<?php echo $tFPD['paud']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>6. </td>
                        <td>Apakah Pernah TK</td>
                        <td>: <input type="text" name="tk" value="<?php echo $tFPD['tk']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>7. </td>
                        <td>No. Seri SKHUN Sebelumnya</td>
                        <td>: <input style="width:350px;" type="text" name="no_skhun" value="<?php echo $tFPD['no_skhun']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>8. </td>
                        <td>No. Seri Ijazah Sebelumnya</td>
                        <td>: <input style="width:350px;" type="text" name="no_ijazah" value="<?php echo $tFPD['no_ijazah']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>9. </td>
                        <td>Hobi</td>
                        <td>: <input style="width:350px;" type="text" name="hobi" value="<?php echo $tFPD['hobi']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>10. </td>
                        <td>Cita-Cita</td>
                        <td>: <input style="width:350px;" type="text" name="citacita" value="<?php echo $tFPD['citacita']; ?>" disabled readonly></td>
                    </tr>
                </table>
            </form>
            <?php
                }
            ?>
            <div class="judulbghitam mt-2">
                <p> DATA PRIBADI </p>
            </div>
            <table>
                <tr>
                    <td width="40px">11. </td>
                    <td width="250px">Nama Lengkap</td>
                    <td>: <input style="width:500px;" type="text" name="nama_lengkap" value="<?php echo $tFDP['nama_lengkap']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>12. </td>
                    <td>Jenis Kelamin</td>
                    <td>: <input type="text" name="jenis_kelamin" value="<?php echo $tFDP['jenis_kelamin']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>13. </td>
                    <td>NISN</td>
                    <td>: <input style="width:300px;" type="text" name="nisn" value="<?php echo $tFDP['nisn']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>14. </td>
                    <td>NIK</td>
                    <td>: <input style="width:350px;" type="text" name="nik" value="<?php echo $tFDP['nik']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>15. </td>
                    <td>Tanggal Lahir</td>
                    <td>: <input type="date" name="tgl_lahir" value="<?php echo $tFDP['tgl_lahir']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>16. </td>
                    <td>Tempat Lahir</td>
                    <td>: <input style="width:500px;" type="text" name="tempat_lahir" value="<?php echo $tFDP['tempat_lahir']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>17. </td>
                    <td>Agama</td>
                    <td>: <input type="text" name="agama" value="<?php echo $tFDP['agama']; ?>" disabled readonly></td>    
                </tr>
                <tr>
                    <td>18. </td>
                    <td>Berkebutuhan Khusus</td>
                    <td>: <input type="text" name="berkebutuhan_khusus" value="<?php echo $tFDP['berkebutuhan_khusus']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>19. </td>
                    <td>Alamat Jalan</td>
                    <td>: <input style="width:580px;" type="text" name="alamat_jalan" value="<?php echo $tFDP['alamat_jalan']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>20. </td>
                    <td>RT</td>
                    <td>: <input style="width:50px;" type="text" name="rt" value="<?php echo $tFDP['rt']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>21. </td>
                    <td>RW</td>
                    <td>: <input style="width:50px;" type="text" name="rw" value="<?php echo $tFDP['rw']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>22. </td>
                    <td>Nama Dusun</td>
                    <td>: <input style="width:500px;" type="text" name="nama_dusun" value="<?php echo $tFDP['nama_dusun']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>23. </td>
                    <td>Nama Kelurahan/Desa</td>
                    <td>: <input style="width:500px;" type="text" name="nama_kelurahan_desa"  value="<?php echo $tFDP['nama_kelurahan_desa']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>24. </td>
                    <td>Kecamatan</td>
                    <td>: <input style="width:500px;" type="text" name="kecamatan" value="<?php echo $tFDP['kecamatan']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>25. </td>
                    <td>Kode Pos</td>
                    <td>: <input style="width:100px;" type="text" name="kode_pos" value="<?php echo $tFDP['kode_pos']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>26. </td>
                    <td>Tempat Tinggal</td>
                    <td>: <input type="text" name="tempat_tinggal" value="<?php echo $tFDP['tempat_tinggal']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>27. </td>
                    <td>Moda Transportasi</td>
                    <td>: <input type="text" name="moda_transportasi" value="<?php echo $tFDP['moda_transportasi']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>28. </td>
                    <td>Nomor HP</td>
                    <td>: <input type="text" name="no_hp" value="<?php echo $tFDP['no_hp']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>29. </td>
                    <td>Nomor Telepon</td>
                    <td>: <input type="text" name="no_telp" value="<?php echo $tFDP['no_telp']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>30. </td>
                    <td>E-mail Pribadi</td>
                    <td>: <input style="width:250px;" type="email" name="email" value="<?php echo $tFDP['email']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>31. </td>
                    <td>Penerima KPS/PKH/KIP</td>
                    <td>: <input type="text" name="penerima_kps_pkh_kip" value="<?php echo $tFDP['penerima_kps_pkh_kip']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>32. </td>
                    <td>No. KPS/PKH/KIP</td>
                    <td>: <input style="width:400px;" type="text" name="no_penerima" value="<?php echo $tFDP['no_penerima']; ?>" disabled readonly></td>
                </tr>
                <tr>
                    <td>33. </td>
                    <td>Kewarganegaraan</td>
                    <td>: <input style="width:400px;" type="text" name="kewarganegaraan" value="<?php echo $tFDP['kewarganegaraan']; ?>" disabled readonly>
                        <span style="margin-left:20px;">Nama Negara</span>
                        : <input style="width:300px;" type="text" name="nama_negara" value="<?php echo $tFDP['nama_negara']; ?>" disabled readonly>
                    </td>
                </tr>
            </table>
            <div class="judulbghitam mt-2">
                    <p> DATA AYAH KANDUNG </p>
                </div>
                <table>
                    <tr>
                        <td width="40px">34. </td>
                        <td width="250px">Nama Ayah Kandung</td>
                        <td>: <input style="width:500px;" type="text" name="nama_ayah_kandung" value="<?php echo $tFDO['nama_ayah_kandung']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>35. </td>
                        <td>Tahun Lahir</td>
                        <td>: <input style="width:100px;" type="text" name="tahun_lahir_ayah" value="<?php echo $tFDO['tahun_lahir_ayah']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>36. </td>
                        <td>Pendidikan</td>
                        <td>: <input type="text" name="pendidikan_ayah" value="<?php echo $tFDO['pendidikan_ayah']; ?>" disabled readonly></td>   
                    </tr>
                    <tr>
                        <td>37. </td>
                        <td>Pekerjaan</td>
                        <td>: <input type="text" name="pekerjaan_ayah" value="<?php echo $tFDO['pekerjaan_ayah']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>38. </td>
                        <td>Penghasilan Bulanan</td>
                        <td>: <input type="text" name="penghasilan_bulanan_ayah" value="<?php echo $tFDO['penghasilan_bulanan_ayah']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>39. </td>
                        <td>Berkebutuhan Khusus</td>
                        <td>: <input type="text" name="berkebutuhan_khusus_ayah" value="<?php echo $tFDO['berkebutuhan_khusus_ayah']; ?>" disabled readonly></td>
                    </tr>
                </table>
                <div class="judulbghitam mt-2">
                    <p> DATA IBU KANDUNG </p>
                </div>
                <table>
                    <tr>
                        <td width="40px">40. </td>
                        <td width="250px">Nama Ibu Kandung</td>
                        <td>: <input style="width:500px;" type="text" name="nama_ibu_kandung" value="<?php echo $tFDO['nama_ibu_kandung']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>41. </td>
                        <td>Tahun Lahir</td>
                        <td>: <input style="width:100px;" type="text" name="tahun_lahir_ibu" value="<?php echo $tFDO['tahun_lahir_ibu']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>42. </td>
                        <td>Pendidikan</td>
                        <td>: <input type="text" name="pendidikan_ibu" value="<?php echo $tFDO['pendidikan_ibu']; ?>" disabled readonly></td> 
                    </tr>
                    <tr>
                        <td>43. </td>
                        <td>Pekerjaan</td>
                        <td>: <input type="text" name="pekerjaan_ibu" value="<?php echo $tFDO['pekerjaan_ibu']; ?>" disabled readonly></td>    
                    </tr>
                    <tr>
                        <td>44. </td>
                        <td>Penghasilan Bulanan</td>
                        <td>: <input type="text" name="penghasilan_bulanan_ibu" value="<?php echo $tFDO['penghasilan_bulanan_ibu']; ?>" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>45. </td>
                        <td>Berkebutuhan Khusus</td>
                        <td>: <input type="text" name="berkebutuhan_khusus_ibu" value="<?php echo $tFDO['berkebutuhan_khusus_ibu']; ?>" disabled readonly></td>
                    </tr>
                </table>
            <br>
            <a href="logout.php">LOGOUT</a> 
        </div>
        <br>
    </body>
</html>