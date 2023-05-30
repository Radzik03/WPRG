<?php
function LosowyIndeks($indeks){

    $tablica = [];

    for ($l = 0; $l < $indeks + 1; $l++){

        $tablica[$l] = rand(0, 300);

    }
    return $tablica[$indeks]." ";
}

echo LosowyIndeks(1);
echo LosowyIndeks(50);
echo LosowyIndeks(300);









