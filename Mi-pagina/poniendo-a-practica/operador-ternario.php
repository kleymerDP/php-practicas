<?php

// function poder_vengador(string $vengador) {
//     return var_dump(isset($vengador));
// }
// echo poder_vengador(''); // bool(true)

// $vengador;
// var_dump(isset($vengador)); // bool(false)


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

    echo (isset($powerAvenger[$getAvenger])) ? "His power is {$powerAvenger[$getAvenger]}" : $wrongAvenger;

    /*
        if (isset($powerAvenger[$getAvenger])) {
            echo "His power is: {$powerAvenger[$getAvenger]}";
        } else {
            echo $wrongAvenger;
        }
    */

} else {
    echo 'please enter an avenger';
}