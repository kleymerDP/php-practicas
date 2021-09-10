<?php

// $vengador = 'thor';

$nameAvenger = 'Thoer';

if (isset($nameAvenger)) {

    $getAvenger = strtolower($nameAvenger);

    $powerAvenger = array(
        'iron-man' => 'The tecnolgy',
        'thor' => 'controls lightning',
        'thor' => 'crushes everything'
    );

    $wrongAvenger = 'avenger not found';
    
    echo "Your avenger is <b>{$getAvenger}</b><br>";

    echo $powerAvenger[$getAvenger] ?: $wrongAvenger;

} else {
    echo 'please enter an avenger';
}
// ---- vs -----

echo '<hr>';
$typeVengador;

$typevengador = strtolower($typeVengador);
echo "Su vengador es: {$typeVengador}<br>";

switch($typeVengador) {
    case 'thor' : echo 'Controla los rayos'; 
        break;
    case 'iron-man' : echo 'Mucha tecnología'; 
        break;
    case 'hulk' : echo 'Aplasta todo'; 
        break;
    default : echo 'No se ha encontrado su vengador';
}