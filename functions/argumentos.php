<?php

function suma(int $num1, int $num2) {
    $suma = $num1 + $num2;
    echo "La suma es $suma";
}

suma(5, 8);

echo "<hr>";

//array
suma_array(array(10, 5));

function suma_array($entrada) {
    $num1 = $entrada[0];
    $num2 = $entrada[1];

    echo "el resultado es " . ($num1 + $num2);
}

echo "<hr>";

//a travez de las referencias
function resta(&$num) {

    $num = 20 - $num;
}

$result = 13;
resta($result);
echo $result;

echo "<hr>";

//funciones recursivas (que se llama a si misma)

function recursividad($a) {

    if ($a < 20) {
        echo "$a \n";
        recursividad($a + 1);
    }

}

recursividad(1);



