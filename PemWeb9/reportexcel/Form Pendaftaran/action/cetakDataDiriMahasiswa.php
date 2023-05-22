<?php
include '../koneksi.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
<<<<<<< HEAD
$sheet->setCellValue('B1', 'Nama Lengkap');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'Agama');
$sheet->setCellValue('I1', 'Berkebutuhan Khusus');
$sheet->setCellValue('J1', 'Alamat');
$sheet->setCellValue('K1', 'RT');
$sheet->setCellValue('L1', 'RW');
$sheet->setCellValue('M1', 'Dusun');
$sheet->setCellValue('N1', 'Desa');
$sheet->setCellValue('O1', 'Kecamatan');
$sheet->setCellValue('P1', 'Kode Pos');
$sheet->setCellValue('Q1', 'Tempat Tinggal');
$sheet->setCellValue('R1', 'Transportasi');
$sheet->setCellValue('S1', 'No Hp');
$sheet->setCellValue('T1', 'Telp');
$sheet->setCellValue('U1', 'Email');
$sheet->setCellValue('V1', 'Penerima KPS/PKH/KIP');
$sheet->setCellValue('W1', 'NO KPS/PKH/KIP');
$sheet->setCellValue('X1', 'Kewarganegaraan');

$query = mysqli_query($koneksi, "SELECT * FROM datadiri");
=======
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'Jenis Pendaftaran');
$sheet->setCellValue('D1', 'Tanggal Masuk');
$sheet->setCellValue('E1', 'NIS');
$sheet->setCellValue('F1', 'No Peserta');
$sheet->setCellValue('G1', 'PAUD');
$sheet->setCellValue('H1', 'TK');
$sheet->setCellValue('I1', 'No SKHUN');
$sheet->setCellValue('J1', 'No Ijazah');
$sheet->setCellValue('K1', 'Hobi');
$sheet->setCellValue('L1', 'Cita-cita');

$query = mysqli_query($koneksi, "SELECT * FROM pesertadidik");
>>>>>>> 741f576b42a667936134a8650f7ee2022983afae

$i = 2;
$no = 1;

while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
<<<<<<< HEAD
    $sheet->setCellValue('B' . $i, $row['nama_lengkap']);
    $sheet->setCellValue('C' . $i, $row['jenis_kelamin']);
    $nisn = str_replace(',', '', $row['nisn']);
    $sheet->setCellValue('D' . $i, $nisn);

    $nik = str_replace(',', '', $row['nik']);
    $sheet->setCellValue('E' . $i, $nik);

    $sheet->setCellValue('F' . $i, $row['tempat_lahir']);
    $sheet->setCellValue('G' . $i, $row['tanggal_lahir']);
    $sheet->setCellValue('H' . $i, $row['agama']);
    $sheet->setCellValue('I' . $i, $row['berkebutuhan_khusus']);
    $sheet->setCellValue('J' . $i, $row['alamat_jalan']);
    $sheet->setCellValue('K' . $i, $row['rt']);
    $sheet->setCellValue('L' . $i, $row['rw']);
    $sheet->setCellValue('M' . $i, $row['nama_dusun']);
    $sheet->setCellValue('N' . $i, $row['nama_kelurahan_desa']);
    $sheet->setCellValue('O' . $i, $row['kecamatan']);
    $sheet->setCellValue('P' . $i, $row['kode_pos']);
    $sheet->setCellValue('Q' . $i, $row['tempat_tinggal']);
    $sheet->setCellValue('R' . $i, $row['moda_transportasi']);

    $nomor_hp = str_replace(',', '', $row['nomor_hp']);
    $sheet->setCellValue('S' . $i, $nomor_hp);

    $sheet->setCellValue('T' . $i, $row['nomor_telp']);
    $sheet->setCellValue('U' . $i, $row['email_pribadi']);
    $sheet->setCellValue('V' . $i, $row['penerima_kps_pkh_kip']);
    $sheet->setCellValue('W' . $i, $row['no_kps_pkh_kip']);
    $sheet->setCellValue('X' . $i, $row['kewarganegaraan']);

=======
    $sheet->setCellValue('B' . $i, $row['tanggal']);
    $sheet->setCellValue('C' . $i, $row['jenis_pendaftaran']);
    $sheet->setCellValue('D' . $i, $row['tanggal_masuk']);
    $nis = str_replace(',', '', $row['nis']);
    $sheet->setCellValue('E' . $i, $nis);
    $sheet->setCellValue('F' . $i, $row['no_peserta']);
    $sheet->setCellValue('G' . $i, $row['paud']);
    $sheet->setCellValue('H' . $i, $row['tk']);
    $sheet->setCellValue('I' . $i, $row['no_skhun']);
    $sheet->setCellValue('J' . $i, $row['no_ijazah']);
    $sheet->setCellValue('K' . $i, $row['hobi']);
    $sheet->setCellValue('L' . $i, $row['cita_cita']);
>>>>>>> 741f576b42a667936134a8650f7ee2022983afae
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
        ]
    ]
];

$i = $i - 1;
$sheet->getStyle('A1:L' . $i)->applyFromArray($styleArray);

$write = new Xlsx($spreadsheet);
<<<<<<< HEAD
$write->save('../data/Report Data Diri Mahasiswa.xlsx');
=======
$write->save('Report Data Peserta Didik.xlsx');
>>>>>>> 741f576b42a667936134a8650f7ee2022983afae

header('location: ../dashboardadmin.php');
