<?php  

require_once 'vendor/autoload.php';


use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

$text = isset($_POST['text']) ? $_POST['text'] : '';

// Create QR code
$qrCode = QrCode::create('Life is too short to be generating QR codes')
->setEncoding(new Encoding('UTF-8'))
->setSize(300)
->setMargin(10)
->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
->setForegroundColor(new Color(0, 0, 0))
->setBackgroundColor(new Color(255, 255, 255))
->setErrorCorrectionLevel(new ErrorCorrectionLevelLow());


// Create generic logo
$logo = Logo::create(__DIR__.'/assets/logo/php.png')
->setResizeToWidth(30);

// Create generic label
$label = Label::create('QR CODE')
->setTextColor(new Color(0, 0, 0));

$writer = new PngWriter;
$result = $writer->write($qrCode,$logo,$label);


// Save it to a file
$result->saveToFile(__DIR__."/assets/qrcode/".time().".png");


header('Location: index.php?generated=true');