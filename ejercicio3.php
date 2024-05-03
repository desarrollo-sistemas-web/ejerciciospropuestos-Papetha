<?php

// Escribe una funcion llamada "operacion" que reciba 3 parámetros, el primero y el segundo serán 2 numeros enteros positivos y el tercero un string con un operador matemático (+, -, *, /)
// La función deberá devolver el resultado de la operación indicada en el tercer parámetro con los dos primeros números.
// Si el operador no es válido, la función deberá devolver -1.

// Aquí tu código

function operacion(int $num1, int $num2, string $num3){
    if ($num3=='+') {
       return $num1 + $num2;
    }elseif ($num3=='-') {
       return $num1 - $num2;
    }elseif ($num3=='*') {
        return $num1 * $num2;
    }elseif ($num3=='/') {
        return $num1 / $num2;
    }elseif ($num3=='') {
        return -1;
    }
}
operacion(2,2,'x');

// TESTS
assert(operacion(1, 1, '+') == 2);
assert(operacion(2, 2, '-') == 0);
assert(operacion(2, 3, '*') == 6);
assert(operacion(4, 2, '/') == 2);
assert(operacion(4, 2, 'x') == -1);