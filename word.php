<?php
/* */
//Es la primera versión del documento de la UDG
require 'vendor/autoload.php';

$phpWord = new \PhpOffice\PhpWord\PhpWord();

header ('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header ('Content-Disposition: attachment;filename="prueba.docx"');

$section = $phpWord->addSection();
$section -> addText ("Este es un pequeño mensaje de prueba, si puedes leer esto es que funciona.");

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('php://output');


/* 
//Es la segunda versión del documento UDEG
require 'vendor/autoload.php';
$phpWord = new \PhpOffice\PhpWord\PhpWord();
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment;filename="tabla.docx"');
$section = $phpWord->addSection();
$htmlString = "<table>
<tr>
<th>Nombre</th>
<th>Edad</th>
</tr>
<tr>
<td>Juan</td>
<td>35</td>
</tr>
<tr>
<td>Luis</td>
<td>22</td>
</tr>
<table>";

\PhpOffice\PhpWord\Shared\Html::addHtml($section, $htmlString);
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter ($phpWord, 'Word2007');
$objWriter->save('php://output');
die;

*/

/*
//Es la versión de youtube
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('plantilla.docx');
 
$nombre = "Sandra S.L.";
$direccion = "Mi dirección";
$municipio = "Mrd";
$provincia = "Bdj";
$cp = "02541";
$telefono = "24536784";


// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre_empresa',$nombre);
$templateWord->setValue('direccion_empresa',$direccion);
$templateWord->setValue('municipio_empresa',$municipio);
$templateWord->setValue('provincia_empresa',$provincia);
$templateWord->setValue('cp_empresa',$cp);
$templateWord->setValue('telefono_empresa',$telefono);

// --- Guardamos el documento
$templateWord->saveAs('Documento02.docx');

header("Content-Disposition: attachment; filename=Documento02.docx; charset=iso-8859-1");
echo file_get_contents('Documento02.docx');
   */  


/*

// Este es un ejemplo de chat gpt
  // Establecemos las rutas de acceso
$rutaImagen = 'C:/ruta/a/imagen.jpg';
$rutaDocumento = 'C:/ruta/al/documento.docx';

// Creamos el documento
require_once 'vendor/autoload.php';
$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();

// Agregamos contenido
$paragraphStyle = $section->addParagraphStyle('pStyle', array('bold' => true));
$section->addText('Este es un párrafo de texto con estilo.', $paragraphStyle);
$section->addImage($rutaImagen);

$table = $section->addTable();
$table->addRow();
$table->addCell('Celda 1');
$table->addCell('Celda 2');

// Guardamos el documento
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save($rutaDocumento);

echo 'Documento creado correctamente.';


*/

?>