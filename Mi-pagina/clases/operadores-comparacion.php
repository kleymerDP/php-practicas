<?php

$numero1 = 20;
$numero2 = '50';

echo "<b>\$numero1</b> = {$numero1}<br><b>\$numero2</b> = '{$numero2}'";


echo "<hr>";
// operador de comparación
echo "Soy un operador de comparación: ($numero1 == $numero2)<br>";
var_dump($numero1 == $numero2);


echo "<hr>";
// operador de diferencia
echo "Soy un operador de diferencia: ($numero1 != $numero2) or ($numero1 <> $numero2)<br>";
var_dump($numero1 <> $numero2);


echo "<hr>";
// operador identico
echo "Soy un operador de identico: ($numero1 === $numero2)<br>";
var_dump($numero1 === $numero2);


echo "<hr>";
// operador no identico
echo "Soy un operador no identico: ($numero1 !== $numero2)<br>";
var_dump($numero1 !== $numero2);


echo "<hr>";

$a;
$b = 50;

echo "<b>\$numero1</b> = {$a}<br><b>\$numero2</b> = {$b}<hr>";


// OPERADOR NAVE ESPACIAL
echo "Soy un operador espacial: ($numero1 <=> $numero2)<br>";
echo "<div style='width: 150px; margin: 0 auto; border-radius: 5px; background-color: #eee; text-align: center; padding: 7px;'>
        <p>Si a > b => 1</p>
        <p>Si a < b => -1</p>
        <p>Si a = b => 0</p>
    </div>";
var_dump($numero1 <=> $numero2);


echo "<hr>";
// OPERADOR DE ELVIS
echo "Soy un operador de elvis: (". isset($a) . "?: 'Aquí va lo negativo (false)')<br>";
var_dump(isset($a) ?: 'Aquí va lo negativo');


echo "<hr>";
// OPERADOR TERNARIO
echo "Soy un operador de elvis: (\$valor ? 'imprimir el true' : 'imprimir el false')<br>";
var_dump(isset($a) ? 'El número existe (true)' : 'El numero no existe (false)');


echo "<hr>";
// OPERADOR FUSION null
echo "Soy un operador funcion null ??<br>";
var_dump($a ?? 'El numero es null o no existe');
echo "<br><b>Con este operador, no es necesario poner la función isset() para verificar si existe la variable,<br>Lo podemos usar sin la necesidad de que la variable tenga asignado un valor</b>";