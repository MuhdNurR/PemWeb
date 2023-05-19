<?php 
    include 'koneksi.php';
    
    // Menyimpan data kedalam variabel terlebih dahulu
    $tgl_isi = $_POST['tgl_isi'];
    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
    $tgl_masuk_sekolah = $_POST['tgl_masuk_sekolah'];
    $nis = $_POST['nis'];
    $nomor_peserta_ujian = $_POST['nomor_peserta_ujian'];
    $paud = $_POST['paud'];
    $tk = $_POST['tk'];
    $no_skhun = $_POST['no_skhun'];
    $no_ijazah = $_POST['no_ijazah'];
    $hobi = $_POST['hobi'];
    $citacita = $_POST['citacita'];
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
    $query = "INSERT INTO regis_peserta_didik SET tgl_isi='$tgl_isi', jenis_pendaftaran='$jenis_pendaftaran', tgl_masuk_sekolah='$tgl_masuk_sekolah', nis='$nis', nomor_peserta_ujian='$nomor_peserta_ujian', paud='$paud', tk='$tk', no_skhun='$no_skhun', no_ijazah='$no_ijazah', hobi='$hobi', citacita='$citacita'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman form-input.php
    header("location:FDP.php");
    
    // Pengecekan apakah data inputan kosong
    if($tgl_isi == ""){
        header("location:FDP.php?tgl_isi=kosong");
    }
    // else{echo "tgl_isi anda adalah". $tgl_isi;}
    if($jenis_pendaftaran == ""){
        header("location:FDP.php?jenis_pendaftaran=kosong");
    }
    // else{echo "jenis_pendaftaran anda adalah". $jenis_pendaftaran;}
    if($tgl_masuk_sekolah == ""){
        header("location:FDP.php?tgl_masuk_sekolah=kosong");
    }
    // else{echo "tgl_masuk_sekolah anda adalah". $tgl_masuk_sekolah;}
    if($nis == ""){
        header("location:FDP.php?nis=kosong");
    }
    // else{echo "nis anda adalah". $nis;}
    if($nomor_peserta_ujian == ""){
        header("location:FDP.php?nomor_peserta_ujian=kosong");
    }
    // else{echo "nomor_peserta_ujian anda adalah". $nomor_peserta_ujian;}
    if($paud == ""){
        header("location:FDP.php?paud=kosong");
    }
    // else{echo "paud anda adalah". $paud;}
    if($tk == ""){
        header("location:FDP.php?tk=kosong");
    }
    // else{echo "tk anda adalah". $tk;}
    if($no_skhun == ""){
        header("location:FDP.php?no_skhun=kosong");
    }
    // else{echo "no_skhun anda adalah". $no_skhun;}
    if($no_ijazah == ""){
        header("location:FDP.php?no_ijazah=kosong");
    }
    // else{ echo "no_ijazah anda adalah". $no_ijazah;}
    if($hobi == ""){
        header("location:FDP.php?hobi=kosong");
    }
    // else{echo "hobi anda adalah". $hobi;}
    if($citacita == ""){
        header("location:FDP.php?citacita=kosong");
    }
    // else{echo "citacita anda adalah". $citacita;}
    
?>