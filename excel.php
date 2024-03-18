<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="reporte.xlsx"');

$spreadsheet = new Spreadsheet();

$datos = [
[NULL, 'Nombre', 'Edad', 'Calificación'],
['1','Jorge', 19, 80],
['2','Paulina', 23, 96],
['3','Pedro', 31, 85],
['4', 'Claudia', 22, 100],
];

$spreadsheet->getActiveSheet()->fromArray($datos);
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
die;

?>