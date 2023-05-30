<?php
function mnozenie($liczba)
{
    if($liczba>0)
    {
        $rozmiar = $liczba;
        for ($x = 1; $x <= $rozmiar; $x++)
        {
            for ($y = 1; $y <= $rozmiar; $y++)
            {
                echo str_pad($x * $y, 9, "_", STR_PAD_BOTH);
            }
            echo "<br>";
        }
    }
}
mnozenie(5);
