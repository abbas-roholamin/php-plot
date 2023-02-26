<?php


require_once __DIR__.'/vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->setChroot(__DIR__); //Read image
$options->setIsRemoteEnabled(true); //Enable remote access

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);

// Get form input
if (isset($_POST['product']) && isset($_POST['quantity']) && isset($_POST['price'])) {
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
}else{
    header('location:index.php');
}

// Read invoice template content
$html = file_get_contents(__DIR__.'/invoice.html');
$html = str_replace(['{{ product }}','{{ quantity }}','{{ price }}'], [$product,$quantity,$price], $html);

// Loading HTML DOM
$dompdf->loadHtml($html);

// Loading HTML File (Load static file)
// $dompdf->loadHtmlFile('invoice.html');

// (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Add meta deta
$dompdf->addInfo('Title','Invoice Paper');

// Output the generated PDF to Browser
$dompdf->stream('invoice.pdf', array("Attachment" => false));

// Save the PDF
$output = $dompdf->output();
file_put_contents(__DIR__.'/assets/pdf', $output);