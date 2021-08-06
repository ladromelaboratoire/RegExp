<?php
require '../vendor/autoload.php';
use ladromelaboratoire\regexp\regexp;

$data[] = array('FR00123456789', regexp::VATEU, 'VAT number test');
$data[] = array('FR00123456', regexp::VATEU, 'VAT number test');
$data[] = array('CY1N 1EY', regexp::ZIPCODE, 'Zip code test');
$data[] = array('0123-AB', regexp::ZIPCODE, 'Zip code test');
$data[] = array('0123456', regexp::ZIPCODE, 'Zip code test');
$data[] = array('642Z', regexp::APE, 'APE code test');
$data[] = array('64223', regexp::APE, 'APE code test');
$data[] = array('W123445678', regexp::RNA, 'RNA code test');
$data[] = array('A123445678', regexp::RNA, 'RNA code test');


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