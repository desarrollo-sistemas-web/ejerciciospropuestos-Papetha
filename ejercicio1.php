<?php

// Desarrolla una función con el nombre "areaTriangulo" para calcular el área de un triángulo.

// Aquí tu código

function areaTriangulo($altura, $base){
    return ($altura * $base)/2;
}
areaTriangulo(1,1);

// TESTS
assert(areaTriangulo(1, 1) == 0.5);
assert(areaTriangulo(2, 2) == 2);
assert(areaTriangulo(2, 3) == 3);