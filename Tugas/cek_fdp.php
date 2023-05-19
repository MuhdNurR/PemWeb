<?php 
    include 'koneksi.php';
    
    // Menyimpan data kedalam variabel terlebih dahulu
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $agama = $_POST['agama'];
    $berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
    $alamat_jalan = $_POST['alamat_jalan'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $nama_dusun = $_POST['nama_dusun'];
    $nama_kelurahan_desa = $_POST['nama_kelurahan_desa'];
    $kecamatan = $_POST['kecamatan'];
    $kode_pos = $_POST['kode_pos'];
    $tempat_tinggal = $_POST['tempat_tinggal'];
    $moda_transportasi = $_POST['moda_transportasi'];
    $no_hp = $_POST['no_hp'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $penerima_kps_pkh_kip = $_POST['penerima_kps_pkh_kip'];
    $no_penerima = $_POST['no_penerima'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $nama_negara = $_POST['nama_negara'];

    // Query SQL untuk insert data ke tabel 
    $query = "INSERT INTO data_diri SET nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', nisn='$nisn', nik='$nik', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', agama='$agama', berkebutuhan_khusus='$berkebutuhan_khusus', alamat_jalan='$alamat_jalan', rt='$rt', rw='$rw', nama_dusun='$nama_dusun', nama_kelurahan_desa='$nama_kelurahan_desa', kecamatan='$kecamatan', kode_pos='$kode_pos', tempat_tinggal='$tempat_tinggal', moda_transportasi='$moda_transportasi', no_hp='$no_hp', no_telp='$no_telp', email='$email', penerima_kps_pkh_kip='$penerima_kps_pkh_kip', no_penerima='$no_penerima', kewarganegaraan='$kewarganegaraan', nama_negara='$nama_negara'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman form-input.php
    header("location:FDO.php");
    
    // Pengecekan apakah data inputan kosong
    if($nama_lengkap == ""){
        header("location:FDP.php?nama_lengkap=kosong");
    }
    // else{echo "nama_lengkap anda adalah". $nama_lengkap;}
    if($jenis_kelamin == ""){
        header("location:FDP.php?jenis_kelamin=kosong");
    }
    // else{echo "jenis_kelamin anda adalah". $jenis_kelamin;}
    if($nisn == ""){
        header("location:FDP.php?nisn=kosong");
    }
    // else{echo "nisn anda adalah". $nisn;}
    if($nik == ""){
        header("location:FDP.php?nik=kosong");
    }
    // else{echo "nik anda adalah". $nik;}
    if($tgl_lahir == ""){
        header("location:FDP.php?tgl_lahir=kosong");
    }
    // else{echo "tgl_lahir anda adalah". $tgl_lahir;}
    if($tempat_lahir == ""){
        header("location:FDP.php?tempat_lahir=kosong");
    }
    // else{echo "tempat_lahir anda adalah". $tempat_lahir;}
    if($alamat_jalan == ""){
        header("location:FDP.php?alamat_jalan=kosong");
    }
    // else{echo "alamat_jalan anda adalah". $alamat_jalan;}
    if($rt == ""){
        header("location:FDP.php?rt=kosong");
    }
    // else{echo "rt anda adalah". $rt;}
    if($rw == ""){
        header("location:FDP.php?rw=kosong");
    }
    // else{echo "rw anda adalah". $rw;}
    if($nama_dusun == ""){
        header("location:FDP.php?nama_dusun=kosong");
    }
    // else{echo "nama_dusun anda adalah". $nama_dusun;}
    if($nama_kelurahan_desa == ""){
        header("location:FDP.php?nama_kelurahan_desa=kosong");
    }
    // else{echo "nama_kelurahan_desa anda adalah". $nama_kelurahan_desa;}
    if($kecamatan == ""){
        header("location:FDP.php?kecamatan=kosong");
    }
    // else{echo "kecamatan anda adalah". $kecamatan;}
    if($kode_pos == ""){
        header("location:FDP.php?kode_pos=kosong");
    }
    // else{echo "kode_pos anda adalah". $kode_pos;}
    if($tempat_tinggal == ""){
        header("location:FDP.php?tempat_tinggal=kosong");
    }
    // else{echo "tempat_tinggal anda adalah". $tempat_tinggal;}
    if($moda_transportasi == ""){
        header("location:FDP.php?moda_transportasi=kosong");
    }
    // else{echo "moda_transportasi anda adalah". $moda_transportasi;}
    if($no_hp == ""){
        header("location:FDP.php?no_hp=kosong");
    }
    // else{echo "no_hp anda adalah". $no_hp;}
    if($no_telp == ""){
        header("location:FDP.php?no_telp=kosong");
    }
    // else{echo "no_telp anda adalah". $no_telp;}
    if($email == ""){
        header("location:FDP.php?email=kosong");
    }
    // else{echo "email anda adalah". $email;}
    if($penerima_kps_pkh_kip == ""){
        header("location:FDP.php?penerima_kps_pkh_kip=kosong");
    }
    // else{echo "penerima_kps_pkh_kip anda adalah". $penerima_kps_pkh_kip;}
    if($kewarganegaraan == ""){
        header("location:FDP.php?kewarganegaraan=kosong");
    }
    // else{echo "kewarganegaraan anda adalah". $kewarganegaraan;}
?>