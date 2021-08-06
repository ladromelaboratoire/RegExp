<?php

namespace ladromelaboratoire\regexp;
class regexp {
	// 0 or country code leading, up to 15 digits
	public const PHONE = '^(\+[1-9][0-9]{0,2}|[0]){1}[1-9][0-9]{7,12}$';
	// All EU VAT code per country
	public const VATEU = '^(DE\d{9}|ATU\d{8}|BE0\d{9}|BG\d{9,10}|CY[0-9A-Z]{9}|HR\d{11}|DK\d{8}|ES[0-9A-Z]{1}\d{7}[0-9A-Z]{1}|EE\d{9}|FI\d{8}|FR[0-9A-Z]{2}\d{9}|EL\d{9}|HU\d{8}|IE\d{7}[A-Z]{1,2}|IT\d{11}|LV\d{11}|LT\d{9,12}|LU\d{8}|MT\d{8}|NL[\dB]{11}|PL\d{10}|PT\d{9}|CZ\d{8,10}|RO\d{2,10}|GB\d{9}|SK\d{10}|SI\d{8}|SE\d{10}01)$';
	// French registre national des associations
	public const RNA = '^W\d{9}$';
	// French SIRET
	public const SIRET = '^\d{14}$';
	// French SIREN
	public const SIREN = '^\d{9}$';
	// French code APE
	public const APE = '^\d{4}[A-Z]{1}$';
	// French code NAF
	public const NAF = '^(\d{2}|\d{2}\.\d{1,2}[A-Z]?|\d{2}\.\d{2}\.\d{1,2})$';
	// French street number
	public const STREETNO = '^\d{1,6}[ ]?([a-z]{1}|bis|ter)?$';
	// Zip code - most of UE countries
	public const ZIPCODE = '^(\d{3,6}|2(A|B)\d{3}|\d{2}[ -]?\d{3}|\d{3}[ -]?\d{2}|[A-Z]{2}\d{1}[A-Z]{1}[ ]?\d{1}[A-Z]{2}|LV-\d{4}|[A-Z]{1,3}[-]?\d{1,4}|\d{4}[-]?[A-Z]{2})$';
	
}

?>