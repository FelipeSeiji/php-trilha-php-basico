<?php
require_once "vendor/autoload.php";

use \Felipeseiji\DigitalCep\Search;

$busca = new Search();
$resultado = $busca->getAddressFromZipCode('01001000');

print_r($resultado);