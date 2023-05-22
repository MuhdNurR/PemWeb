<?php
include '../koneksi.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Ayah');
$sheet->setCellValue('C1', 'Tahun Lahir');
$sheet->setCellValue('D1', 'Pendidkan');
$sheet->setCellValue('E1', 'Pekerjaan');
$sheet->setCellValue('F1', 'Penghasilan');
$sheet->setCellValue('G1', 'Berkebutuhan Khusus');
$sheet->setCellValue('H1', 'Nama Ibu');
$sheet->setCellValue('I1', 'Tahun Lahir');
$sheet->setCellValue('J1', 'Pendidkan');
$sheet->setCellValue('K1', 'Pekerjaan');
$sheet->setCellValue('L1', 'Penghasilan');
$sheet->setCellValue('M1', 'Berkebutuhan Khusus');

$query = mysqli_query($koneksi, "SELECT * FROM dataayah JOIN dataibu ON dataibu.id = dataayah.id;");

$i = 2;
$no = 1;

while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['nama_ayah']);
    $sheet->setCellValue('C' . $i, $row['tahun_lahir_ayah']);
    $sheet->setCellValue('D' . $i, $row['pendidikan_ayah']);
    $sheet->setCellValue('E' . $i, $row['pekerjaan_ayah']);
    $sheet->setCellValue('F' . $i, $row['penghasilan_ayah']);
    $sheet->setCellValue('G' . $i, $row['berkebutuhan_khusus_ayah']);
    $sheet->setCellValue('H' . $i, $row['nama_ibu']);
    $sheet->setCellValue('I' . $i, $row['tahun_lahir_ibu']);
    $sheet->setCellValue('J' . $i, $row['pendidikan_ibu']);
    $sheet->setCellValue('K' . $i, $row['pekerjaan_ibu']);
    $sheet->setCellValue('L' . $i, $row['penghasilan_ibu']);
    $sheet->setCellValue('M' . $i, $row['berkebutuhan_khusus_ibu']);
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
$write->save('../data/Report Data Orang Tua.xlsx');

header('location: ../dashboardadminortu.php');
