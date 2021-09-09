<?php

/*  CONVERSION DE TIPOS

    existen tres formas:
     - a traves del contexto,
     - forzado de tipo,
     - funciones
*/


$variableStringOne = '20.2 hola mundo';
$variableStringTwo = 'hola mundo 20';
$variableStringThree = '20';
$variableDouble = 27.6;
$variableInteger = 21;
$variableIntegerTwo = 0;
$variableBoolean = true; // or false


// [CONVERSION A ENTEROS]

// Tipo Contexto : se refiere a que el tipo de variable se va a determinar por el contexto por el cual estemos utilizando.

$suma = 20 + $variableStringOne;
echo $suma . ' ' . gettype($suma);

// $suma2 = 20 + $variableStringTwo;
// echo $suma2 . gettype($variableStringTwo); // error fatal : porque no hay ningun numero para que haga la conversion de suma.


echo "<hr />";
// Forzado de tipo : 
echo $variableStringThree . ' ' . gettype($variableStringThree);
echo "<br />";
$int = (int)$variableStringThree;
echo $int . ' ' . gettype($int);


echo "<hr />";
// Tipo con función : 
$func = intval($variableStringThree);
echo $func . ' ' . gettype($func);


echo "<hr /><hr />";
// + Conversion a numeros de tipo float o double (numero real) +

// forzado de tipo
$numReal = (float) $variableStringOne;
echo $numReal . ' ' . gettype($numReal);

echo "<hr />";
// funcion
$functionReal = floatval($variableStringThree);
echo $functionReal . ' ' . gettype($functionReal);
echo "<br />";
$functionReal = floatval($variableBoolean);
echo $functionReal . ' ' . gettype($functionReal);


echo "<hr /><hr />";
// + Conversion a numeros de tipo Booleano +
// tenemos dos tipos:
//  - forzado de tipo.
//  - function.

$boolean = (bool) $variableStringTwo;
echo $boolean . ' ' . gettype($boolean);
echo "<br />";
$boolean = (boolean) $variableInteger;
echo $boolean . ' ' . gettype($boolean);
echo "<br />";
$boolean = boolval($variableIntegerTwo);
echo $boolean . ' ' . gettype($boolean);


echo "<hr /><hr />";
// + Conversión a tipo array +

// function explode
$numeros = "1,2, 3, 4";
$listNumbers = explode(',', $numeros, 5); // ('separador', $variable, int limite)

echo $listNumbers[0]; // 1

echo "<pre>";
print_r($listNumbers);
var_dump($listNumbers);
echo "</pre>";

echo "<hr />";

// tipo forzado
$list = (array) $variableInteger;
echo $list[0] . ' ' . gettype($list) . '<br />';

$list = (array) $variableDouble;
echo "<div style='background-color: #eee; border-radius: 15px; padding: 15px;'>";
echo $list[0] . ' ' . gettype($list[0]);
echo $list[1] . ' ' . gettype($list[0]);
echo "</div>";

echo "<hr />";
$listColors = array('red', 'yellow', 'blue', 'green');
$string = implode(' - ', $listColors); // ('separador', array)
echo $string;