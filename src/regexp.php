<?php

namespace ladromelaboratoire\regexp;

class regexp {
	
	//Time
	public const HM_INTL = '^([0-1][0-9]|2[0-3]):[0-5][0-9]$';
	public const HMS_INTL = '^([0-1][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$';
	// Email
	public const EMAIL_INTL = '^[A-Za-z0-9\!#\$\\%\&\'\*\+\-\/=?^_`{|}~]+[A-Za-z0-9\!#\$\\%\&\'\*\+\-\/=?^_`{|}~\.]+@([a-z0-9\-]+\.)+[a-z]{2,3}$';
	// Phone
	public const PHONE_EU = '^(\+[1-9][0-9]{0,2}|[0]){1}[1-9][0-9]{7,12}$';
	public const PHONE_FR = '^(0|\+33)\d{9}$';
	public const PHONE_FR_LANDLINE = '^(0|\+33)[1-59]\d{8}$';
	public const PHONE_FR_MOBILE = '^(0|\+33)[6-7]\d{8}$';
	//Companies ids
	public const APE_FR = '^\d{4}[A-Z]{1}$';
	public const EORI_FR = '^FR\d{14}$';
	public const NAF_FR = '^(\d{2}|\d{2}\.\d{1,2}[A-Z]?|\d{2}\.\d{2}\.\d{1,2})$';
	public const RNA_FR = '^W\d{9}$';
	public const SIREN_FR = '^\d{9}$';
	public const SIRET_FR = '^\d{14}$';
	// Street number
	public const STREETNO_FR = '^\d{1,5}[ ]?([a-z]{1}|bis|ter)?$';
	// All EU VAT code per country
	public const VAT_EU = '^(DE\d{9}|ATU\d{8}|BE0\d{9}|BG\d{9,10}|CY[0-9A-Z]{9}|HR\d{11}|DK\d{8}|ES[0-9A-Z]{1}\d{7}[0-9A-Z]{1}|EE\d{9}|FI\d{8}|FR\d{11}|EL\d{9}|HU\d{8}|IE\d{7}[A-Z]{1,2}|IT\d{11}|LV\d{11}|LT\d{9,12}|LU\d{8}|MT\d{8}|NL[\dB]{11}|PL\d{10}|PT\d{9}|CZ\d{8,10}|RO\d{2,10}|GB\d{9}|SK\d{10}|SI\d{8}|SE\d{10}01)$';
	public const VAT_AT = '^ATU\d{8}$';
	public const VAT_BE = '^BE0\d{9}$';
	public const VAT_BG = '^BG\d{9,10}$';
	public const VAT_CY = '^CY[0-9A-Z]{9}$';
	public const VAT_CZ = '^CZ\d{8,10}$';
	public const VAT_DE = '^DE\d{9}$';
	public const VAT_DK = '^DK\d{8}$';
	public const VAT_EE = '^EE\d{9}$';
	public const VAT_EL = '^EL\d{9}$';
	public const VAT_ES = '^ES[0-9A-Z]{1}\d{7}[0-9A-Z]{1}$';
	public const VAT_FI = '^FI\d{8}$';
	public const VAT_FR = '^FR\d{11}$';
	public const VAT_GB = '^GB\d{9}$';
	public const VAT_HR = '^HR\d{11}$';
	public const VAT_HU = '^HU\d{8}$';
	public const VAT_IE = '^IE\d{7}[A-Z]{1,2}$';
	public const VAT_IT = '^IT\d{11}$';
	public const VAT_LV = '^LV\d{11}$';
	public const VAT_LT = '^LT\d{9,12}$';
	public const VAT_LU = '^LU\d{8}$';
	public const VAT_MT = '^MT\d{8}$';
	public const VAT_NL = '^NL[\dB]{11}$';
	public const VAT_PL = '^PL\d{10}$';
	public const VAT_PT = '^PT\d{9}$';
	public const VAT_RO = '^RO\d{2,10}$';
	public const VAT_SE = '^SE\d{10}01)$';
	public const VAT_SI = '^SI\d{8}$';
	public const VAT_SK = '^SK\d{10}';
	
	// Zip codes
	public const ZIPCODE_EU = '^(\d{3,6}|2(A|B)\d{3}|\d{2}[ -]?\d{3}|\d{3}[ -]?\d{2}|[A-Z]{2}\d{1}[A-Z]{1}[ ]?\d{1}[A-Z]{2}|LV-\d{4}|[A-Z]{1,3}[-]?\d{1,4}|\d{4}[-]?[A-Z]{2})$';
	public const ZIPCODE_FR = '^\d{5}$';
	
}

?>