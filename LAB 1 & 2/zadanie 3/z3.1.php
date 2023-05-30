<?php


for ($i = 0; $i < 300; $i++)
{
    $tablica[$i] = rand(0,300);
}


function MaxFor($tablica)
{
    $max = $tablica[0];

    for ($f = 1; $f < count ($tablica); $f++)
    {
        if ($tablica[$f] > $max)
        {
            $max = $tablica[$f];
        }
    }
    return $max.'<br>';
}


function MaxWhile($tablica){

    $max = 0;
    $w = 1;

    while ($w < count($tablica)) {

        if ($tablica[$w]>$max)
        {
            $max = $tablica[$w];
        }

        $w++;
    }
    return $max.'<br>';
}


function MaxDoWhile($tablica){

    $max = 0;
    $d = 1;

    do
    {
        if ($tablica[$d]>$max)
        {
            $max = $tablica[$d];
        }
        $d++;
    }
    while ($d < count($tablica));

    return $max.'<br>';
}


function MaxForeach($tablica){

    $max = 0;

    foreach ($tablica as $value)
    {
        if ($value > $max)
        {
            $max = $value;
        }
    }
    return $max.'<br>';

}
echo MaxFor($tablica);
echo MaxWhile($tablica);
echo MaxDoWhile($tablica);
echo MaxForeach($tablica);