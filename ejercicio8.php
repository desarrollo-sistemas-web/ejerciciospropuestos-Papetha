<?php

// Genera una función "palindromo" que reciba un string y determine si es un palíndromo (true) o no (false).
// Un palíndromo es una palabra o frase que se lee igual en un sentido que en otro.
// La función deberá devolver un booleano.
// La función deberá ignorar los espacios, los signos de puntuación y deberá ser case-insensitive.


// Aquí tu código

function palindromo (string $frase){
    $frase=strtolower(str_replace("/[^a-z0-9] ","",$frase));//a la variable frase la convierto en minuscula y ademas reemplazo espacios y signo de puntuacion por nada
    if ($frase === strrev($frase)) { //si  $frase es identico a la reversa, utilizando strrev, de la $frase
        return true;
    }else{ //sino
        return false;
    }
}
palindromo("Anita lava la tina");

// TESTS
assert(palindromo("Anita lava la tina") == true);
assert(palindromo("A mamá Roma le aviva el amor a papá y a papá Roma le aviva el amor a mamá") == true);
assert(palindromo("Anita lava la tina y la atina") == false);
