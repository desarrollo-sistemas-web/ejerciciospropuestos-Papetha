<?php

// Escribe una función llamada "primos" que encuentre y almacene en un array todos los números primos entre 1 y 100. Luego, imprime este array.
// Un número primo es un número que solo es divisible por 1 y por sí mismo.

// Aquí tu código


function primos($numeros){
    $numeros = array();
    for ($i=2; $i <=100 ; $i++) { 
        $primos=true;
        for ($i=0; $i < sqrt($i); $i++) { 
            
        }
    }
}

// TESTS
assert(primos() == [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97]);