<?php

function index($indeks){

    $tablica = [];

    if ($indeks<0){

        return "liczba musi być wieksza od 0";

    }


    for ($i = 0; $i < $indeks + 1; $i++){

        $tablica[$i] = array_unshift($tablica,PHP_INT_MIN,PHP_INT_MAX);

    }

    return $tablica[$indeks].'<br>';
}

echo index(-3);
echo index(0);
echo index(23);
echo index(76);
