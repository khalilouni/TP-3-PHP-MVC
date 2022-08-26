<?php


require_once 'dompdf/autoload.inc.php';
require_once 'vendor/autoload.php';


use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
//var_dump($dompdf);

$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("liste des livres");


?>








