<?php
require '../vendor/autoload.php';
use ladromelaboratoire\regexp\regexp;

$data[] = array('FR00123456789', regexp::VAT_EU, 'VAT number test');
$data[] = array('FR00123456', regexp::VAT_FR, 'VAT number test');
$data[] = array('CY1N 1EY', regexp::ZIPCODE_EU, 'Zip code test');
$data[] = array('0123-AB', regexp::ZIPCODE_EU, 'Zip code test');
$data[] = array('0123456', regexp::ZIPCODE_FR, 'Zip code test');
$data[] = array('642Z', regexp::APE_FR, 'APE code test');
$data[] = array('64223', regexp::APE_FR, 'APE code test');
$data[] = array('W123445678', regexp::RNA_FR, 'RNA code test');
$data[] = array('A123445678', regexp::RNA_FR, 'RNA code test');
$data[] = array('my-account.name|hello@sub.server.tld', regexp::EMAIL_INTL, 'Email test');
$data[] = array('AD 23 1234 1234 12345A12345B', regexp::IBAN_AD, 'Andora IBAN code test');



foreach ($data as $line) {
	$result = preg_match('/' . $line[1] . '/', $line[0]);
	echo $line[2] . " - " . $line[0] . " : ";
	if($result === false) { 
		echo "error ";
	}
	else {
		if($result === 0) echo "not ";
		echo "passed <br/>";
	}
	
}

?>