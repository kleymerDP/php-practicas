<?php

// tema: interpolacion y concatenacion

// -concatenacion: comillas dobles
// forma 1
$palabra = "Código";
$union = $palabra . " Simple";
echo $union;

echo "<br />";

// forma 2
$palabra .= " Desarrollador de Software";
echo $palabra;


echo "<hr />";

// - interpolación:
// forma 1
$letter = 'Carro';
echo "El $letter va demasiado rápido";

echo "<br />";

// forma 2
echo "El {$letter} es nuevo";


echo "<hr />";

// - caracter de escape (en comillas dobles)
//https://www.php.net/manual/en/regexp.reference.escape.php
echo "hola mundo \r adios";


// OJO : en las comillas simples '' no se puede hacer la interpolación ni caracteres escapados