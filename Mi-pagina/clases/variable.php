<?php

echo "Hola mundo";

$integer = 1;
$float = 1.5;
$boolean = TRUE;
$array = array('Azul', 'Morado', 'Negro');
$string = 'Hola';

print $integer . '<br>';
print $float . '<br>';
print $boolean . '<br>';
print_r($array, true) . '<br>';
print $string . '<br>';

// variables globales

function variables_globales() {
    $variableLocal = 'Soy una variable local';
    echo $GLOBALS["global"];
    echo $variableLocal;
}

$global = 'Soy una variable global';

variables_globales();

// variables SUPERGLOBALS (variables propias de PHP)
/* https://www.php.net/manual/en/language.variables.superglobals.php */
