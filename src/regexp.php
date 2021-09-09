<?php

/****************
 * Collection of regular expressions to validate some input strings
 * Ordered by Type / Country or zone / other tag
 *
 * Provided as they are - please test before use to be sure it covers all your use cases.
 * PR's are welcome
 *
 * Use them for whatever you want. However, regular expression is a first approach in data validation. A string matching a pattern cannot be considered 100% validated. It will tell you the string looks like the waited pattern. Keep that in mind especially when dealing with data using check sums for instance. In some other cases, some combinations may not exist but matching a pattern.
 * 
 ***************/

namespace ladromelaboratoire\regexp;

class regexp {
	
	// Companies ids
	public const APE_FR = '/^\d{4}[A-Z]{1}$/';
	public const EORI_BE = '/^BE0\d{9}$/';
	public const EORI_FR = '/^FR\d{14}$/';
	public const EORI_IT = '/^IT\d{11}$/';
	public const LEI_INTL = '/^\d{4}[\dA-Z]{14}(?:[0-8]\d|9[0-6])$/'; // https://www.gleif.org/fr/about-lei/iso-17442-the-lei-code-structure/
	public const NAF_FR = '/^(?:\d{2}|\d{2}\.\d{1,2}[A-Z]?|\d{2}\.\d{2}\.\d{1,2})$/';
	public const RCS_FR = '/^(?:RCS )?[a-zA-Z -]+[ ][A-Z]{1}[ ]?(?:(?:\d{3})[ ]?){2}(?:\d{3})$/';
	public const RNA_FR = '/^W\d{9}$/';
	public const SIREN_FR = '/^\d{9}$/';
	public const SIRET_FR = '/^\d{14}$/';
	
	// Date Time
	public const DATE_EU = '/^(?:(?:(?:0?[1-9]|[12]\d)[ \/.-]0?2)|(?:0?\d|[1-2]\d|3[01])[ \/.-](?:0?[13-9]|1[0-2]))[ \/.-](?:\d{2}|\d{4})$/'; // JJ/MM/DD or J.M.DDDD
	public const HM24_INTL = '/^(?:[01]?[0-9]|2[0-3]):[0-5][0-9]$/';
	public const HMS24_INTL = '/^(?:[01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/';
		
	// Email
	public const EMAIL_INTL = "/^[A-Za-z0-9]+[A-Za-z0-9\/\-!&'*+%$#=?^_`{|}~\.]*@(?:[a-z0-9\-]+\.)+[a-z]{2,12}$/"; //long TLD proof
	public const EMAIL_INTL_SIMPLE = '/^[a-z0-9]+[a-z0-9\-+_~\.]*@(?:[a-z0-9\-]+\.)+[a-z]{2,12}$/'; //long TLD proof
	
	// Finances
	public const IBAN_AD = '/^AD[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{4}[ ]?\d{4}[ ]?[\dA-Z]{12}$/';
	public const IBAN_AT = '/^AT[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{5}[ ]?\d{11}$/';
	public const IBAN_BE = '/^BE[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{3}[ ]?\d{7}[ ]?\d{2}$/';
	public const IBAN_BG = '/^BG[ ]?(?:[0-8]\d|9[0-6])[ ]?[A-Z]{4}[ ]?\d{4}[ ]?\d{2}[ ]?[\dA-Z]{8}$/';
	public const IBAN_CH = '/^CH[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{5}[ ]?[\dA-Z]{12}$/';
	public const IBAN_DE = '/^DE[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{8}[ ]?\d{10}$/';
	public const IBAN_ES = '/^ES[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{4}[ ]?\d{4}[ ]?\d{2}[ ]?\d{10}$/';
	public const IBAN_FR = '/^(?:FR|GP|GF|MQ|RE|YT|MC|NC|PF|PM|TF|WF)[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{5}[ ]?\d{5}[ ]?[\dA-Z]{11}[ ]?\d{2}$/';
	public const IBAN_GB = '/^GB[ ]?(?:[0-8]\d|9[0-6])[ ]?[A-Z]{4}[ ]?\d{6}[ ]?\d{8}$/';
	public const IBAN_HR = '/^HR[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{7}[ ]?\d{10}$/';
	public const IBAN_IE = '/^IE[ ]?(?:[0-8]\d|9[0-6])[ ]?[A-Z]{4}[ ]?\d{6}[ ]?\d{8}$/';
	public const IBAN_IS = '/^IS[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{4}[ ]?\d{2}[ ]?\d{6}[ ]?\d{10}$/';
	public const IBAN_IT = '/^IT[ ]?(?:[0-8]\d|9[0-6])[ ]?[A-Z][ ]?\d{5}[ ]?\d{5}[ ]?[\dA-Z]{12}$/';
	public const IBAN_LI = '/^LI[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{5}[ ]?[\dA-Z]{12}$/';
	public const IBAN_LT = '/^LT[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{5}[ ]?\d{11}$/';
	public const IBAN_LU = '/^LU[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{3}[ ]?[\dA-Z]{13}$/';
	public const IBAN_MT = '/^MT[ ]?(?:[0-8]\d|9[0-6])[ ]?[A-Z]{4}[ ]?\d{5}[ ]?[\dA-Z]{18}$/';
	public const IBAN_PL = '/^PL[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{3}[ ]?\d{4}[ ]?\d{1}[ ]?\d{16}$/';
	public const IBAN_SE = '/^SE[ ]?(?:[0-8]\d|9[0-6])[ ]?\d{3}[ ]?\d{17}$/';

	// Hashes
	public const HASH_INTL_MD5 = '/^[a-fA-F0-9]{32}$/';
	public const HASH_INTL_SHA1 = '/^[a-fA-F0-9]{40}$/';
	public const HASH_INTL_SHA256 = '/^[A-Fa-f0-9]{64}$/';
	
	//License plates
	public const LICENSEPLATE_BE = '/^(?:(?:(?:[1-8]|O)-[A-Z]{3}-\d{3})|(?:(?:TL|GL|CD)-[A-Z]{2}-\d{3})|(?:(?:WA|XA)-\d{2}-[A-Z]{3})|(?:[AEP]-\d{1,3}))$/'; //Belgian format from 2014 onward
	public const LICENSEPLATE_FR = '/^(?:(?:[A-H]{2}|[J-N]{2}|[P-R]{2}|S[A-H]|S[J-N]|S[P-R]|ST|S[V-Z]|T[A-H]|T[J-N]|T[P-T]|T[V-Z]|[V-Z][A-H]|[V-Z][J-N]|[V-Z][P-T]|[V-Z][V-Z])-\d{3}-(?:[A-H]{2}|[J-N]{2}|[P-R]{2}|S[A-H]|S[J-N]|S[P-R]|ST|S[V-Z]|T[A-H]|T[J-N]|T[P-T]|T[V-Z]|[V-Z][A-H]|[V-Z][J-N]|[V-Z][P-T]|[V-Z][V-Z]))$/'; //French format from 2009 onward
	
	// Personal data
	public const NIR_FR = '/^[1-478]{1}\d{2}(?:0\d|1[0-2]|[23]\d|4[0-2]|[5-9]\d)(?:(?:0[1-9]|[1-9]\d|2A|2B)\d{3})\d{3}(?:[0-8]\d|9[0-6])$/';
	public const SSN_US = '(?!0{3})(?!6{3})[0-8]\d{2}-(?!0{2})\d{2}-(?!0{4})\d{4}$/';
	
	// Phone
	public const PHONE_INTL_RAW = '/^(\+[1-9][0-9]{0,2}|[0]){1}[1-9][0-9]{7,12}$/'; //sample +155566667777, +33123456789
	public const PHONE_INTL_FRIENDLY = '/^(?:0|\+)(?:[\d \(\)\-\.]){6,19}(?:\d){1}$/'; //sample +11 (0)12.3456-789
	public const PHONE_DE = '/^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{1,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/';
	public const PHONE_FR = '/^(?:0|\+33[ ]?)(?:\d[ \.]?)(?:\d\d[ \.]?){3}(?:\d\d)$/'; //sample 0123456789 or 01 23 45 67 89 or 01.23.45.67.89 or +33 1 23 45.67.89
	public const PHONE_FR_LANDLINE = '/^(?:0|\+33[ ]?)(?:[1-59][ \.]?)(?:\d\d[ \.]?){3}(?:\d\d)$/'; //sample 0123456789 or 01 23 45 67 89 or 01.23.45.67.89 or +33 1 23 45.67.89
	public const PHONE_FR_MOBILE = '/^(?:0|\+33[ ]?)(?:[67][ \.]?)(?:\d\d[ \.]?){3}(?:\d\d)$/'; //sample 0623456789 or 07 23 45 67 89 or 06.23.45.67.89 or +33 7 23 45.67.89
	public const PHONE_NL = '/^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$/';
	public const PHONE_UK = '/^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?$/';
	public const PHONE_US = '/^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$/';
	
	// Street number
	public const STREETNO_FR = '/^\d{1,5}[ ]?([a-z]{1}|bis|ter|quater)?$/';
	public const STREETNO_DE = '/^(?:[A-ZÄÖÜ][a-zäöüß]+(([.] )|( )|([-])))+[1-9][0-9]{0,3}[a-z]?$/';
	public const STREETNO_US = '/^((\d{1,6}\-\d{1,6})|(\d{1,6}\\\d{1,6})|(\d{1,6})(\/)(\d{1,6})|(\w{1}\-?\d{1,6})|(\w{1}\s\d{1,6})|((P\.?O\.?\s)((BOX)|(Box))(\s\d{1,6}))|((([R]{2})|([H][C]))(\s\d{1,6}\s)((BOX)|(Box))(\s\d{1,6}))?)$/';
	
	// URL & IP
	public const URL_INTL_FULL = '/^(?:(?:https?|ftp(?:es|s)?):\/\/)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:[^\s]*)?$/';
	public const URL_INTL_SIMPLE = '/^(?:(?:https?):\/\/)(?::\d+)?(?:[^\s]*)?$/';
	public const IPV4_INTL = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9]?[0-9])\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9]?[0-9])$/';
	public const IPV6_INTL = '/^(([0-9a-fA-F]{1,4}:){7,7}[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,7}:|([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2}|([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3}|([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4}|([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5}|[0-9a-fA-F]{1,4}:((:[0-9a-fA-F]{1,4}){1,6})|:((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}|::(ffff(:0{1,4}){0,1}:){0,1}((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])|([0-9a-fA-F]{1,4}:){1,4}:((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]))$'
	
	// VAT codes
	public const VAT_EU = '/^(?:EU[ ]?\d{8,10}|DE[ ]?\d{9}|AT[ ]?U\d{8}|BE[ ]?0\d{9}|BG[ ]?\d{9,10}|CY[ ]?[0-9A-Z]{9}|HR[ ]?\d{11}|DK[ ]?\d{8}|ES[ ]?[0-9A-Z]{1}\d{7}[0-9A-Z]{1}|EE[ ]?\d{9}|FI[ ]?\d{8}|FR[ ]?\d{11}|EL[ ]?\d{9}|HU[ ]?\d{8}|IE[ ]?\d{7}[A-Z]{1,2}|IT[ ]?\d{11}|LV[ ]?\d{11}|LT[ ]?\d{9,12}|LU[ ]?\d{8}|MT[ ]?\d{8}|NL[ ]?[\dB]{11}|PL[ ]?\d{10}|PT[ ]?\d{9}|CZ[ ]?\d{8,10}|RO[ ]?\d{2,10}|GB[ ]?(?:\d{9}|\d{12}|GD[ ]?[0-4]\d\d|HA[ ]?[5-9]\d\d)|SK[ ]?\d{10}|SI[ ]?\d{8}|SE[ ]?\d{10}01)$/';
	public const VAT_AT = '/^AT[ ]?U\d{8}$/';
	public const VAT_AU = '/^AU[ ]?\d{11}$/';
	public const VAT_BE = '/^BE[ ]?0\d{9}$/';
	public const VAT_BG = '/^BG[ ]?\d{9,10}$/';
	public const VAT_CA = '/^CA[ ]?[0-9A-Z]{9}$/';
	public const VAT_CH = '/^CHE[ ]?\d{9}(?:[ ]?(?:TVA|MWST|IVA))?$/';
	public const VAT_CY = '/^CY[ ]?[0-9A-Z]{9}$/';
	public const VAT_CZ = '/^CZ[ ]?\d{8,10}$/';
	public const VAT_DE = '/^DE[ ]?\d{9}$/';
	public const VAT_DK = '/^DK[ ]?\d{8}$/';
	public const VAT_EE = '/^EE[ ]?\d{9}$/';
	public const VAT_EL = '/^EL[ ]?\d{9}$/';
	public const VAT_ES = '/^ES[ ]?[0-9A-Z]{1}\d{7}[0-9A-Z]{1}$/';
	public const VAT_FI = '/^FI[ ]?\d{8}$/';
	public const VAT_FR = '/^FR[ ]?\d{11}$/';
	public const VAT_GB = '/^GB[ ]?(?:\d{9}|\d{12}|GD[ ]?[0-4]\d\d|HA[ ]?[5-9]\d\d)$/';
	public const VAT_HR = '/^HR[ ]?\d{11}$/';
	public const VAT_HU = '/^HU[ ]?\d{8}$/';
	public const VAT_IE = '/^IE[ ]?\d{7}[A-Z]{1,2}$/';
	public const VAT_IS = '/^IS[ ]?[0-9A-Z]{5,6}$/';
	public const VAT_IT = '/^IT[ ]?\d{11}$/';
	public const VAT_LV = '/^LV[ ]?\d{11}$/';
	public const VAT_LT = '/^LT[ ]?\d{9,12}$/';
	public const VAT_LU = '/^LU[ ]?\d{8}$/';
	public const VAT_MT = '/^MT[ ]?\d{8}$/';
	public const VAT_NL = '/^NL[ ]?[\dB]{11}$/';
	public const VAT_NZ = '/^NZ[ ]?\d{9,14}$/';
	public const VAT_PL = '/^PL[ ]?\d{10}$/';
	public const VAT_PT = '/^PT[ ]?\d{9}$/';
	public const VAT_RO = '/^RO[ ]?\d{2,10}$/';
	public const VAT_RS = '/^RS[ ]?\d{9}$/';
	public const VAT_SE = '/^SE[ ]?\d{10}01)$/';
	public const VAT_SI = '/^SI[ ]?\d{8}$/';
	public const VAT_SK = '/^SK[ ]?\d{10}$/';
	public const VAT_UA = '/^UA[ ]?\d{12}$/';
	
	// Zip codes
	public const ZIPCODE_EU = '/^(?:\d{3,6}|\d{2}[ -]?\d{3}|\d{3}[ -]?\d{2}|[A-Z]{2}\d{1}[A-Z]{1}[ ]?\d{1}[A-Z]{2}|LV-\d{4}|[A-Z]{1,3}[-]?\d{1,4}|\d{4}[-]?[A-Z]{2})$/';
	public const ZIPCODE_FR = '/^\d{5}$/';
	public const ZIPCODE_GB = '/^(([gG][iI][rR] {0,}0[aA]{2})|(([aA][sS][cC][nN]|[sS][tT][hH][lL]|[tT][dD][cC][uU]|[bB][bB][nN][dD]|[bB][iI][qQ][qQ]|[fF][iI][qQ][qQ]|[pP][cC][rR][nN]|[sS][iI][qQ][qQ]|[iT][kK][cC][aA]) {0,}1[zZ]{2})|((([a-pr-uwyzA-PR-UWYZ][a-hk-yxA-HK-XY]?[0-9][0-9]?)|(([a-pr-uwyzA-PR-UWYZ][0-9][a-hjkstuwA-HJKSTUW])|([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y][0-9][abehmnprv-yABEHMNPRV-Y]))) {0,}[0-9][abd-hjlnp-uw-zABD-HJLNP-UW-Z]{2}))$/';
	public const ZIPCODE_IT = '/^(?:V-|I-)?\d{5}$/';
	public const ZIPCODE_US = '/^[0-9]{5}(?:-[0-9]{4})?$/';
	
}

?>