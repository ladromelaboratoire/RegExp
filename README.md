# RegExp
Quelques expressions régulières utiles

**Téléphone**  
````
^(\+[1-9][0-9]{0,2}|[0]){1}[1-9][0-9]{7,12}$
````
Format français (0xxxxxxxxx) ou international (+xxxxxxxxxxxxxxx)

**TVA intracommunautaire**  
````
^(DE\d{9}|ATU\d{8}|BE0\d{9}|BG\d{9,10}|CY[0-9A-Z]{9}|HR\d{11}|DK\d{8}|ES[0-9A-Z]{1}\d{7}[0-9A-Z]{1}|EE\d{9}|FI\d{8}|FR[0-9A-Z]{2}\d{9}|EL\d{9}|HU\d{8}|IE\d{7}[A-Z]{1,2}|IT\d{11}|LV\d{11}|LT\d{9,12}|LU\d{8}|MT\d{8}|NL[\dB]{11}|PL\d{10}|PT\d{9}|CZ\d{8,10}|RO\d{2,10}|GB\d{9}|SK\d{10}|SI\d{8}|SE\d{10}01)$
````
Tous les pays de l'union européenne avec leur spécificité (DE, AT, BE, BG, CY, HR, DK, ES, EE, FI, FR, EL, HU, IE, LV, LT, LU, MT, NL, PL, PT, CZ, RO, GB, SK, SI, SE)

**code RNA**  
````
^W\d{9}$
````
Registre national des associations

**code SIRET**  
````
^\d{14}$
````

**code SIREN**  
````
^\d{9}$
````

**code APE**  
````
^\d{4}[A-Z]{1}$
````

**code NAF**  
````
^(\d{2}|\d{2}\.\d{1,2}[A-Z]?|\d{2}\.\d{2}\.\d{1,2})$
````

**Numéro de voie**  
````
^\d{1,6}[ ]?([a-z]{1}|bis|ter)?$
````

**Code postal**  
````
^(\d{3,6}|2(A|B)\d{3}|\d{2}[ -]?\d{3}|\d{3}[ -]?\d{2}|[A-Z]{2}\d{1}[A-Z]{1}[ ]?\d{1}[A-Z]{2}|LV-\d{4}|[A-Z]{1,3}[-]?\d{1,4}|\d{4}[-]?[A-Z]{2})$
````
la plupart des pays européens