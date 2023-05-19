<?php 
    include 'koneksi.php';
    
    // Menyimpan data kedalam variabel terlebih dahulu
    $nama_ayah_kandung = $_POST['nama_ayah_kandung'];
    $tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $penghasilan_bulanan_ayah = $_POST['penghasilan_bulanan_ayah'];
    $berkebutuhan_khusus_ayah = $_POST['berkebutuhan_khusus_ayah'];
    $nama_ibu_kandung = $_POST['nama_ibu_kandung'];
    $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_bulanan_ibu = $_POST['penghasilan_bulanan_ibu'];
    $berkebutuhan_khusus_ibu = $_POST['berkebutuhan_khusus_ibu'];
    
    // Query SQL untuk insert data ke tabel
    $query = "INSERT INTO data_ortu SET nama_ayah_kandung='$nama_ayah_kandung', tahun_lahir_ayah='$tahun_lahir_ayah', pendidikan_ayah='$pendidikan_ayah', pekerjaan_ayah='$pekerjaan_ayah', penghasilan_bulanan_ayah='$penghasilan_bulanan_ayah', berkebutuhan_khusus_ayah='$berkebutuhan_khusus_ayah', nama_ibu_kandung='$nama_ibu_kandung', tahun_lahir_ibu='$tahun_lahir_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', penghasilan_bulanan_ibu='$penghasilan_bulanan_ibu', berkebutuhan_khusus_ibu='$berkebutuhan_khusus_ibu'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman form-input.php
    header("location:hasil.php");
    
    // Pengecekan apakah data inputan kosong
    if($nama_ayah_kandung == ""){
        header("location:FDO.php?nama_ayah_kandung=kosong");
    }
    // else{echo "nama_ayah_kandung anda adalah". $nama_ayah_kandung;}
    if($tahun_lahir_ayah == ""){
        header("location:FDO.php?tahun_lahir_ayah=kosong");
    }
    // else{echo "tahun_lahir_ayah anda adalah". $tahun_lahir_ayah;}
    if($pendidikan_ayah == ""){
        header("location:FDO.php?pendidikan_ayah=kosong");
    }
    // else{echo "pendidikan_ayah anda adalah". $pendidikan_ayah;}
    if($pekerjaan_ayah == ""){
        header("location:FDO.php?pekerjaan_ayah=kosong");
    }
    // else{echo "pekerjaan_ayah anda adalah". $pekerjaan_ayah;}
    if($penghasilan_bulanan_ayah == ""){
        header("location:FDO.php?penghasilan_bulanan_ayah=kosong");
    }
    // else{echo "penghasilan_bulanan_ayah anda adalah". $penghasilan_bulanan_ayah;}
    if($berkebutuhan_khusus_ayah == ""){
        header("location:FDO.php?berkebutuhan_khusus_ayah=kosong");
    }
    // else{echo "berkebutuhan_khusus_ayah anda adalah". $berkebutuhan_khusus_ayah;}
    if($nama_ibu_kandung == ""){
        header("location:FDO.php?nama_ibu_kandung=kosong");
    }
    // else{echo "nama_ibu_kandung anda adalah". $nama_ibu_kandung;}
    if($tahun_lahir_ibu == ""){
        header("location:FDO.php?tahun_lahir_ibu=kosong");
    }
    // else{echo "tahun_lahir_ibu anda adalah". $tahun_lahir_ibu;}
    if($pendidikan_ibu == ""){
        header("location:FDO.php?pendidikan_ibu=kosong");
    }
    // else{echo "pendidikan_ibu anda adalah". $pendidikan_ibu;}
    if($pekerjaan_ibu == ""){
        header("location:FDO.php?pekerjaan_ibu=kosong");
    }
    // else{echo "pekerjaan_ibu anda adalah". $pekerjaan_ibu;}
    if($penghasilan_bulanan_ibu == ""){
        header("location:FDO.php?penghasilan_bulanan_ibu=kosong");
    }
    // else{echo "penghasilan_bulanan_ibu anda adalah". $penghasilan_bulanan_ibu;}
    if($berkebutuhan_khusus_ibu == ""){
        header("location:FDO.php?berkebutuhan_khusus_ibu=kosong");
    }
    // else{echo "berkebutuhan_khusus_ibu anda adalah". $berkebutuhan_khusus_ibu;}
    
?>