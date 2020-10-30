<?php
// Bestand met functions inladen, deze regel laten staan aub
// require './includes/functions.php';

// Laad de composer autoloader in
require 'vendor/autoload.php';

// Lees de documentatie van de bacon/bacon-qr-code package
// Zo kom je te weten hoe je deze package kunt gebruiken
// https://github.com/Bacon/BaconQrCode

use CodeItNow\BarcodeBundle\Utils\QrCode;

$qrCode = new QrCode();
$qrCode
    ->setText('https://scheeperscatering.nl/wp-content/uploads/2019/03/bier.jpg')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('Bier?')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;
$qrCode->save("qrcode.png");
echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';

// Maak een QR code met als inhoud een leuke URL
// Tip: Gebruik de SvgImageBackEnd()

// Sla de QR code op als afbeelding: "qrcode.svg"
