# RegExp
Collection d'expressions régulières utiles, disponibles sous la forme d'un module PHP composer.

## Types d'expressions
- Email
- Téléphone
- Heure:Minute
- Indentifiants d'entreprises françaises (SIRET, SIREN, RNA, APE, ...)
- Numéro de rue
- Numéro TVA
- Code postaux
- IBAN

## Exemples d'expressions
````
//EU VAT number
^(DE\d{9}|ATU\d{8}|BE0\d{9}|BG\d{9,10}|CY[0-9A-Z]{9}|HR\d{11}|DK\d{8}|ES[0-9A-Z]{1}\d{7}[0-9A-Z]{1}|EE\d{9}|FI\d{8}|FR[0-9A-Z]{2}\d{9}|EL\d{9}|HU\d{8}|IE\d{7}[A-Z]{1,2}|IT\d{11}|LV\d{11}|LT\d{9,12}|LU\d{8}|MT\d{8}|NL[\dB]{11}|PL\d{10}|PT\d{9}|CZ\d{8,10}|RO\d{2,10}|GB\d{9}|SK\d{10}|SI\d{8}|SE\d{10}01)$
````

## Usage
Il suffit d'ajouter ce module comme dépendance Composer à votre projet.  
C'est une classe composée uniquement de constantes. Jetez un oeil au fichier de test pour un exemple d'usage.