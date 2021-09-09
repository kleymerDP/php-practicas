<?php

const CONSTANTE = 'Soy una constante';
const COLORES = array('azul', 'anaranjando', 'morado');

print CONSTANTE;
print COLORES[0];

// define
define('CONSTANTE2', 'hola mundo');
echo CONSTANTE2;

define ('COLORES2', array('negro', 'blanco'));
echo COLORES2[0] . ', ' . COLORES2[1];


// constantes pre-definidas por PHP
// https://www.php.net/manual/es/language.constants.predefined.php
// https://www.php.net/manual/es/reserved.constants.php

echo "<hr>";
echo PHP_VERSION;