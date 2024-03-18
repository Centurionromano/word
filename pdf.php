<?php
require 'vendor/autoload.php';
$pdf=new TCPDF ();
$pdf->AddPage();
$pdf->Write(1,'Ejemplo documento PDF','',false,'C');
$pdf->Output('hello_world.pdf');

?>