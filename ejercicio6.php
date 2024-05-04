<?php

// Escribe una función llamada "primos" que encuentre y almacene en un array todos los números primos entre 1 y 100. Luego, imprime este array.
// Un número primo es un número que solo es divisible por 1 y por sí mismo.

// Aquí tu código


function primos(){
    $numeros=[];//creo un array llamado numeros
    for ($i=2; $i <=100 ; $i++) {  //designo que i vale 2, si i es menorigual a 100, i se incrementa
        $numprimo=true; //la variable es verdadera, independiemente de lo que pase en el for
        for ($a=2; $a < $i; $a++) { // designo que a vale 2, si a es menor a i, entonces a se incrementa
            if ($i % $a===0) { // pero, si el resto de i divido a es identico a 0
                $numprimo=false; //entonces la variable cambia a falso
                break;// corto y arranco de nuevo desde el segundo for
            }
        }
        if ($numprimo) { //si numprimo es verdadero, entonces los meto en el array de numeros
            $numeros[]=$i;
        }
    }
    return $numeros; //retorno el array
}
primos();

// TESTS
assert(primos() == [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97]);