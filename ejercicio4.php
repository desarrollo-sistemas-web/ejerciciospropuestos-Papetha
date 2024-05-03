<?php

// Escribe una función llamada "mayorDelArreglo" que reciba un arreglo de números y devuelva el mayor número que contiene.
// Si el arreglo está vacío la función deberá devolver -1.


// Aquí tu código
$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}
print_r($numeros);

function mayorDelArreglo($numeros){
    if ($numeros==[]) {
        return -1;
    }else {
        echo max($numeros);
        return max($numeros);
    }
}
mayorDelArreglo($numeros);

// TESTS
assert(mayorDelArreglo([1, 2, 3, 4, 5]) == 5);
assert(mayorDelArreglo([5, 4, 3, 2, 1]) == 5);
assert(mayorDelArreglo([1, 2, 3, 4, 5, 5]) == 5);
assert(mayorDelArreglo([1, 2, 3, 4, 5, 5, 5]) == 5);
assert(mayorDelArreglo([]) == -1);