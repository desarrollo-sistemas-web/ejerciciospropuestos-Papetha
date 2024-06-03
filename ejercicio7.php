<?php

// Desarrolla una función llamada "puntuacion" que simule un sistema de puntuaciones almacenando puntuaciones en un array. Calcula y muestra la puntuación promedio, la más alta y la más baja.
// La función devolverá un array con los siguientes valores:
// - promedio
// - max
// - min


// La función recibirá 2 arrays (uno a la vez) que se escriben a continuación, por lo que te ahorrarás esta parte. 😉

$puntuaciones = [
    "Juan" => 5,
    "María" => 9,
    "Pedro" => 3,
    "Ana" => 7,
    "Luis" => 6,
    "Laura" => 8,
    "David" => 4,
    "Carmen" => 2,
    "Raquel" => 10,
    "Jorge" => 1
];

$puntuaciones2 = [
    "Juan" => 3,
    "María" => 7,
    "Pedro" => 2,
    "Ana" => 5,
    "Luis" => 4,
    "Laura" => 6,
    "David" => 1,
    "Carmen" => 8,
    "Raquel" => 10,
    "Jorge" => 9
];

// Aquí tu código

function puntuacion($resultados){
    $valor=array_values($resultados);//creo una variable llamado valor al cual le pido el retorno de los valores que hay en el array resultados

    //cuentas necesarias
    $total=count($valor);//count cuenta los elementos dentro de la variable valor
    $suma=array_sum($valor);//suma los valores que me retorno el array en la variable valor
    $promedio=$suma/$total;//saco el promedio 
    $minimo=min($valor);//min valor de un array
    $maximo=max($valor);//max valor de un array

    return array ($promedio, $minimo, $maximo);//retorno un array con los resultados de min,max y promedio.
}
puntuacion($puntuaciones);


//TESTS
assert(puntuacion($puntuaciones) == [
    "promedio" => 5.5,
    "max" => 9,
    "min" => 1,
    "max_users" => ["Raquel"],
    "min_users" => ["Jorge"]
]);
assert(puntuacion($puntuaciones2) == [
    "promedio" => 5.5,
    "max" => 10,
    "min" => 1,
    "max_users" => ["Raquel"],
    "min_users" => ["David"]
]);