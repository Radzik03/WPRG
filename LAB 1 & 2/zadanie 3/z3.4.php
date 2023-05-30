<?php
function liczba_pierwsza($liczba)
{
    foreach ( range (2, $liczba - 1 ) AS $test )
    {
        if($liczba % $test == 0)
        {
            return false;
        }
    }
    return true;
}

$number = 7;

echo "Liczba ".$number." ";
echo (liczba_pierwsza($number))? "jest liczbą pierwszą" : "nie jest liczbą pierwszą";
