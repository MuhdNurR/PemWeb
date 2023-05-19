<?php
include '../koneksi.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
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

$i = 2;
$no = 1;

while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
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
$write->save('Report Data Peserta Didik.xlsx');

header('location: ../dashboardadmin.php');
