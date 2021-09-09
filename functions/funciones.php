<?php

function name() {
    echo "Hola soy una funcion";
}

name();


//condicion
$edad = 18;

if ($edad <= 18) {
    function party() {
        echo 'Welcome to party';
    }
}

party();

// function dentro de function

function foo() {

    function bar() {
        echo 'Hola ya existo';
    }

}

foo();
bar();
