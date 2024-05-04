<?php

// Desarrolla una función con el nombre "perimetroTriángulo" para calcular el perímetro de un triángulo.
// Ten en cuenta que primero hay que validar que las medidas sean correctas para un triángulo. 🤓
// En caso de que no sea un triángulo, la función deberá devolver -1.


// Aquí tu código

function perimetroTriangulo($cat1, $cat2, $hipo){
    if ($cat1+$cat2>$hipo and $cat2+$hipo>$cat1 and $hipo+$cat1>$cat2) {
        return $cat1+$cat2+$hipo;
    }
    else {
        return -1;
    }
}
perimetroTriangulo(2,2,2);

// TESTS
assert(perimetroTriangulo(1, 1, 1) == 3);
assert(perimetroTriangulo(2, 2, 2) == 6);
assert(perimetroTriangulo(2, 3, 4) == 9);
assert(perimetroTriangulo(3, 4, 5) == 12);
assert(perimetroTriangulo(1, 1, 3) == -1);
