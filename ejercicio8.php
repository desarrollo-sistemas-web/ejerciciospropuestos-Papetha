<?php

// Genera una función "palindromo" que reciba un string y determine si es un palíndromo (true) o no (false).
// Un palíndromo es una palabra o frase que se lee igual en un sentido que en otro.
// La función deberá devolver un booleano.
// La función deberá ignorar los espacios, los signos de puntuación y deberá ser case-insensitive.


// Aquí tu código

function palindromo ($frase){
    $frase=strtolower(str_replace("´ ","",$frase));//a la variable frase la convierto en minuscula y ademas reemplazo espacios y signo de puntuacion por nada
    return $frase === strrev($frase); //retorno $frase si es identico a la reversa, utilizando strrev, de la $frase
}
echo palindromo($frase);
palindromo("Anita lava la tina");

// TESTS
assert(palindromo("Anita lava la tina") == true);
assert(palindromo("A mamá Roma le aviva el amor a papá y a papá Roma le aviva el amor a mamá") == true);
assert(palindromo("Anita lava la tina y la atina") == false);
